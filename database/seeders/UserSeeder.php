<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Fajar Admin',
            'alamat' => 'Padang',
            'nosim' => '0011',
            'nohp' => '081218173646',
            'password' => Hash::make('123'),
            'role' => 'Admin',
        ]);
        User::create([
            'nama' => 'Fajar User',
            'alamat' => 'Jakarta',
            'nosim' => '0022',
            'nohp' => '083171182636',
            'password' => Hash::make('123'),
            'role' => 'User',
        ]);
    }
}
