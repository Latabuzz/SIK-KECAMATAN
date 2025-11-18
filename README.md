# 🏛️ Sistem Informasi Kependudukan Kecamatan Madidir

<div align="center">

![CodeIgniter](https://img.shields.io/badge/CodeIgniter-4.x-EE4623?style=for-the-badge&logo=codeigniter&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Chart.js](https://img.shields.io/badge/Chart.js-4.x-FF6384?style=for-the-badge&logo=chart.js&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

**Sistem Manajemen Data Kependudukan Modern untuk Kecamatan Madidir**

[Fitur](#-fitur-utama) • [Demo](#-screenshot) • [Instalasi](#-instalasi) • [Dokumentasi](#-dokumentasi-api) • [Kontribusi](#-kontribusi)

</div>

---

## 📋 Daftar Isi

- [Tentang Proyek](#-tentang-proyek)
- [Fitur Utama](#-fitur-utama)
- [Teknologi](#-teknologi--tools)
- [Arsitektur Sistem](#-arsitektur-sistem)
- [Persyaratan Sistem](#-persyaratan-sistem)
- [Instalasi](#-instalasi)
- [Konfigurasi](#️-konfigurasi)
- [Penggunaan](#-penggunaan)
- [Struktur Database](#-struktur-database)
- [API Endpoints](#-dokumentasi-api)
- [Screenshot](#-screenshot)
- [Testing](#-testing)
- [Deployment](#-deployment)
- [Kontribusi](#-kontribusi)
- [Lisensi](#-lisensi)

---

## 🎯 Tentang Proyek

**Sistem Informasi Kependudukan Kecamatan Madidir** adalah aplikasi web berbasis CodeIgniter 4 yang dirancang untuk mengelola data kependudukan secara digital. Sistem ini menyediakan interface yang user-friendly untuk administrasi data penduduk, statistik demografis, dan visualisasi data yang informatif.

### 🌟 Keunggulan

- ✅ **Modern & Responsif** - Dibangun dengan Tailwind CSS untuk tampilan yang modern dan mobile-friendly
- ✅ **Aman & Terenkripsi** - Implementasi autentikasi dengan password hashing menggunakan bcrypt
- ✅ **Visualisasi Data** - Grafik interaktif menggunakan Chart.js untuk analisis demografis
- ✅ **Pencarian Lanjutan** - Filter multi-kriteria untuk pencarian data penduduk
- ✅ **RESTful Architecture** - Struktur kode yang clean dan terorganisir
- ✅ **Validasi Lengkap** - Server-side dan client-side validation untuk integritas data

---

## 🚀 Fitur Utama

### 👥 Area Publik

<table>
<tr>
<td width="50%">

#### 📊 Dashboard Publik
- Tampilan statistik kependudukan real-time
- Visualisasi distribusi gender
- Grafik distribusi per desa
- Statistik pendidikan & perkawinan

</td>
<td width="50%">

#### 🔍 Pencarian Data
- Pencarian berdasarkan NIK, nama, alamat
- Filter berdasarkan desa
- Filter berdasarkan jenis kelamin
- Hasil pencarian real-time

</td>
</tr>
<tr>
<td>

#### 📍 Informasi Wilayah
- Peta distribusi penduduk per desa
- Statistik demografis per wilayah
- Informasi RT/RW

</td>
<td>

#### 📈 Statistik Detail
- Grafik distribusi gender (Pie Chart)
- Grafik distribusi wilayah (Bar Chart)
- Grafik tingkat pendidikan (Horizontal Bar)
- Data statistik perkawinan

</td>
</tr>
<tr>
<td>

#### 📖 Profil Kecamatan
- Informasi umum kecamatan
- Visi & Misi
- Struktur organisasi

</td>
<td>

#### 📞 Kontak
- Form kontak dengan validasi
- Informasi alamat kantor
- Email & telepon
- Peta lokasi

</td>
</tr>
</table>

### 🔐 Area Admin (Protected)

<table>
<tr>
<td width="50%">

#### 🏠 Dashboard Admin
- Ringkasan statistik penduduk
- Quick stats (Total, L/P, Status Kawin)
- Grafik analitik
- Akses cepat ke fitur-fitur

</td>
<td width="50%">

#### 👤 Manajemen Penduduk
- **CREATE** - Tambah data penduduk baru
- **READ** - Lihat & cari data penduduk
- **UPDATE** - Edit data penduduk
- **DELETE** - Hapus data penduduk

</td>
</tr>
<tr>
<td>

#### 🔎 Pencarian & Filter
- Search real-time dengan debounce
- Multi-filter (Desa, Gender, Keyword)
- Pagination untuk data besar
- Export data (planned)

</td>
<td>

#### ✅ Validasi Data
- NIK 16 digit (unique)
- Validasi email & phone
- Validasi tanggal lahir
- Validasi enum fields
- Error messages yang jelas

</td>
</tr>
</table>

### 🔒 Sistem Autentikasi

- 🔐 Login dengan username & password
- 🛡️ Password hashing menggunakan bcrypt (PASSWORD_DEFAULT)
- 🚪 Session management
- 🔄 Auto logout untuk keamanan
- 🚫 Protected routes dengan AuthFilter
- 👮 Role-based access control (Admin, Staff, User)

---

## 🛠️ Teknologi & Tools

### Backend Framework & Language

<div align="left">

| Teknologi | Versi | Deskripsi |
|-----------|-------|-----------|
| ![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white) | 8.1+ | Server-side scripting language |
| ![CodeIgniter](https://img.shields.io/badge/CodeIgniter-EE4623?logo=codeigniter&logoColor=white) | 4.5.x | PHP Framework dengan MVC pattern |
| ![Composer](https://img.shields.io/badge/Composer-885630?logo=composer&logoColor=white) | 2.x | Dependency management |

</div>

### Database

<div align="left">

| Teknologi | Versi | Deskripsi |
|-----------|-------|-----------|
| ![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white) | 8.0+ | Relational Database Management System |
| ![phpMyAdmin](https://img.shields.io/badge/phpMyAdmin-6C78AF?logo=phpmyadmin&logoColor=white) | - | Database administration tool |

</div>

### Frontend

<div align="left">

| Teknologi | Versi | Deskripsi |
|-----------|-------|-----------|
| ![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white) | 5 | Markup language |
| ![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white) | 3 | Styling |
| ![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?logo=tailwind-css&logoColor=white) | 3.x | Utility-first CSS framework |
| ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black) | ES6+ | Client-side scripting |
| ![Chart.js](https://img.shields.io/badge/Chart.js-FF6384?logo=chart.js&logoColor=white) | 4.x | JavaScript charting library |

</div>

### Development Tools

<div align="left">

| Tool | Versi | Deskripsi |
|------|-------|-----------|
| ![Git](https://img.shields.io/badge/Git-F05032?logo=git&logoColor=white) | 2.x | Version control system |
| ![VS Code](https://img.shields.io/badge/VS_Code-007ACC?logo=visual-studio-code&logoColor=white) | Latest | Code editor |
| ![XAMPP](https://img.shields.io/badge/XAMPP-FB7A24?logo=xampp&logoColor=white) | 8.x | Local development environment |
| ![PHPUnit](https://img.shields.io/badge/PHPUnit-3776AB?logo=php&logoColor=white) | 10.5+ | PHP testing framework |

</div>

### Additional Libraries

- **Faker PHP** (^1.9) - Generate fake data untuk testing
- **VfsStream** (^1.6) - Virtual file system untuk unit testing
- **Laminas Escaper** - XSS protection

---

## 🏗️ Arsitektur Sistem

### Diagram Arsitektur

```
┌─────────────────────────────────────────────────────────────────┐
│                         CLIENT LAYER                             │
│  ┌────────────┐  ┌────────────┐  ┌────────────┐  ┌────────────┐│
│  │   Browser  │  │   Mobile   │  │   Tablet   │  │  Desktop   ││
│  └─────┬──────┘  └─────┬──────┘  └─────┬──────┘  └─────┬──────┘│
└────────┼────────────────┼────────────────┼────────────────┼──────┘
         │                │                │                │
         └────────────────┴────────────────┴────────────────┘
                                 │
                    ┌────────────▼────────────┐
                    │   HTTP/HTTPS Request    │
                    └────────────┬────────────┘
                                 │
┌─────────────────────────────────────────────────────────────────┐
│                      PRESENTATION LAYER                          │
│  ┌──────────────────────────────────────────────────────────┐   │
│  │                    Views (Tailwind CSS)                   │   │
│  │  ┌──────────┐  ┌──────────┐  ┌───────────┐  ┌─────────┐ │   │
│  │  │  Public  │  │  Admin   │  │   Auth    │  │ Layouts │ │   │
│  │  │  Views   │  │  Views   │  │   Views   │  │         │ │   │
│  │  └──────────┘  └──────────┘  └───────────┘  └─────────┘ │   │
│  └──────────────────────────────────────────────────────────┘   │
└──────────────────────────────┬──────────────────────────────────┘
                               │
┌──────────────────────────────▼──────────────────────────────────┐
│                      APPLICATION LAYER                           │
│  ┌────────────────────────────────────────────────────────────┐ │
│  │                       Controllers                           │ │
│  │  ┌──────────────┐  ┌──────────────┐  ┌──────────────┐     │ │
│  │  │    Public    │  │    Admin     │  │     Auth     │     │ │
│  │  │  Controller  │  │  Controller  │  │  Controller  │     │ │
│  │  └──────┬───────┘  └──────┬───────┘  └──────┬───────┘     │ │
│  └─────────┼──────────────────┼──────────────────┼─────────────┘ │
│            │                  │                  │               │
│  ┌─────────▼──────────────────▼──────────────────▼─────────────┐ │
│  │                       Filters                                │ │
│  │  ┌──────────────┐  ┌──────────────┐  ┌──────────────┐      │ │
│  │  │  AuthFilter  │  │     CSRF     │  │   Throttle   │      │ │
│  │  └──────────────┘  └──────────────┘  └──────────────┘      │ │
│  └──────────────────────────────────────────────────────────────┘ │
└──────────────────────────────┬──────────────────────────────────┘
                               │
┌──────────────────────────────▼──────────────────────────────────┐
│                        BUSINESS LAYER                            │
│  ┌────────────────────────────────────────────────────────────┐ │
│  │                          Models                             │ │
│  │  ┌────────────────┐              ┌────────────────┐        │ │
│  │  │ ResidentModel  │              │   UserModel    │        │ │
│  │  │                │              │                │        │ │
│  │  │ - CRUD Ops     │              │ - Auth Logic   │        │ │
│  │  │ - Validation   │              │ - Password Hash│        │ │
│  │  │ - Statistics   │              │ - User Verify  │        │ │
│  │  │ - Search       │              │                │        │ │
│  │  └────────┬───────┘              └────────┬───────┘        │ │
│  └───────────┼──────────────────────────────┼─────────────────┘ │
└──────────────┼──────────────────────────────┼───────────────────┘
               │                              │
┌──────────────▼──────────────────────────────▼───────────────────┐
│                         DATA LAYER                               │
│  ┌────────────────────────────────────────────────────────────┐ │
│  │                     MySQL Database                          │ │
│  │  ┌─────────────┐              ┌─────────────┐              │ │
│  │  │  residents  │              │    users    │              │ │
│  │  │  table      │              │    table    │              │ │
│  │  │             │              │             │              │ │
│  │  │ - id (PK)   │              │ - id (PK)   │              │ │
│  │  │ - nik       │              │ - username  │              │ │
│  │  │ - nama      │              │ - password  │              │ │
│  │  │ - alamat    │              │ - role      │              │ │
│  │  │ - desa      │              │ - email     │              │ │
│  │  │ - ...       │              │ - ...       │              │ │
│  │  └─────────────┘              └─────────────┘              │ │
│  └────────────────────────────────────────────────────────────┘ │
└─────────────────────────────────────────────────────────────────┘
```

### MVC Pattern Flow

```
┌─────────────┐      ┌─────────────┐      ┌─────────────┐
│             │      │             │      │             │
│    VIEW     │◄─────┤ CONTROLLER  │─────►│    MODEL    │
│  (Blade)    │      │  (Logic)    │      │  (Data)     │
│             │      │             │      │             │
└─────────────┘      └──────┬──────┘      └──────┬──────┘
                            │                    │
                            │                    │
                     ┌──────▼────────┐    ┌──────▼──────┐
                     │   Filters     │    │  Database   │
                     │ (AuthFilter)  │    │   (MySQL)   │
                     └───────────────┘    └─────────────┘
```

### Request Lifecycle

```
User Request
    │
    ▼
┌───────────────────┐
│  index.php        │  Entry Point
└────────┬──────────┘
         │
         ▼
┌───────────────────┐
│  Routes.php       │  Route Mapping
└────────┬──────────┘
         │
         ▼
┌───────────────────┐
│  Filters          │  AuthFilter, CSRF
└────────┬──────────┘
         │
         ▼
┌───────────────────┐
│  Controller       │  Handle Request
└────────┬──────────┘
         │
         ▼
┌───────────────────┐
│  Model            │  Database Operations
└────────┬──────────┘
         │
         ▼
┌───────────────────┐
│  View             │  Generate HTML
└────────┬──────────┘
         │
         ▼
Response to User
```

---

## 💻 Persyaratan Sistem

### Minimum Requirements

| Komponen | Versi Minimum | Rekomendasi |
|----------|---------------|-------------|
| **PHP** | 8.1.0 | 8.2+ |
| **MySQL** | 5.7 | 8.0+ |
| **Apache/Nginx** | 2.4 | 2.4.50+ |
| **Composer** | 2.0 | 2.6+ |
| **RAM** | 512 MB | 2 GB+ |
| **Storage** | 100 MB | 500 MB+ |

### PHP Extensions Required

```ini
✓ intl          # Internationalization
✓ mbstring      # Multibyte String
✓ json          # JSON support (enabled by default)
✓ mysqlnd       # MySQL Native Driver
✓ libcurl       # CURL support
✓ xml           # XML support
✓ gd            # Image processing (optional)
✓ zip           # ZIP archive support
```

### Browser Compatibility

| Browser | Version |
|---------|---------|
| Chrome | 90+ |
| Firefox | 88+ |
| Safari | 14+ |
| Edge | 90+ |
| Opera | 76+ |

---

## 📦 Instalasi

### Method 1: Clone dari Repository

```bash
# 1. Clone repository
git clone https://github.com/yourusername/kelurahan-madidir.git
cd kelurahan-madidir

# 2. Install dependencies
composer install

# 3. Setup environment file
cp env .env

# 4. Edit konfigurasi database di .env
# app.baseURL = 'http://localhost:8080'
# database.default.hostname = localhost
# database.default.database = kelurahan_madidir
# database.default.username = root
# database.default.password = 

# 5. Buat database
mysql -u root -p
CREATE DATABASE kelurahan_madidir;
exit;

# 6. Import database
mysql -u root -p kelurahan_madidir < database.sql

# 7. Set permissions
chmod -R 777 writable/

# 8. Run development server
php spark serve
```

### Method 2: Menggunakan XAMPP

```bash
# 1. Download dan install XAMPP
# https://www.apachefriends.org/

# 2. Clone project ke htdocs
cd C:\xampp\htdocs
git clone https://github.com/yourusername/kelurahan-madidir.git

# 3. Install dependencies
cd kelurahan-madidir
composer install

# 4. Setup .env file
copy env .env

# Edit .env:
# app.baseURL = 'http://localhost/kelurahan-madidir/public'

# 5. Buat database via phpMyAdmin
# http://localhost/phpmyadmin
# Create database: kelurahan_madidir

# 6. Import database.sql via phpMyAdmin

# 7. Akses aplikasi
# http://localhost/kelurahan-madidir/public
```

---

## ⚙️ Konfigurasi

### Database Configuration

Edit file `app/Config/Database.php`:

```php
public array $default = [
    'DSN'          => '',
    'hostname'     => 'localhost',
    'username'     => 'root',
    'password'     => '',
    'database'     => 'kelurahan_madidir',
    'DBDriver'     => 'MySQLi',
    'DBPrefix'     => '',
    'pConnect'     => false,
    'DBDebug'      => true,
    'charset'      => 'utf8mb4',
    'DBCollat'     => 'utf8mb4_general_ci',
];
```

### Environment Variables

Edit file `.env`:

```ini
#--------------------------------------------------------------------
# ENVIRONMENT
#--------------------------------------------------------------------
CI_ENVIRONMENT = development

#--------------------------------------------------------------------
# APP
#--------------------------------------------------------------------
app.baseURL = 'http://localhost:8080'

#--------------------------------------------------------------------
# DATABASE
#--------------------------------------------------------------------
database.default.hostname = localhost
database.default.database = kelurahan_madidir
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
```

---

## 📖 Penggunaan

### Login ke Admin Panel

1. **URL**: `http://localhost:8080/login`
2. **Kredensial Default**:
   ```
   Username: admin
   Password: admin123
   ```

### Menambah Data Penduduk

```
1. Login sebagai admin
2. Navigasi ke menu "Data Penduduk"
3. Klik tombol "Tambah Data"
4. Isi form dengan data lengkap:
   - NIK (16 digit, harus unique)
   - Nama Lengkap
   - Tempat/Tanggal Lahir
   - Jenis Kelamin
   - Alamat Lengkap
   - RT/RW
   - Desa
   - Agama
   - Status Perkawinan
   - Pekerjaan
   - Pendidikan
   - Kewarganegaraan
5. Klik "Simpan"
```

### Mencari Data Penduduk

**Via Interface Publik:**
```
1. Buka halaman "Data Penduduk"
2. Gunakan search box untuk mencari berdasarkan NIK/Nama/Alamat
3. Filter berdasarkan Desa
4. Filter berdasarkan Jenis Kelamin
5. Klik nama penduduk untuk melihat detail
```

**Via Admin Panel:**
```
1. Login ke admin panel
2. Menu "Data Penduduk" 
3. Real-time search dengan debounce
4. Multiple filters (Desa, Gender, Search)
5. Aksi: Edit atau Hapus data
```

---

## 🗄️ Struktur Database

### ERD (Entity Relationship Diagram)

```
┌─────────────────────────────┐
│          USERS              │
├─────────────────────────────┤
│ PK  id           INT        │
│     username     VARCHAR(50)│
│     email        VARCHAR(100)│
│     password     VARCHAR(255)│
│     full_name    VARCHAR(100)│
│     role         ENUM        │
│     created_at   TIMESTAMP  │
│     updated_at   TIMESTAMP  │
└─────────────────────────────┘
              │
              │ manages
              │
              ▼
┌─────────────────────────────┐
│        RESIDENTS            │
├─────────────────────────────┤
│ PK  id               INT    │
│ UK  nik              VARCHAR(16)│
│     nama             VARCHAR(100)│
│     tempat_lahir     VARCHAR(50)│
│     tanggal_lahir    DATE   │
│     jenis_kelamin    ENUM   │
│     alamat           TEXT   │
│     rt               VARCHAR(3)│
│     rw               VARCHAR(3)│
│     desa             VARCHAR(50)│
│     agama            VARCHAR(20)│
│     status_perkawinan VARCHAR(20)│
│     pekerjaan        VARCHAR(50)│
│     pendidikan       VARCHAR(50)│
│     kewarganegaraan  VARCHAR(10)│
│     created_at       TIMESTAMP│
│     updated_at       TIMESTAMP│
└─────────────────────────────┘

Indexes:
- idx_nik (nik)
- idx_desa (desa)
- idx_jenis_kelamin (jenis_kelamin)
```

### Table: users

| Field | Type | Null | Key | Default | Description |
|-------|------|------|-----|---------|-------------|
| id | INT | NO | PRI | AUTO_INCREMENT | Primary Key |
| username | VARCHAR(50) | NO | UNI | - | Username untuk login |
| email | VARCHAR(100) | NO | UNI | - | Email user |
| password | VARCHAR(255) | NO | - | - | Hashed password (bcrypt) |
| full_name | VARCHAR(100) | YES | - | - | Nama lengkap user |
| role | ENUM | NO | - | user | Role: admin, staff, user |
| created_at | TIMESTAMP | NO | - | CURRENT_TIMESTAMP | Waktu pembuatan |
| updated_at | TIMESTAMP | NO | - | CURRENT_TIMESTAMP | Waktu update |

### Table: residents

| Field | Type | Null | Key | Default | Description |
|-------|------|------|-----|---------|-------------|
| id | INT | NO | PRI | AUTO_INCREMENT | Primary Key |
| nik | VARCHAR(16) | NO | UNI | - | Nomor Induk Kependudukan |
| nama | VARCHAR(100) | NO | - | - | Nama lengkap penduduk |
| tempat_lahir | VARCHAR(50) | NO | - | - | Tempat lahir |
| tanggal_lahir | DATE | NO | - | - | Tanggal lahir |
| jenis_kelamin | ENUM | NO | MUL | - | Laki-laki / Perempuan |
| alamat | TEXT | NO | - | - | Alamat lengkap |
| rt | VARCHAR(3) | NO | - | - | RT |
| rw | VARCHAR(3) | NO | - | - | RW |
| desa | VARCHAR(50) | NO | MUL | - | Nama desa |
| agama | VARCHAR(20) | NO | - | - | Agama |
| status_perkawinan | VARCHAR(20) | NO | - | - | Status perkawinan |
| pekerjaan | VARCHAR(50) | NO | - | - | Pekerjaan |
| pendidikan | VARCHAR(50) | NO | - | - | Pendidikan terakhir |
| kewarganegaraan | VARCHAR(10) | NO | - | WNI | WNI / WNA |
| created_at | TIMESTAMP | NO | - | CURRENT_TIMESTAMP | Waktu pembuatan |
| updated_at | TIMESTAMP | NO | - | CURRENT_TIMESTAMP | Waktu update |

### Sample Data

```sql
-- Admin User (Password: admin123)
INSERT INTO users (username, email, password, full_name, role) 
VALUES ('admin', 'admin@kelurahan.com', 
        '$2y$10$fYghsgQaK7KdU2V2TdBMe.fHAiEPG8M43o8KG1rOByobPlobEww5C', 
        'Administrator', 'admin');

-- Sample Resident
INSERT INTO residents (nik, nama, tempat_lahir, tanggal_lahir, 
                       jenis_kelamin, alamat, rt, rw, desa, agama, 
                       status_perkawinan, pekerjaan, pendidikan, 
                       kewarganegaraan) 
VALUES ('7301012001850001', 'Ahmad Hidayat', 'Madidir', '1985-01-20',
        'Laki-laki', 'Jl. Merdeka No. 10', '001', '002', 
        'Madidir Utara', 'Islam', 'Kawin', 'Wiraswasta', 'S1', 'WNI');
```

---

## 📡 Dokumentasi API

### Public Endpoints

#### GET `/`
**Dashboard Publik**
- **Response**: HTML Page
- **Data**: Statistik kependudukan, grafik

#### GET `/data`
**Data Penduduk Publik**
- **Query Parameters**:
  - `search` (optional): Keyword pencarian
  - `desa` (optional): Filter desa ('all' | nama_desa)
  - `gender` (optional): Filter gender ('all' | 'Laki-laki' | 'Perempuan')
- **Response**: HTML Page dengan data residents

#### GET `/data/detail/{id}`
**Detail Penduduk**
- **URL Parameter**: 
  - `id`: Resident ID
- **Response**: HTML Page dengan detail penduduk

#### GET `/profil`
**Profil Kecamatan**
- **Response**: HTML Page

#### GET `/wilayah`
**Informasi Wilayah**
- **Response**: HTML Page dengan distribusi per desa

#### GET `/statistik`
**Statistik Kependudukan**
- **Response**: HTML Page dengan grafik lengkap

#### GET `/kontak`
**Halaman Kontak**
- **Response**: HTML Page

#### POST `/kontak/submit`
**Submit Form Kontak**
- **Request Body**:
  ```json
  {
    "name": "string",
    "phone": "string",
    "email": "email",
    "subject": "string",
    "message": "string"
  }
  ```
- **Validation Rules**:
  - name: required, max:100
  - phone: required, max:15
  - email: required, valid_email
  - subject: required
  - message: required

### Auth Endpoints

#### GET `/login`
**Halaman Login**
- **Response**: HTML Login Form

#### POST `/login`
**Process Login**
- **Request Body**:
  ```json
  {
    "username": "string",
    "password": "string (min:6)"
  }
  ```
- **Success Response**: 
  - Redirect to `/admin/dashboard`
  - Set session data
- **Error Response**: 
  - Redirect back with error message

#### GET `/logout`
**Logout User**
- **Response**: 
  - Destroy session
  - Redirect to `/`

### Admin Endpoints (Protected)

> **Note**: Semua endpoint di bawah memerlukan autentikasi (AuthFilter)

#### GET `/admin/dashboard`
**Admin Dashboard**
- **Auth**: Required
- **Response**: HTML Page dengan statistik

#### GET `/admin/residents`
**List Data Penduduk**
- **Auth**: Required
- **Query Parameters**:
  - `search` (optional)
  - `desa` (optional)
  - `gender` (optional)
- **Response**: HTML Page dengan data residents & filter

#### GET `/admin/residents/create`
**Form Tambah Penduduk**
- **Auth**: Required
- **Response**: HTML Form

#### POST `/admin/residents/store`
**Simpan Data Penduduk Baru**
- **Auth**: Required
- **Request Body**:
  ```json
  {
    "nik": "string (16 chars, unique)",
    "nama": "string (max:100)",
    "tempat_lahir": "string (max:50)",
    "tanggal_lahir": "date (YYYY-MM-DD)",
    "jenis_kelamin": "enum (Laki-laki|Perempuan)",
    "alamat": "text",
    "rt": "string (max:3)",
    "rw": "string (max:3)",
    "desa": "string (max:50)",
    "agama": "string (max:20)",
    "status_perkawinan": "string (max:20)",
    "pekerjaan": "string (max:50)",
    "pendidikan": "string (max:50)",
    "kewarganegaraan": "enum (WNI|WNA)"
  }
  ```
- **Success**: Redirect to `/admin/residents` with success message
- **Error**: Redirect back with validation errors

#### GET `/admin/residents/edit/{id}`
**Form Edit Penduduk**
- **Auth**: Required
- **URL Parameter**: `id`
- **Response**: HTML Form dengan data resident

#### POST `/admin/residents/update/{id}`
**Update Data Penduduk**
- **Auth**: Required
- **URL Parameter**: `id`
- **Request Body**: Same as store
- **Success**: Redirect to `/admin/residents`
- **Error**: Redirect back with errors

#### GET `/admin/residents/delete/{id}`
**Hapus Data Penduduk**
- **Auth**: Required
- **URL Parameter**: `id`
- **Success**: Redirect with success message
- **Error**: Redirect with error message

---

## 📸 Screenshot

### 🏠 Public Pages

#### Dashboard Publik
<div align="center">
<img src="https://via.placeholder.com/800x400/667eea/ffffff?text=Dashboard+Publik+-+Statistik+%26+Grafik" alt="Dashboard Publik" width="100%">
<p><i>Dashboard dengan statistik real-time dan visualisasi data</i></p>
</div>

#### Data Penduduk
<div align="center">
<img src="https://via.placeholder.com/800x400/764ba2/ffffff?text=Data+Penduduk+-+Search+%26+Filter" alt="Data Penduduk" width="100%">
<p><i>Halaman data penduduk dengan fitur pencarian dan filter</i></p>
</div>

### 🔐 Admin Pages

#### Admin Dashboard
<div align="center">
<img src="https://via.placeholder.com/800x400/ec4899/ffffff?text=Admin+Dashboard+-+Quick+Stats" alt="Admin Dashboard" width="100%">
<p><i>Dashboard admin dengan statistik dan akses cepat</i></p>
</div>

---

## 🧪 Testing

### Unit Testing

Framework ini sudah include PHPUnit untuk testing.

```bash
# Run all tests
composer test

# atau
./vendor/bin/phpunit

# Run specific test
./vendor/bin/phpunit tests/unit/HealthTest.php

# Run with coverage
./vendor/bin/phpunit --coverage-html coverage/
```

### Manual Testing Checklist

- [ ] Login dengan kredensial valid
- [ ] Login dengan kredensial invalid
- [ ] Tambah data penduduk baru
- [ ] Edit data penduduk
- [ ] Hapus data penduduk
- [ ] Search data penduduk
- [ ] Filter berdasarkan desa
- [ ] Filter berdasarkan gender
- [ ] View detail penduduk
- [ ] Logout
- [ ] Akses halaman admin tanpa login (harus redirect)
- [ ] Cek grafik statistik
- [ ] Submit form kontak
- [ ] Responsive design di mobile

---

## 📁 Struktur Direktori

```
kelurahan-madidir/
│
├── app/
│   ├── Config/                 # Konfigurasi aplikasi
│   │   ├── App.php            # Config utama
│   │   ├── Database.php       # Config database
│   │   ├── Routes.php         # Definisi routes
│   │   ├── Filters.php        # Filter config
│   │   └── ...
│   │
│   ├── Controllers/            # Controllers (MVC)
│   │   ├── Admin.php          # Admin controller
│   │   ├── Auth.php           # Authentication
│   │   ├── PublicController.php
│   │   └── BaseController.php
│   │
│   ├── Models/                 # Models (MVC)
│   │   ├── ResidentModel.php  # Resident data model
│   │   └── UserModel.php      # User auth model
│   │
│   ├── Views/                  # Views (MVC)
│   │   ├── admin/             # Admin views
│   │   ├── public/            # Public views
│   │   ├── auth/              # Auth views
│   │   └── layouts/           # Layout templates
│   │
│   ├── Filters/                # Custom filters
│   │   └── AuthFilter.php     # Authentication filter
│   │
│   └── Database/
│       ├── Migrations/        # Database migrations
│       └── Seeds/             # Database seeders
│
├── public/                     # Public assets
│   ├── index.php              # Entry point
│   ├── css/
│   ├── js/
│   └── robots.txt
│
├── writable/                   # Writable directory
│   ├── cache/                 # Cache files
│   ├── logs/                  # Log files
│   ├── session/               # Session files
│   └── uploads/               # Upload directory
│
├── tests/                      # Unit tests
├── vendor/                     # Composer dependencies
│
├── .env                        # Environment config
├── composer.json               # Composer dependencies
├── database.sql               # Database schema
└── README.md                  # This file
```

---

## 🐛 Troubleshooting

### Common Issues

#### 1. Error 500 - Internal Server Error

```bash
# Check PHP error logs
tail -f writable/logs/log-*.log

# Enable debug mode in .env:
CI_ENVIRONMENT = development
```

#### 2. Database Connection Error

```bash
# Check database credentials di .env
# Verify MySQL is running
# Test connection via phpMyAdmin
```

#### 3. 404 Not Found

```bash
# Check .htaccess exists di public/
# Check Routes.php configuration
```

#### 4. Permission Denied

```bash
# Set proper permissions
chmod -R 755 writable/
```

#### 5. Session Not Working

```bash
# Check session directory permissions
chmod -R 755 writable/session/

# Clear session files
rm -rf writable/session/*
```

---

## 🗺️ Roadmap

### Version 1.1.0 (Planned)

- [ ] Export data ke Excel/PDF
- [ ] Import data dari Excel
- [ ] Multi-language support (ID/EN)
- [ ] Email notifications
- [ ] Advanced reporting
- [ ] Data backup & restore

### Version 2.0.0 (Future)

- [ ] REST API untuk mobile app
- [ ] Real-time notifications
- [ ] Document management system
- [ ] Mobile app (Android/iOS)
- [ ] Advanced analytics dashboard

---

## ❓ FAQ

<details>
<summary><strong>Bagaimana cara reset password admin?</strong></summary>

Gunakan file `update_admin_password.sql` yang tersedia atau jalankan query manual di phpMyAdmin.
</details>

<details>
<summary><strong>Apakah bisa digunakan untuk kelurahan/kecamatan lain?</strong></summary>

Ya! Sistem ini generic dan bisa disesuaikan untuk kelurahan/kecamatan manapun.
</details>

<details>
<summary><strong>Bagaimana cara backup database?</strong></summary>

```bash
# Via command line
mysqldump -u root -p kelurahan_madidir > backup.sql

# Via phpMyAdmin - Export tab > SQL format
```
</details>

<details>
<summary><strong>Apakah support multi-user?</strong></summary>

Ya, sistem support multiple users dengan role-based access control (admin, staff, user).
</details>

---

## 🔒 Keamanan

### Security Features Implemented

| Feature | Status | Description |
|---------|--------|-------------|
| Password Hashing | ✅ | bcrypt dengan PASSWORD_DEFAULT |
| SQL Injection Protection | ✅ | Query Builder & Prepared Statements |
| XSS Protection | ✅ | Auto-escaping di views |
| CSRF Protection | ✅ | CSRF tokens di forms |
| Session Security | ✅ | Secure session management |
| Input Validation | ✅ | Server-side validation |
| Authentication Filter | ✅ | Route protection |
| HTTPS Ready | ✅ | SSL/TLS support |

### Best Practices

```php
// ✅ GOOD - Using Query Builder
$this->db->where('username', $username)->get('users');

// ❌ BAD - Raw SQL vulnerable to injection
$this->db->query("SELECT * FROM users WHERE username = '$username'");

// ✅ GOOD - Password hashing
password_hash($password, PASSWORD_DEFAULT);

// ❌ BAD - Plain text password
$password; // Never store plain text!

// ✅ GOOD - Escape output
<?= esc($data) ?>

// ❌ BAD - Raw output
<?= $data ?>
```

### Security Checklist

- [x] Input validation pada semua forms
- [x] Password hashing dengan bcrypt
- [x] Protected routes dengan AuthFilter
- [x] CSRF protection enabled
- [x] XSS protection dengan auto-escaping
- [x] SQL injection prevention dengan Query Builder
- [x] Session security
- [x] Error logging tanpa expose sensitive data
- [ ] Rate limiting (coming soon)
- [ ] 2FA Authentication (coming soon)

---

## 🚀 Deployment

### Production Checklist

```bash
# 1. Set environment to production
CI_ENVIRONMENT = production

# 2. Disable debug mode
app.debug = false

# 3. Set secure base URL
app.baseURL = 'https://yourdomain.com'

# 4. Optimize autoloader
composer install --optimize-autoloader --no-dev

# 5. Clear cache
php spark cache:clear

# 6. Set proper permissions
chmod -R 755 writable/

# 7. Secure .env file
chmod 600 .env
```

### Apache Configuration

**Virtual Host Configuration:**

```apache
<VirtualHost *:80>
    ServerName yourdomain.com
    DocumentRoot /var/www/kelurahan-madidir/public
    
    <Directory /var/www/kelurahan-madidir/public>
        Options -Indexes +FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
    
    ErrorLog ${APACHE_LOG_DIR}/kelurahan-error.log
    CustomLog ${APACHE_LOG_DIR}/kelurahan-access.log combined
</VirtualHost>
```

### Database Optimization

```sql
-- Add indexes for better performance
CREATE INDEX idx_nik ON residents(nik);
CREATE INDEX idx_desa ON residents(desa);
CREATE INDEX idx_jenis_kelamin ON residents(jenis_kelamin);

-- Optimize tables
OPTIMIZE TABLE residents;
OPTIMIZE TABLE users;
```

---

## 🤝 Kontribusi

Kontribusi selalu welcome! Ikuti langkah berikut:

### How to Contribute

1. **Fork** repository ini
2. **Clone** fork Anda
   ```bash
   git clone https://github.com/yourusername/kelurahan-madidir.git
   ```
3. **Buat branch** baru
   ```bash
   git checkout -b feature/AmazingFeature
   ```
4. **Commit** perubahan Anda
   ```bash
   git commit -m 'Add some AmazingFeature'
   ```
5. **Push** ke branch
   ```bash
   git push origin feature/AmazingFeature
   ```
6. Buat **Pull Request**

### Coding Standards

- Follow **PSR-12** coding standard
- Write **meaningful** commit messages
- Add **comments** untuk code yang kompleks
- Write **unit tests** untuk fitur baru
- Update **documentation** jika diperlukan

---

## 📝 Changelog

### Version 1.0.0 (2024-01-15)

#### Added
- ✨ Sistem autentikasi dengan bcrypt
- ✨ CRUD data penduduk lengkap
- ✨ Dashboard publik dengan statistik
- ✨ Dashboard admin dengan quick stats
- ✨ Pencarian & filter multi-kriteria
- ✨ Visualisasi data dengan Chart.js
- ✨ Responsive design dengan Tailwind CSS
- ✨ Session management
- ✨ Input validation
- ✨ Error handling

#### Security
- 🔒 Password hashing
- 🔒 SQL injection protection
- 🔒 XSS protection
- 🔒 CSRF protection
- 🔒 Authentication filter

---

## 📄 Lisensi

This project is licensed under the **MIT License**.

```
MIT License

Copyright (c) 2024 Kelurahan Madidir

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```

---

## 👥 Tim & Kontak

### Developer

<table>
  <tr>
    <td align="center">
      <img src="https://via.placeholder.com/100" width="100px;" alt="Developer"/><br />
      <sub><b>Your Name</b></sub><br />
      <a href="mailto:developer@example.com">📧 Email</a> •
      <a href="https://github.com/yourusername">🐙 GitHub</a>
    </td>
  </tr>
</table>

### Organisasi

**Kecamatan Madidir**
- 📍 Alamat: Jl. Raya Madidir No. 1, Kabupaten Boven Digoel
- ☎️ Telepon: (0971) 12345
- 📧 Email: info@madidir.go.id
- 🌐 Website: https://madidir.go.id

---

## 🙏 Acknowledgments

- [CodeIgniter 4](https://codeigniter.com/) - The PHP Framework
- [Tailwind CSS](https://tailwindcss.com/) - CSS Framework
- [Chart.js](https://www.chartjs.org/) - JavaScript Charting
- [XAMPP](https://www.apachefriends.org/) - Development Environment

---

<div align="center">

### ⭐ Star this repo if you find it useful!

**Made with ❤️ for Kecamatan Madidir**

---

![Visitors](https://visitor-badge.laobi.icu/badge?page_id=kelurahan-madidir)

</div>
