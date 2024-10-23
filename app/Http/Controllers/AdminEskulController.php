<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminEskulController extends Controller
{
    public function index()
    {
        $eskuls = Eskul::with('pembina')->paginate(10); // Paginate 10 per halaman
        return view('admin.eskul.index', compact('eskuls'));
    }

    public function create()
    {
        $guru = Guru::all(); // Ambil semua data guru dari tabel guru
        return view('admin.eskul.create', compact('guru'));   
     }

      // Menyimpan eskul baru
      public function store(Request $request)
      {
          $request->validate([
              'nama_eskul' => 'required|string|unique:eskul|max:255',
              'foto_kegiatan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi foto
              'deskripsi' => 'nullable|string',
              'pembina_id' => 'nullable|exists:guru,id'  // Pastikan pembina ada di tabel guru

          ]);
  
          // Handling the foto_kegiatan file upload
        if ($request->hasFile('foto_kegiatan')) {
            // Check if an old image exists and delete it
            if ($request->image_old) {
                $image_url = public_path('img/eskul/' . $request->image_old);
                if (file_exists($image_url)) {
                    unlink($image_url);
                }
            }

            // Create a unique name for the new image
            $namaFile = 'eskul_'.time().'_'.$request->foto_kegiatan->getClientOriginalName();
            // Move the uploaded file to the designated folder
            $request->foto_kegiatan->move(public_path('images'), $namaFile);
        } else {
            // If no new image is uploaded, use the old one
            $namaFile = $request->image_old;
        }

        // Create or update the eskul record
        $eskul = new Eskul();
        $eskul->nama_eskul = $request->nama_eskul;
        $eskul->deskripsi = $request->deskripsi;
        $eskul->foto_kegiatan = $namaFile;
        $eskul->pembina_id = $request->pembina_id;

          // Save the image name
        $eskul->save();

  
          return redirect()->route('admin.eskul.index')->with('success', 'Eskul berhasil ditambahkan.');
      }


      public function  destroy(string $id)
      {
          $delete = DB::table('eskul')->where('id', $id)->delete();
          if ($delete) {
              return redirect()->route('admin.eskul.index')->with('success', 'Data Berhasil Dihapus');
          } else {
              return redirect()->route('admin.eskul.index')->with('failed', 'Data Gagal Dihapus');
          }
      }

      public function show($id)
      {
          $eskul = Eskul::with('pembina')->findOrFail($id);
    return view('admin.eskul.show', compact('eskul'));
      }
}
