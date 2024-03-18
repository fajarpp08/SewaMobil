<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sewa;
use App\Models\User;
use App\Models\Mobil;
use App\Models\Pengembalian;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SewaController extends Controller
{
    // ADMIN
    public function index()
    {
        $sewas = Sewa::paginate(10); // 10 items per page

        return view('admin.sewa.index', compact('sewas'));
    }

    public function edit(Sewa $sewas, $id)
    {
        return view('admin.sewa.edit', [
            'sewas' => Sewa::find($id),
            'users' => User::all(),
            'mobils' => Mobil::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sewas = Sewa::findOrFail($id);

        $validatedData = $request->validate([
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required',
            'total_harga' => 'required',
            'mobil_id' => 'required',
            'user_id' => 'required',
            // 'status_kembali' => 'nullable',
        ], [

            'tgl_mulai.required' => 'kolom tanggal harus diisi',
            'tgl_akhir.required' => 'kolom tanggal harus diisi',
            'total_harga.required' => 'kolom total harus diisi',
            'mobil_id.required' => 'kolom mobil plat harus diisi',
            'user_id.required' => 'kolom user harus diisi',
            // 'status_kembali.nullable' => 'status kembali',
        ]);


        $sewas->tgl_mulai = $validatedData['tgl_mulai'];
        $sewas->tgl_akhir = $validatedData['tgl_akhir'];
        $sewas->total_harga = $validatedData['total_harga'];
        $sewas->mobil_id = $validatedData['mobil_id'];
        $sewas->user_id = $validatedData['user_id'];
        // $sewas->status_kembali = $validatedData['status_kembali'];

        $sewas->save();

        return redirect('/sewa')->with('message', 'Data berhasil diubah.');
    }

    public function destroy(string $id)
    {
        Sewa::destroy($id);
        return redirect('/sewa')->with('message', 'Data berhasil dihapus');
    }


    public function laporan()
    {
        $sewas = Sewa::paginate(10);

        return view('admin.sewa.laporan', compact('sewas'));
    }
    public function cetakLaporan(Request $request)
    {
        $tanggalMulai = Carbon::parse($request->input('tgl_mulai'));
        $tanggalAkhir = Carbon::parse($request->input('tgl_akhir'))->endOfDay();

        $sewas = Sewa::whereBetween('created_at', [$tanggalMulai, $tanggalAkhir])->get();
        $pdf = PDF::loadview('admin.sewa.laporanpdf', ['sewas' => $sewas]);
        return $pdf->download('Laporan_sewa.pdf');
    }



    // USER 
    public function formSewa($mobil_id)
    {
        $users = Auth::user();
        $mobils = Mobil::findOrFail($mobil_id);

        // Mengambil data tanggal yang sudah dipesan
        $tglRental = Sewa::where('mobil_id', $mobil_id)
            ->where(function ($query) {
                $query->where('tgl_akhir', '>=', now())
                    ->orWhere('tgl_mulai', '>=', now());
            })
            ->pluck('tgl_mulai', 'tgl_akhir')
            ->flatten();

        return view('user.transaksi.forms', [
            'mobils' => $mobils,
            'users' => $users->nama,
            'nama' => $users->nosim,
            'tglRental' => $tglRental,
        ]);
    }

    public function createSewa(Request $request)
    {
        $request->validate([
            'tgl_mulai' => 'required|date',
            'tgl_akhir' => 'required|date|after:tgl_mulai',
            'mobil_id' => 'required|exists:mobils,id',
        ]);

        // Mengambil data user login
        $user_id = Auth::id();

        // Mengambil data mobil 
        $mobils = Mobil::findOrFail($request->input('mobil_id'));

        // Hitung total harga berdasarkan dari tanggal mulai - tanggal selesai
        $tgl_mulai = Carbon::parse($request->input('tgl_mulai'));
        $tgl_akhir = Carbon::parse($request->input('tgl_akhir'));
        $totalHarga = $mobils->harga * $tgl_mulai->diffInDays($tgl_akhir);

        // Isi data
        $sewas = new Sewa();
        $sewas->user_id = $user_id;
        $sewas->tgl_mulai = $request->tgl_mulai;
        $sewas->tgl_akhir = $request->tgl_akhir;
        $sewas->total_harga = $totalHarga;
        $sewas->mobil_id = $request->mobil_id;

        // Save data 
        $sewas->save();

        return redirect()->route('rentalan')->with('success', 'Rental berhasil dilakukan.');
    }

    public function rentalan()
    {
        $user = Auth::user();
        // Mengambil data sewa dari data user yang login
        $rentalanUser = $user->sewas ?? collect();
        // dd($rentalanUser);

        // Mengambil data sewa 
        $rentalanPagination = Sewa::paginate(6);

        $rentalanUser->each(function ($rentalans) {
            $rentalans->status_kembali = $rentalans->pengembalian()->exists();
        });

        return view('user.dashboard.sewa', compact('rentalanUser', 'rentalanPagination'));
    }

    public function kembalikan($sewaId)
    {
        // Membuat data $sewaId adalah tipe data integer
        $sewaId = (int)$sewaId;

        // Cek data id sewa
        $sewa = Sewa::find($sewaId);

        // validasi jika tidak ada data sewa
        if (!$sewa) {
            return redirect()->route('rentalan')->with('error', 'Data sewa tidak ditemukan!');
        }

        // Menambahkan data ke tabel pengembalian
        $pengembalian = new Pengembalian([
            // Input data tgl_kembali otomatis sesuai tanggal pada saat dikembalikan 
            'tgl_kembali' => now(),
        ]);

        $sewa->pengembalian()->save($pengembalian);
        // dd($sewa);
        // Membuat data status_kembali menjadi true = 1
        $sewa->status_kembali = true;

        $sewa->save();

        return redirect()->route('rentalan')->with('success', 'Mobil telah dikembalikan.');
    }
}
