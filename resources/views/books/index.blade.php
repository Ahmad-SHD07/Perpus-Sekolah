@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <span>Data Buku</span>
                <a href="{{ route('books.create') }}" class="btn btn-primary btn-sm">Tambah Buku</a>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->kode_buku }}</td>
                                <td>{{ $book->judul_buku }}</td>
                                <td>{{ $book->category->nama_kategori ?? '-' }}</td>
                                <td>{{ $book->penulis }}</td>
                                <td>{{ $book->stok_buku }}</td>
                                <td>
                                    {{-- Tombol button edit --}}
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
