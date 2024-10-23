<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';

    protected $fillable = [
       'nama',
        'nis',
        'password',
        'kelas',
        'jenis_kelamin',
        'alamat',
        'tanggal_lahir',
        'eskul_id',
        'foto_siswa',
    ];
    // Jika ingin mengenkripsi password otomatis
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function eskul()
    {
        return $this->belongsTo(Eskul::class, 'eskul_id');
    }

}

