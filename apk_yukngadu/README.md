
# P2 - Ujikom 2023

Projects Uji Kompetensi SMK RPL 2023. Paket 2 - Aplikasi Pelaporan Pengaduan Masyarakat
## Installation

Pindahkan folder projects yang di download pada lokasi yang diinginkan. Kemudian jalankan web server `(XAMPP/Laragon)`.

Buka file .env dan ubah isi `DB_DATABASE` menjadi nama database yang akan dipakai. Kemudian buka console.

```bash
  composer update
```
Migrasikan database
```bash
  php artisan migrate:fresh
```
Jalankan project nya
```bash
  php artisan serve
```
