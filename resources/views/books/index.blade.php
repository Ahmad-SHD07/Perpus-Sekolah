@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <span>Data Buku</span>
                <a href="{{ route('books.create') }}" class="btn btn-primary btn-sm">Tambah Buku</a>
            </div>

            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Stok</th>
                            <th style="width: 150px; text-align: center">Aksi</th>
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
                                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
