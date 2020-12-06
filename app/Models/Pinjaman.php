<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $table = 'Pinjaman';
    protected $fillable = ['nim_mhs', 'id_buku', 'waktu_kembali'];

    public function mahasiswa() {
        return $this->belongsTo(Pinjaman::class);
    }
}
