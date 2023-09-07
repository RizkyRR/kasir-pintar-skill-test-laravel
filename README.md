# PT. Kasir Pintar Internasional Test Skill - Pengajuan Reimbursement

Ini merupakan hasil test skill yang saya lakukan di PT. Kasir Pintar Internasional. Di dalam tes tersebut saya diuji untuk membuat aplikasi sederhana tentang Reimbursement. Terdapat role yang berbeda untuk mengakses setiap halaman role tersebut terdiri dari Super Admin, Director, Finance, dan Staff. Aplikasi ini saya diwajibkan untuk menggunakan Laravel 10. Berikut instalasi yang bisa Anda lalkukan jika hendak mengetahui detailn dan cara kerjanya.

### Prasyarat

Pastikan Anda telah menginstal perangkat lunak berikut sebelum memulai:

- PHP (disarankan PHP 8.2 atau yang lebih baru)
- Composer
- MySQL atau database lain yang kompatibel
- Node.js dan npm (untuk mengelola asset frontend)

### Langkah-langkah Instalasi

1. **Clone Repositori**

   ```bash
   git clone https://github.com/RizkyRR/kasir-pintar-skill-test-laravel.git
   cd kasir-pintar-skill-test-laravel

2. **Instal Dependensi PHP**
    Untuk mendapatkan dependensi PHP yang diperlukan atau vendor, pastikan lakukan instalasi dengan perintah: composer install

3. **Buat File Konfigurasi .env**
    Duplikat file .env.example menjadi .env dan konfigurasikan file .env sesuai dengan pengaturan database dan konfigurasi lainnya yang sesuai dengan lingkungan lokal pengembang. Atau bisa juga dengan menggunakan perintah: cp .env.example .env

4. **Generate Key untuk .env**
    Anda bisa menggunakan perintah sebagai berikut: php artisan key:generate

5. **Buat Database**
    - Buat database baru di phpMyAdmin 
    - Salin nama database tersebut ke dalam file .env sebagai berikut
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=kasir-pintar-skill-test-laravel (bebas sesuaikan dengan Anda)
        DB_USERNAME=root
        DB_PASSWORD=

6. **Generate FileSystem**
    Karena di dalam proyek ini menggunakan Storage atau FileSystem pastikan anda menjalankan perintah: php artisan storage:link

7. **Migrasi Database**
    Jalankan migrasi untuk membuat tabel-tabel yang diperlukan di database: php artisan migrate

8. **Jalankan Seeder**
    Jalankan perintah berikut untuk mengisikan default data proyek ini kedalam database Anda: php artisan db:seed

9. **Instal Dependensi JavaScript**
    Dalam direktori proyek, jalankan perintah berikut untuk menginstal dependensi JavaScript melalui npm:npm install && npm run dev
    Atau bisa satu persatu menjalankannya yang pertama npm install, dan yang kedua npm run dev

10. **Jalankan Server Lokal**
    Terakhir, Anda dapat menjalankan server pengembangan lokal dengan perintah:php artisan serve


### Akses Project
| NIP | NAMA | JABATAN | PASSWORD |
|------|------|------|------|
| 0000 | Super Admin   | SUPERADMIN  | 000000  |
| 1234 | DONI   | DIRECTOR   | 123456  |
| 1235  | DONO   | FINANCE   | 123456  |
| 1236  | DONA   | STAFF   | 123456  |


### Setting Project
1. **Lakukan Penambahan Menu Baru**
    - Untuk bisa mengakses halaman ini hanya role Super Admin saja
    - Bisa diakses di halaman berikut: http://localhost:8000/menu
    - Untuk field Parent Menu boleh dipilih dan juga tidak. Jika dipilih akan menjadi submenu dari menu yang dipilih, Jika dibiarkan akan menjadi menu baru atau menu parent.
    - Untuk field Permission Menu isikan perilaku apa saja yang bisa dilakukan pada menu atau submenu yang dibuat. Nantinya akan mempengaruhi setiap role akses

2. **Lakukan Role Baru**
    - Untuk bisa mengakses halaman ini hanya role Super Admin saja.
    - Bisa diakses di halaman berikut: http://localhost:8000/role
    - Terdapat Kode Role Akses yang sifatnya unik untuk pembeda antara role satu dengan yang lainnya.
    - Pada DETAIL AUTHORIZATION, user bisa menggunakan action/permission apa saja untuk role yang dipilih.

3. **Tambah Pengguna/Karyawan**
    - Untuk bisa mengakses halaman ini hanya role Super Admin dan Director saja.
    - Bisa diakses di halaman berikut: http://localhost:8000/user
    - Terdapat Reset Password yang akan mengubah password karyawan atau pengguna menjadi kasirpintar.
    - Saat tambah karyawan/pengguna, hanya role Super Admin saja yang bisa mendaftarkan Super Admin baru. Untuk Director tidak tersedia.
