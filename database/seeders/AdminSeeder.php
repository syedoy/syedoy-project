<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Membuat akun admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com', // Ubah sesuai kebutuhan
            'password' => Hash::make('password123'), // Hashing password
            'role' => 'admin', // Pastikan kamu memiliki kolom role di tabel users
        ]);
    }
}
