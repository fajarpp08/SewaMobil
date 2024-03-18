<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Models\User;
use App\Models\Mobil;
use App\Models\Pengembalian;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // ADMIN
    public function dashboardAdmin()
    {
        $mobilData = Mobil::take(6)->get();
        return view(
            'admin.dashboard.index',
            [
                'mobils' => Mobil::all(),
                'sewas' => Sewa::all(),
                'pengembalians' => Pengembalian::all(),
                'users' => User::all(),
                'mobilData' => $mobilData
            ]
        );
    }

    // USER
    public function dashboardUser()
    {
        $mobils = Mobil::all();
        return view('user.dashboard.index', compact('mobils'));
    }
    public function mobilUser()
    {
        $mobils = Mobil::all();
        $mobils = Mobil::paginate(6);
        return view('user.dashboard.mobil', compact('mobils'));
    }
    public function mobilDetail($id)
    {
        $mobils = Mobil::find($id);
        $mobilsAll = Mobil::all();
        return view('user.dashboard.detail', compact('mobils', 'mobilsAll'));
    }
    public function account()
    {
        return view(
            'user.dashboard.account'

        );
    }
}
