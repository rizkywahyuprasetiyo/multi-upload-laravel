# Multiple Upload File with Laravel 9

Belajar implementasi multiple upload file di laravel 9.

## Cara instalasi

1. Clone source code dari github ini

    git clone https://github.com/rizkywahyuprasetiyo/multi-upload-laravel.git

2. Copy file .env.example dan ubah nama menjadi .env

3. Lalu install semua paket composer yang diperlukan

    composer install

4. Configurasi database (menyesuaikan dengan configurasi database yang antum gunakan, ane menggunakan configurasi seperti dibawah ini)

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=multi_uploads
    DB_USERNAME=root
    DB_PASSWORD=password

5. Buat storage link ke folder public

    php artisan storage:link

6. Configurasi FLYSYSTEM_DISK dari local menjadi public

    FILESYSTEM_DISK=public

7. Generate enkripsi key Laravel

    php artisan key:generate

8. Jalankan server

    php artisan serve
