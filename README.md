# Simple Library

Sistem manajemen perpustakaan sederhana yang dibangun dengan Laravel.

## Persyaratan Sistem

- PHP 8.2 atau lebih tinggi
- Composer
- MySQL Database
- Node.js & NPM (untuk kompilasi aset)

## Instalasi

1. Clone repository
2. Install dependensi PHP:
   ```bash
   composer install
   ```

3. Copy file environment:
   ```bash
   cp .env.example .env
   ```

4. Konfigurasi database MySQL di file `.env`:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database_anda
   DB_USERNAME=username_anda
   DB_PASSWORD=password_anda
   ```

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Jalankan migrasi database:
   ```bash
   php artisan migrate
   ```

7. Isi data awal (opsional):
   ```bash
   php artisan db:seed
   ```

## Menjalankan Aplikasi

Mulai server development:
```bash
php artisan serve
```

Aplikasi akan tersedia di `http://127.0.0.1:8000`

## Dokumentasi API

Project ini menyertakan koleksi Postman untuk testing API:

**File:** `simple_library.postman_collection.json`

### Endpoint API yang Tersedia:

#### Autentikasi
- `POST /api/register` - Registrasi pengguna
- `GET /api/login` - Login pengguna

#### Manajemen Buku (Membutuhkan Autentikasi)
- `GET /api/books` - Mendapatkan semua buku
- `GET /api/books/{id}` - Mendapatkan buku berdasarkan ID
- `POST /api/books` - Membuat buku baru
- `PUT /api/books/{id}` - Update buku
- `DELETE /api/books/{id}` - Hapus buku

### Alur Autentikasi:
1. Registrasi pengguna baru melalui `/api/register`
2. Login melalui `/api/login` untuk mendapatkan bearer token
3. Gunakan token tersebut di header Authorization untuk route yang dilindungi


