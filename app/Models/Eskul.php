<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory;
    protected $table = 'eskul';

    protected $fillable = [
        'nama_eskul',
        'deskripsi',
        'foto_kegiatan',
        'pembina_id', // Jika perlu

    ];
public function siswa()
    {
        return $this->hasMany(Siswa::class, 'eskul_id');
    }

    public function pembina()
{
    return $this->belongsTo(Guru::class, 'pembina_id');
}
}
