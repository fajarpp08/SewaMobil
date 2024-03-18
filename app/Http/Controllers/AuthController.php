<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nosim' => 'required',
            'password' => 'required',
        ], [
            'nosim.required' => 'Silahkan Masukkkan Nomor SIM',
            'password.required' => 'Silahkan Masukkan Password.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::where('nosim', $request->nosim)->first();

        if ($user) {
            if (Auth::attempt(['nosim' => $request->nosim, 'password' => $request->password])) {
                $user = Auth::user();

                if ($user->role == 'Admin') {
                    return redirect()->route('dashboardAdmin');
                } elseif ($user->role == 'User') {
                    return redirect()->route('dashboardUser');
                }
            } else {
                // Password salah
                $validator->errors()->add('password', 'Password salah!');
                return redirect()->back()->withErrors($validator)->withInput();
            }
        } else {
            $validator->errors()->add('nosim', 'Nomor SIM ini tidak terdaftar!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function register()
    {
        return view('register');
    }

    public function saveRegister(Request $request)
    { {
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'alamat' => 'required',
                'nosim' => 'required|unique:users',
                'nohp' => 'required|unique:users',
                'password' => 'required',

            ], [
                'nama.required' => 'Nama harus diisi!',
                'alamat.required' => 'Alamat harus diisi!',
                'nosim.required' => 'Nomor SIM harus diisi!',
                'nosim.unique' => 'Nomor SIM ini sudah ada, silahkan ganti!',
                'nohp.required' => 'Nomor HP harus diisi!',
                'nohp.unique' => 'Nomor HP ini sudah ada, silahkan ganti!',
                'password.required' => 'Password harus diisi!',
            ]);

            if ($validator->fails()) {
                return redirect('/register')->withErrors($validator)->withInput();
            }
            $register = $validator->valid();

            $register = new User();
            $register->nama = $request->nama;
            $register->alamat = $request->alamat;
            $register->nosim = $request->nosim;
            $register->nohp = $request->nohp;
            $register->password = Hash::make($request->password);

            $register->save();

            return redirect('/login')->with('message', 'Akun berhasil dibuat, silahkan login!');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
