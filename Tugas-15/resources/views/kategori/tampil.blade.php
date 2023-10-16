@extends('Layout.master')

@section('judul')
Halaman List Kategori
@endsection

@section('content')
<a href="/kategori/create" class="btn btn-primary btn-sm">Tambah</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($kategori as $key => $value)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->nama }}</td>
                <td>
                    <form action="/kategori/{{$value->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/kategori/{{$value->id}}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/kategori/{{$value->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td>Tidak Ada Data</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection