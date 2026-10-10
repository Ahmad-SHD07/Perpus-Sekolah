# Sistem Informasi Perpustakaan (Perpus-Sekolah) 📚

Aplikasi berbasis web ini dibangun untuk memenuhi Tugas Jurusan Pengembangan Perangkat Lunak dan Gim (PPLG) di SMK Yadika Soreang. Sistem ini dirancang untuk mempermudah pengelolaan data sirkulasi perpustakaan secara digital.

## 🛠️ Teknologi yang Digunakan

- **Framework:** Laravel 11
- **Frontend:** Bootstrap 5 (menggunakan `laravel/ui`)
- **Database:** MySQL
- **Arsitektur:** MVC (Model-View-Controller)

## ✨ Progres Fitur

- [x] Autentikasi Admin (Login/Register)
- [x] Dashboard Panel
- [x] CRUD Data Buku (Tambah, Edit, Lihat, Hapus)
- [ ] Manajemen Kategori Buku
- [ ] Manajemen Data Anggota
- [ ] Transaksi Peminjaman & Pengembalian
- [ ] Cetak Laporan (Opsional)

## 🚀 Panduan Instalasi Lokal

1. Lakukan _clone_ repositori ini ke komputer lokal:
        ```bash
        git clone [https://github.com/Ahmad-SHD07/perpus-sekolah.git](https://github.com/Ahmad-SHD07/perpus-sekolah.git)
2. Masuk ke folder proyek dan instal dependensi sistem:
        cd perpus-sekolah
        composer install
        npm install && npm run build
3. Copy file env dan buat kunci aplikasi baru
        cp .env.example .env
        php artisan key:generate
4. Buka file .env dan sesuaikan koneksi database MySQL Anda
        DB_CONNECTION=mysql/sqlite
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=perpus_sklh
        DB_USERNAME=username_anda
        DB_PASSWORD=password_anda (opsional)
5. Eksekusi migrasi tabel beserta data awal (seeder)
        Eksekusi migrasi tabel beserta data awal (seeder)
6. Jalankan server pengembangan
        php artisan serve -> http://127.0.0.1:8000