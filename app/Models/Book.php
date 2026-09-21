<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Mengizinkan semua kolom diisi (mass assignment)
    protected $guarded = [];

    // Relasi buku ke kategori (1 buku punya 1 kategori)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}