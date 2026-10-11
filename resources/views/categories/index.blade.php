@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <span>Data Kategori</span>
                <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm">Tambah Kategori</a>
            </div>

            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th style="width: 150px; text-align: center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->nama_kategori }}</td>
                                <td>
                                    {{-- Tombol button edit --}}
                                    <a href="{{ route('categories.edit', $category->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    {{-- Tombol button hapus --}}
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
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
