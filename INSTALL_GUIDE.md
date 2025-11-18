# 🏘️ Sistem Informasi Kependudukan Kecamatan Madidir

Sistem informasi berbasis web untuk mengelola data kependudukan Kecamatan Madidir dengan fitur statistik, visualisasi data, dan manajemen penduduk.

## ✨ Fitur Utama

### 📊 Panel Publik
- **Dashboard Publik** - Statistik kependudukan realtime
- **Profil Kecamatan** - Informasi umum, visi-misi, struktur organisasi
- **Informasi Wilayah** - 4 desa dengan detail populasi per wilayah
- **Statistik Visual** - Grafik interaktif (Chart.js) untuk:
  - Distribusi jenis kelamin
  - Populasi per desa
  - Tingkat pendidikan
- **Data Penduduk** - Tabel publik dengan filter pencarian
- **Kontak** - Form kontak dan informasi kantor

### 🔐 Panel Admin
- **Login Authentication** - Sistem keamanan berbasis session
- **Dashboard Admin** - Overview statistik lengkap dengan 3 charts
- **CRUD Penduduk** - Tambah, Edit, Hapus data penduduk
- **Filter & Search** - Pencarian berdasarkan NIK, nama, desa, jenis kelamin
- **Data Export** - Print dan export data ke CSV

## 🛠️ Teknologi Stack

- **Backend:** CodeIgniter 4 (PHP Framework)
- **Database:** MySQL
- **Frontend:** Tailwind CSS (CDN)
- **Charts:** Chart.js
- **Server:** PHP Built-in Development Server

## 📋 Persyaratan

- PHP 8.1 atau lebih tinggi
- MySQL 5.7+ atau MariaDB 10.3+
- Composer (untuk dependency management)
- Web Browser modern

## 🚀 Instalasi & Setup

