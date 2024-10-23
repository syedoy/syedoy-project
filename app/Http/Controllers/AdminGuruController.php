<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class AdminGuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all();
        return view('admin.guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
            'nip' => 'required|unique:guru',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required',
            'mata_pelajaran' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'no_tlp' => 'nullable|string',
        ]);

        // Menangani upload foto
        $namaFile = null; // Default untuk nama file
        if ($request->hasFile('foto')) {
            // Buat nama unik untuk gambar baru
            $namaFile = 'guru_' . time() . '_' . $request->foto->getClientOriginalName();
            // Pindahkan file yang diunggah ke folder yang ditentukan
            $request->foto->move(public_path('images'), $namaFile);
        }

        Guru::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jenis_kelamin' => $request->jenis_kelamin,
            'mata_pelajaran' => $request->mata_pelajaran,
            'alamat' => $request->alamat,
            'foto' => $namaFile, // Simpan nama file foto
            'no_tlp' => $request->no_tlp,
        ]);

        return redirect()->route('admin.guru.index')->with('success', 'Guru berhasil ditambahkan');
    }

    public function show($id)
    {
        // Ambil data guru berdasarkan ID
        $guru = Guru::findOrFail($id);

        // Kirim data ke view
        return view('admin.guru.show', compact('guru'));
    }

    public function edit(GURU $guru)
    {
        
        // Kirim data ke view
        return view('admin.guru.edit', compact('guru'));
    }

    public function update()
    {
        
        
    }



}
