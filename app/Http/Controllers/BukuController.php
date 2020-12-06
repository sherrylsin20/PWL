<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return Buku::all();
        //return view('buku')->with('buku', $buku);

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
