<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10); // 10 items per page

        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'alamat' => 'required',
            'nosim' => 'required|unique:users',
            'nohp' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
        ], [
            'nama.required' => 'Nama harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'nosim.required' => 'Nomor SIM harus diisi!',
            'nosim.unique' => 'Nomor SIM ini sudah digunakan, silahkan ganti dengan nomor SIM yang lain!',
            'nohp.required' => 'Nomor HP harus diisi!',
            'nohp.unique' => 'Nomor HP ini sudah digunakan, silahkan ganti dengan nomor HP yang lain!',
            'role.required' => 'Role harus diisi!',
            'password.required' => 'Password harus diisi!',
        ]);


        if ($validator->fails()) {
            return redirect('/useradm/create')->withErrors($validator)->withInput();
        }
        $user = $validator->valid();

        $user = new User();
        $user->nama = $request->nama;
        $user->alamat = $request->alamat;
        $user->nosim = $request->nosim;
        $user->nohp = $request->nohp;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;

        $user->save();

        return redirect('/useradm')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::find($id);
        return view('admin.user.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'nosim' => 'required',
            'nohp' => 'required',
            'role' => 'required',
            'password' => 'nullable',
        ], [
            'nama.required' => 'kolom nama harus diisi',
            'alamat.required' => 'kolom nomor plat harus diisi',
            'nosim.required' => 'kolom nomor sim harus berisi',
            'nohp.required' => 'kolom nomor hp  harus diisi',
            'password.required' => 'kolom password  harus diisi',
            'role.required' => 'kolom role  harus diisi',

        ]);

        $user->nama = $validatedData['nama'];
        $user->alamat = $validatedData['alamat'];
        $user->nosim = $validatedData['nosim'];
        $user->nohp = $validatedData['nohp'];
        $user->password = Hash::make($request->password);
        $user->role = $validatedData['role'];

        $user->save();

        return redirect('/useradm')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('/useradm')->with('message', 'Data berhasil dihapus!');
    }

    // fitur search user
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        // dd($keyword);

        $users = User::where(function ($query) use ($keyword) {
            $query->where('nama', 'like', "%$keyword%")
                ->orWhere('nosim', 'like', "%$keyword%")
                ->orWhere('role', 'like', "%$keyword%");
        })->paginate(10);
        // ->toSql($users);
        // dd($users);

        return view('admin.user.index', compact('users', 'keyword'));
    }
}
