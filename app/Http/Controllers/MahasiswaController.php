<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return Mahasiswa::all();
    }

    public function showPinjaman($nim)
    {
        $pinjam = Mahasiswa::find($nim)->pinjaman;
            return response()->json([
                'message' => 'Menampilkan peminjaman sesuai nim',
                'data' => $pinjam
            ], 200);
        
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
