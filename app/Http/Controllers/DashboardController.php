<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use App\Models\Guru;
use App\Models\Proposal;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        
        // Ambil data pengguna yang sedang login
        $user = auth()->user();
    
        // Ambil total siswa, guru, dan ekskul
        $totalSiswa = Siswa::count(); // Hitung total siswa
        $totalGuru = Guru::count();   // Hitung total guru
        $totalEskul = Eskul::count(); // Hitung total ekskul
        $totalProposals = Proposal::count(); // Hitung total ekskul
    
        // Tampilkan view dashboard dengan data
        return view('admin.home', compact('user', 'totalSiswa', 'totalGuru', 'totalEskul','totalProposals'));
    }
    
}
