# Website Company Profile Mizab Haromaen

## Deskripsi Singkat

Website Profil Perusahaan PT Mizab Haromaen yang berfungsi untuk nenampilkan informasi tentang Mizab Haromaen

## Fitur

● Menampilkan Visi Misi
● Menampilkan Daftar Paket Umroh
● Menampilkan Video Testimoni Jamaah
● FAQ
● Sistem Autenntikasi Admin
● CRUD Konten di Website
● Bubble ChatBot

## Teknologi yang dipakai

### Backend

● Laravel

### Frontend

● HTML
● Blade
● Tailwind CSS
● Stisla
● JavaScript

## Instalasi

### Yang diperlukan

● PHP 8.3
● Composer
● Node.js & NPM
● MySQL

### Panduan Instalasi

1. Clone Repo ini
   ```bash
   git clone https://github.com/Aidil-noob/Mizab-Haromaen
   cd Mizab-Haromaen
   ```
2. Install PHP Dependencies
   ```bash
   composer install
   ```
3. Install Node.js & build assets
   ```bash
   npm run build && npm run dev
   ```
4. Setup environment
   ```bash
   cp .env.example .env
   ```
5. Bikin kunci aplikasi
   ```bash
   php artisan key:generate
   ```
6. Atur koneksi database di file .env, lalu jalankan migrasi
   ```bash
   php artisan migrate
   ```
7. Jalanin server local
   ```bash
   php artisan serve
   ```