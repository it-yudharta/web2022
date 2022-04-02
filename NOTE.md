### Materi 1
1. Buka Terminal
2. Masuk ke DIR/Folder tempat project
3. Jalankan perintah: `composer create-project laravel/laravel web2022`
4. buka di vscode.
5. Buka Terminal di menu view-> terminal (ctrl+`)
6. Jalankan perintah `php artisan serve`
7. Buat Route `/info` pada file `routes/web`

### Materi 2
1. Buat Database di mysql.
2. Setting `.env` agar terhubung ke database.
3. Menjalankan migrasi dengan `php artisan migrate`.
4. Route untuk akses konfigurasi.
5. Uncomment DatabaseSeeder.php baris 17 untuk membuat file dummy.
6. jalankan `php artisan db:seed` untuk membuat record pada table users.
7. Buat Route `/users` untuk melihat data user yang ada di database.

### Materi 3
1. Buat Struktur database product dengan menjalankan `php artisan make:model -m Product`.
2. Sesuaikan struktur tabel products dalam file migrations.
3. Jalankan migrasi `php artisan migrate`.
4. Buat factory dengan menjalankan `php artisan make:factory ProductFactory`.
5. Buat seeder dengan menjalankan `php artisan make:seeder ProductSedder`.
6. Sesuaikan factory dan seeder. kemudian jalankan seeder dengan `php artisan db:seed ProductSeeder`.
7. Buat products route.
8. Buat controller dengan menjalankan `php artisan make:controller -r ProductController`.
