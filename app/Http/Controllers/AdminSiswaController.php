<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AdminSiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('eskul')->get(); // Ambil data siswa beserta eskul
        return view('admin.siswa.index', compact('siswa'));
    }

    public function create()
    {
        $eskuls = Eskul::all();
        return view('admin.siswa.create', compact('eskuls'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'nis' => 'required|unique:siswa',
            'password' => 'required|min:6',
            'kelas' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'eskul_id' => 'required|exists:eskul,id',
            'foto_siswa' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi untuk foto
        ]);
    
        // Handling foto_siswa file upload
        if ($request->hasFile('foto_siswa')) {
            $namaFoto = 'siswa_'.time().'_'.$request->foto_siswa->getClientOriginalName();
            $request->foto_siswa->move(public_path('images'), $namaFoto);
        } else {
            $namaFoto = null; // Foto tidak diupload, tetap null
        }
    
     
    
        // Simpan data siswa
        Siswa::create([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'password' => bcrypt($request->password), // Hash password
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'foto_siswa' => $namaFoto,
            'eskul_id' => $request->eskul_id, // Pastikan untuk menyimpan eskul_id
        ]);
    
        return redirect()->route('admin.siswa.index')->with('success', 'Siswa berhasil ditambahkan');
    }

    public function show($id)
    {
        // Ambil data siswa berdasarkan ID
        $siswa = Siswa::with(['eskul', 'eskul.pembina'])->findOrFail($id);

        return view('admin.siswa.show', compact('siswa'));
    }

    
}
