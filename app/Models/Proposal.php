<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
     // Kolom yang dapat diisi
     protected $table = 'proposals';

     protected $fillable = [
        'siswa_id',
        'eskul_id',
        'judul',
        'deskripsi',
        'file',
        'status',
        'revisi',
        'doc_kegiatan', 
        'jadwal_pertemuan', 
    ];

     // Relasi ke model Siswa
     public function siswa()
     {
         return $this->belongsTo(Siswa::class);
     }
 
     // Relasi ke model Eskul
     public function eskul()
     {
         return $this->belongsTo(Eskul::class);
     }
}
