@extends('Layout.master')

@section('judul')
Detail Kategori
@endsection

@section('content')
<h1>{{$kategori->nama}}</h1>
<p>{{$kategori->descripsi}}</p>

<a href="/kategori" class="btn btn-secondary btn-sm">Back</a>
@endsection