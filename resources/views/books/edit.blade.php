@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Edit Data Buku</div>
            <div class="card-body">
                <form action="{{ route('books.update', $book->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Kode Buku</label>
                        <input type="text" name="kode_buku" class="form-control"
                            value="{{ old('kode_buku', $book->kode_buku) }}" required>
                    </div>
                    <div class="mb-3">
                        <label>Judul Buku</label>
                        <input type="text" name="judul_buku" class="form-control"
                            value="{{ old('judul_buku', $book->judul_buku) }}" required>
                    </div>
                    <div class="mb-3">
                        <label>Kategori</label>
                        <select name="category_id" class="form-control" required>
                            <option value="">Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Penulis</label>
                            <input type="text" name="penulis" class="form-control"
                                value="{{ old('penulis', $book->penulis) }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Penerbit</label>
                            <input type="text" name="penerbit" class="form-control"
                                value="{{ old('penerbit', $book->penerbit) }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Tahun Terbit</label>
                            <input type="number" name="tahun_terbit" class="form-control"
                                value="{{ old('tahun_terbit', $book->tahun_terbit) }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Stok</label>
                            <input type="number" name="stok_buku" class="form-control"
                                value="{{ old('stok_buku', $book->stok_buku) }}" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('books.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
@endsection
