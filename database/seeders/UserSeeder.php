<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Tembak data user ke database dengan NIS
        User::create([
            'name' => 'Siswa Satu',
            'nis' => '12345678', // NIS siswa
            'password' => Hash::make('password'), // Password dienkripsi
            'role' => 'siswa',
        ]);
    }
}
