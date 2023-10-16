@extends('Layout.master')

@section('judul')
Halaman Edit Kategori
@endsection

@section('content')
<form action="/kategori/{{$kategori->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Nama Kategori</label>
        <input type="text" name="nama" value="{{$kategori->nama}}" class="form-control">
    </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label>Deskripsi Kategori</label>
        <textarea name="descripsi" class="form-control" cols="30" rows="10">{{$kategori->descripsi}}</textarea>
    </div>
    @error('descripsi')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection