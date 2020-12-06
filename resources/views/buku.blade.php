@extends('layout.app')
@section('title', 'Buku')
@section('style')

<link href="css/table.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/0e105a0a58.js" crossorigin="anonymous"></script>



@endsection
@section('content')

<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Judul</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Tahun Terbit</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

        @foreach($buku as $books)
          <tr>
            <td>{{$books->id_buku}}</td>
            <td>{{$books->judul}}</td>
            <td>{{$books->pengarang}}</td>
            <td>{{$books->tahun_terbit}}</td>
            <td>{{$books->penerbit}}</td>
            @if(($books->status) == 1)
                <td>Tersedia</td>
                @else
                <td>Dipinjam</td>
            @endif
            <td>
              <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
              <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
              <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <br>
      <button type="button" class="btn btn-primary" disabled><i class="far fa-eye"></i></button>
      <label>: Detail peminjam</label><br><br>
      <button type="button" class="btn btn-success" disabled><i class="fas fa-edit"></i></button>
      <label>: Edit buku</label><br><br>
      <button type="button" class="btn btn-danger" disabled><i class="far fa-trash-alt"></i></button>
      <label>: Hapus buku</label>
    </div>
  </div>

@endsection