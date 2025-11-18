# Kelurahan Madidir - CodeIgniter 4 Project

Project aplikasi untuk Kelurahan Madidir menggunakan CodeIgniter 4 dan MySQL.

## Persyaratan Sistem

- PHP 8.1 atau lebih tinggi
- MySQL 5.7 atau lebih tinggi
- Composer
- Extension PHP: intl, mbstring, json, mysqlnd

## Instalasi

1. **Install Dependencies**
   ```bash
   composer install
   ```

2. **Setup Database**
   - Buat database MySQL dengan nama `kelurahan_madidir`
   - Import file `database.sql` ke database:
     ```bash
     mysql -u root -p kelurahan_madidir < database.sql
     ```
   
3. **Konfigurasi Environment**
   - File `.env` sudah dikonfigurasi dengan pengaturan:
     - Environment: development
     - Database: kelurahan_madidir
     - Username: root
     - Password: (kosong - sesuaikan dengan MySQL Anda)
     - Port: 3306

4. **Jalankan Server**
   ```bash
   php spark serve
   ```
   
   Aplikasi akan berjalan di: http://localhost:8080

## Struktur Folder

```
kelurahan-madidir/
├── app/
│   ├── Config/          # File konfigurasi
│   ├── Controllers/     # Controller aplikasi
│   ├── Models/          # Model database
│   ├── Views/           # Template view
│   └── ...
├── public/              # File public (CSS, JS, images)
├── writable/            # Cache, logs, uploads
├── tests/               # Unit tests
└── .env                 # Environment configuration
```

## User Default

- Username: `admin`
- Email: `admin@kelurahan.com`
- Password: `admin123`
- Role: `admin`

## Dokumentasi

- [CodeIgniter 4 User Guide](https://codeigniter.com/user_guide/)
- [Database Reference](https://codeigniter.com/user_guide/database/index.html)

## Catatan

- Pastikan MySQL server sudah berjalan sebelum menjalankan aplikasi
- Sesuaikan konfigurasi database di file `.env` sesuai dengan setup MySQL Anda
- Untuk production, ubah `CI_ENVIRONMENT` menjadi `production` dan gunakan password yang kuat
