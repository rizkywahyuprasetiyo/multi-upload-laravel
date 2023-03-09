# Multiple Upload File with Laravel 9

Belajar implementasi multiple upload file di laravel 9.

## Cara instalasi

1. Clone source code dari github ini

    git clone https://github.com/rizkywahyuprasetiyo/multi-upload-laravel.git

2. Lalu install semua paket composer yang diperlukan

    composer install

3. Configurasi database (menyesuaikan dengan configurasi database yang antum gunakan, ane menggunakan configurasi seperti dibawah ini)

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=multi_uploads
    DB_USERNAME=root
    DB_PASSWORD=password

4. Buat storage link ke folder public

    php artisan storage:link

5. Configurasi FLYSYSTEM_DISK dari local menjadi public

    FILESYSTEM_DISK=public

6. Generate enkripsi key Laravel

    php artisan key:generate

7. Jalankan server

    php artisan serve
