<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'guru';

    protected $fillable = [
        'nama',
        'nip',
        'jenis_kelamin',
        'mata_pelajaran',
        'alamat',
        'foto',
        'no_tlp',
    ];

    public function eskul()
{
    return $this->hasMany(Eskul::class, 'pembina_id');
}
}
