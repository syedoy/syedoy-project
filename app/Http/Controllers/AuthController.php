<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
            return view('auth.loginSiswa');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nis' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('nis', 'password');

        // Cek apakah ada pengguna dengan NIS dan password yang sesuai
        $user = Siswa::where('nis', $credentials['nis'])->where('password', $credentials['password'])->first();

        if ($user) {
            Auth::login($user); // Login pengguna
            return redirect()->route('dashboard'); // Redirect ke dashboard
        }

        // Jika gagal
        return back()->withErrors([
            'nis' => 'NIS atau password salah.',
        ]);
    }
    public function admin()
    {
            return view('auth.login');
    }

public function adminLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Menggunakan attempt untuk login
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        $request->session()->regenerate(); // Regenerasi sesi untuk keamanan
        return redirect()->route('admin.dashboard')->with('success','Login Berhasil'); // Redirect ke dashboard
    }

    // Jika gagal
    return back()->withErrors([
        'email' => 'email atau password salah.',
    ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
