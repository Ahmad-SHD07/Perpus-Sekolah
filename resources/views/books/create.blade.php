@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Tambah Data Buku</div>
            <div class="card-body">
                <form action="{{ route('books.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Kode Buku</label>
                        <input type="text" name="kode_buku" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Judul Buku</label>
                        <input type="text" name="judul_buku" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Kategori</label>
                        <select name="category_id" class="form-control" required>
                            <option value="">Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Penulis</label>
                            <input type="text" name="penulis" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Tahun Terbit</label>
                            <input type="text" name="tahun_terbit" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Stok</label>
                            <input type="text" name="stok_buku" class="form-control" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('books.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
