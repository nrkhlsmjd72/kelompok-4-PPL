## kelompok-4-PPL
# Proyek Perangkat Lunak

# Company Profile TPA Miftahul Jannah dengan Laravel 7
Ini adalah repositori untuk proyek Company Profile Taman Pendidikan Al-Qur'an (TPA) Miftahul Jannah yang dibangun dengan menggunakan framework Laravel. Proyek ini merupakan bagian dari tugas Pengembangan Perangkat Lunak (PPL) kelompok 4.


Deskripsi Proyek
Proyek ini bertujuan untuk mengembangkan sebuah website Company Profile yang akan digunakan oleh TPA Miftahul Jannah untuk menginformasikan layanan, program, dan kegiatan yang mereka tawarkan kepada masyarakat terutama kepada santri. 
Website ini juga akan mencakup informasi kontak, galeri foto, dan lainnya untuk memberikan gambaran lengkap tentang TPA Miftahul Jannah.
Website ini dilengkapi dengan fasilitas halaman front end dan back end. Front end adalah halaman website yang dikunjungi oleh pengunjung website, sedangkan back end adalah untuk mengelola konten oleh Administrator.

# Fitur Front End
* Homepage dengan image slider
* Halaman berita
* Halaman produk
* Halaman profil
* Halaman galeri gambar
* Halaman galeri video
* Halaman unduhan/download
* Halaman kontak

# Fitur Back End
* Halaman login administrator
* Halaman Dashboard
* Halaman untuk mengelola berita
* Halaman untuk mengelola produk
* Halaman untuk mengelola profil
* Halaman untuk mengelola galeri gambar
* Halaman untuk mengelola galeri video
* Halaman untuk mengelola unduhan/download
* Halaman konfigurasi website

# Teknologi yang Digunakan
* Laravel 7: Framework PHP yang kuat untuk pengembangan web.
* MySQL: Basis data untuk menyimpan informasi yang diperlukan.
* HTML, CSS, dan JavaScript: Teknologi dasar untuk mengatur tampilan dan interaksi.

# Cara Menggunakan Proyek
* Clone repositori ini ke komputer lokal Anda.
* Jalankan composer install untuk menginstal semua dependensi Laravel.
* Salin file .env.example menjadi .env dan sesuaikan konfigurasi basis data.
* Jalankan php artisan key:generate untuk menghasilkan kunci aplikasi.
* Jalankan php artisan migrate untuk membuat tabel-tabel basis data.
* Jalankan php artisan serve untuk menjalankan server pengembangan lokal.

Username dan password
* Halaman Login: http://localhost/TA_PPL/login
* Username: admin
* Password: admin

# Cara Install CMS Laravel 7
* Unduh file source code di https://github.com/javawebmedia/cmslaravel7/releases atau https://github.com/javawebmedia/cmslaravel7
* Buat folder cmslaravel7 di folder htdocs/www di root folder Anda
* Extract semua file yang sudah Anda unduh ke folder tersebut. Jika Anda akan menggunakannya untuk online, Anda tinggal upload file unduhan di atas ke folder public_html Anda.
* Buat database dengan nama belajar_laravel
* Import file belajar_laravel.sql dengan menggunakan phpmyadmin Anda ke dalam database belajar_laravel yang telah Anda buat
* Rename file file .env.example menjadi .env (atau Anda membuat file .env baru dan Copy lalu Paste isi konten .env.example ke file .env tersebut)
* Ekstrak file vendor.zip di dalam folder cmslaravel7
* Buka browser Anda dan ketikkan alamat URL nya, misalnya: http://localhost/cmslaravel7 atau http://alamatwebsitemu.com.


