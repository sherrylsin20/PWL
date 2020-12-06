<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model {
    protected $table = 'Mahasiswa';
    protected $primaryKey = 'nim';
    protected $fillable = ['nim', 'nama', 'angkatan', 'prodi', 'fakultas'];

    public function pinjaman() {
        return $this->hasMany(Pinjaman::class, 'nim_mhs');
    }
}