<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model {
    protected $table = 'Buku';
    protected $fillable = ['judul', 'pengarang', 'tahun_terbit', 'penerbit', 'status'];

    public function pinjaman() {
        return $this->belongsTo(Pinjaman::class);
    }
}

