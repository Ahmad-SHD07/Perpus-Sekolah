<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Mengambil semua buku beserta relasi kategorinya
        $books = Book::with('category')->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        // Mengambil kategori untuk pilihan di dropdown form
        $categories = Category::all();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validasi data, memastikan kode buku unik (tidak boleh sama)
        $validated = $request->validate([
            'kode_buku' => 'required|unique:books,kode_buku',
            'judul_buku' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|digits:4',
            'category_id' => 'required|exists:categories,id',
            'stok_buku' => 'required|integer|min:0',
        ]);

        Book::create($validated);
        return redirect()->route('books.index');
    }

    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('books.edit', compact('book', 'categories'));
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, Book $book)
    {
        // Validasi kode buku unik, tapi abaikan kode buku milik buku yang sedang diedit ini
        $request->validate([
            'kode_buku' => 'required|unique:books,kode_buku,' . $book->id,
            'judul_buku' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|digits:4',
            'category_id' => 'required|exists:categories,id',
            'stok_buku' => 'required|integer|min:0',
        ]);

        $book->update($request->validated());

        return redirect()->route('books.index')->with('success', 'Data buku berhasil diperbarui!');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Data buku berhasil dihapus!');
    }
}