### 1. Clone/Download Project
```bash
cd d:\wenzzz\kelurahan-madidir
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Konfigurasi Environment
File `.env` sudah dikonfigurasi dengan setting default:
```env
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = kelurahan_madidir
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
database.default.port = 3306
```

**Sesuaikan kredensial database jika berbeda!**

### 4. Setup Database

#### Opsi A: Menggunakan Setup Script (Mudah & Cepat) ✅ **RECOMMENDED**
1. Jalankan development server:
   ```bash
   php spark serve
   ```

2. Buka browser dan akses:
   ```
   http://localhost:8080/setup_database.php
   ```

3. Script akan otomatis:
   - Membuat database `kelurahan_madidir`
   - Membuat tabel `users` dan `residents`
   - Insert data sample (8 penduduk + 1 admin)

4. **⚠️ PENTING:** Hapus file `setup_database.php` setelah selesai!

#### Opsi B: Import Manual via MySQL Command
```bash
mysql -u root -p < database.sql
```
Atau import via phpMyAdmin/MySQL Workbench.

### 5. Jalankan Development Server
```bash
php spark serve
```

Server akan berjalan di: **http://localhost:8080**

## 🔑 Default Login Admin

**Username:** `admin`  
**Password:** `admin123`

⚠️ **Segera ganti password default setelah login pertama!**

## 📁 Struktur Project

```
kelurahan-madidir/
├── app/
│   ├── Controllers/
│   │   ├── Auth.php           # Login/Logout
│   │   ├── Admin.php          # CRUD Admin
│   │   └── PublicController.php  # Public Pages
│   ├── Models/
│   │   ├── UserModel.php      # User authentication
│   │   └── ResidentModel.php  # Data penduduk + statistik
│   ├── Views/
│   │   ├── layouts/
│   │   │   └── main.php       # Base template
│   │   ├── auth/
│   │   │   └── login.php      # Login page
│   │   ├── admin/
│   │   │   ├── dashboard.php  # Admin dashboard
│   │   │   ├── residents.php  # Data table
│   │   │   └── resident_form.php  # Add/Edit form
│   │   └── public/
│   │       ├── dashboard.php  # Public homepage
│   │       ├── profil.php     # Profil kecamatan
│   │       ├── wilayah.php    # Info wilayah
│   │       ├── statistik.php  # Charts & stats
│   │       ├── data.php       # Public data table
│   │       ├── kontak.php     # Contact form
│   │       └── partials/      # Reusable components
│   ├── Config/
│   │   ├── Routes.php         # URL routing
│   │   └── Filters.php        # Auth middleware
│   └── Filters/
│       └── AuthFilter.php     # Route protection
├── public/
│   ├── css/
│   │   ├── style.css          # Main stylesheet
│   │   └── custom.css         # Custom styles
│   ├── js/
│   │   └── app.js             # JavaScript utilities
│   └── index.php              # Entry point
├── database.sql               # Database schema + seed data
├── setup_database.php         # Auto setup script
└── .env                       # Environment configuration
```

## 🌐 URL Routes

### Public Routes
- `/` - Homepage (redirect ke /statistik)
- `/profil` - Profil Kecamatan
- `/wilayah` - Informasi Wilayah
- `/statistik` - Statistik Visual
- `/data` - Data Penduduk Publik
- `/kontak` - Hubungi Kami
- `/login` - Login Admin

### Protected Admin Routes (require login)
- `/admin` - Admin Dashboard
- `/admin/residents` - Data Penduduk (CRUD)
- `/admin/residents/create` - Tambah Penduduk
- `/admin/residents/edit/{id}` - Edit Penduduk
- `/admin/residents/delete/{id}` - Hapus Penduduk
- `/logout` - Logout

## 💾 Database Schema

### Tabel `users`
```sql
- id (INT, PK, AUTO_INCREMENT)
- username (VARCHAR(50), UNIQUE)
- email (VARCHAR(100), UNIQUE)
- password (VARCHAR(255), hashed)
- full_name (VARCHAR(100))
- role (ENUM: admin, staff, user)
- created_at, updated_at (TIMESTAMP)
```

### Tabel `residents`
```sql
- id (INT, PK, AUTO_INCREMENT)
- nik (VARCHAR(16), UNIQUE)
- nama (VARCHAR(100))
- tempat_lahir (VARCHAR(50))
- tanggal_lahir (DATE)
- jenis_kelamin (ENUM: Laki-laki, Perempuan)
- alamat (TEXT)
- rt, rw (VARCHAR(3))
- desa (VARCHAR(50))
- agama (VARCHAR(20))
- status_perkawinan (ENUM: Belum Kawin, Kawin, Cerai Hidup, Cerai Mati)
- pekerjaan (VARCHAR(50))
- pendidikan (VARCHAR(30))
- kewarganegaraan (VARCHAR(3))
- created_at, updated_at (TIMESTAMP)
```

## 📊 Data Sample

Database sudah terisi dengan:
- **1 Admin User** (username: admin)
- **8 Sample Residents** dari 4 desa:
  - Madidir Utara (2 orang)
  - Madidir Selatan (2 orang)
  - Madidir Barat (2 orang)
  - Madidir Timur (2 orang)

## 🎨 Fitur UI/UX

- ✅ **Responsive Design** - Mobile, Tablet, Desktop
- ✅ **Modern Interface** - Tailwind CSS dengan custom components
- ✅ **Interactive Charts** - Chart.js untuk visualisasi data
- ✅ **Real-time Search** - Filter & pencarian instant
- ✅ **Modal Windows** - Detail view tanpa page reload
- ✅ **Form Validation** - Client & server side validation
- ✅ **Alert Messages** - Success/error notifications
- ✅ **Print Support** - Print friendly pages
- ✅ **Export Data** - CSV export functionality

## 🔒 Keamanan

- ✅ Password hashing (PHP password_hash)
- ✅ CSRF Protection (CodeIgniter 4 built-in)
- ✅ Session-based authentication
- ✅ Route protection via AuthFilter
- ✅ SQL Injection prevention (Query Builder)
- ✅ XSS protection (esc() helper)

## 🐛 Troubleshooting

### Error: "Table doesn't exist"
**Solusi:** Jalankan setup_database.php atau import database.sql manual

### Error: "Unable to connect to database"
**Solusi:** 
1. Pastikan MySQL server running
2. Cek kredensial di file `.env`
3. Pastikan database `kelurahan_madidir` sudah dibuat

### Error: "404 Page Not Found"
**Solusi:**
1. Pastikan server running: `php spark serve`
2. Akses via http://localhost:8080 (bukan localhost/kelurahan-madidir)

### Styling tidak muncul
**Solusi:**
1. Cek koneksi internet (Tailwind CDN)
2. Clear browser cache
3. Cek file public/css/style.css dan custom.css ada

### Charts tidak muncul
**Solusi:**
1. Cek koneksi internet (Chart.js CDN)
2. Buka console browser untuk error JavaScript
3. Pastikan data dari database ada

## 📝 TODO / Future Improvements

- [ ] Implementasi export PDF
- [ ] Integrasi Google Maps untuk lokasi kantor
- [ ] Upload foto penduduk
- [ ] Advanced filtering (range tanggal, multiple select)
- [ ] User management (multi-admin)
- [ ] Activity logs
- [ ] Email notifications
- [ ] API REST untuk integrasi eksternal
- [ ] Dark mode toggle
- [ ] Multi-language support

## 👨‍💻 Development

### Menambah Fitur Baru
1. Controller: `app/Controllers/`
2. Model: `app/Models/`
3. View: `app/Views/`
4. Route: `app/Config/Routes.php`

### Code Standards
- Follow PSR-12 coding standards
- Use CodeIgniter 4 conventions
- Comment complex logic
- Validate all user inputs

## 📄 License

Copyright © 2025 Kecamatan Madidir. All rights reserved.

## 🙏 Credits

- **Framework:** CodeIgniter 4
- **CSS Framework:** Tailwind CSS
- **Charts Library:** Chart.js
- **Icons:** Heroicons (via Tailwind)

---

**Developed with ❤️ for Kecamatan Madidir**

Untuk pertanyaan atau support, hubungi: kecamatan.madidir@natuna.go.id
