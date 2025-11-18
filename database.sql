-- Database untuk Kelurahan Madidir
-- Buat database terlebih dahulu

CREATE DATABASE IF NOT EXISTS kelurahan_madidir;
USE kelurahan_madidir;

-- Tabel users untuk autentikasi
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(100),
    role ENUM('admin', 'staff', 'user') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabel residents untuk data penduduk
CREATE TABLE IF NOT EXISTS residents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nik VARCHAR(16) NOT NULL UNIQUE,
    nama VARCHAR(100) NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    jenis_kelamin ENUM('Laki-laki', 'Perempuan') NOT NULL,
    alamat TEXT NOT NULL,
    rt VARCHAR(3) NOT NULL,
    rw VARCHAR(3) NOT NULL,
    desa VARCHAR(50) NOT NULL,
    agama VARCHAR(20) NOT NULL,
    status_perkawinan VARCHAR(20) NOT NULL,
    pekerjaan VARCHAR(50) NOT NULL,
    pendidikan VARCHAR(50) NOT NULL,
    kewarganegaraan VARCHAR(10) NOT NULL DEFAULT 'WNI',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_nik (nik),
    INDEX idx_desa (desa),
    INDEX idx_jenis_kelamin (jenis_kelamin)
);

-- Insert admin default (password: admin123)
INSERT INTO users (username, email, password, full_name, role) 
VALUES ('admin', 'admin@kelurahan.com', '$2y$10$fYghsgQaK7KdU2V2TdBMe.fHAiEPG8M43o8KG1rOByobPlobEww5C', 'Administrator', 'admin');

-- Insert data penduduk contoh
INSERT INTO residents (nik, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, rt, rw, desa, agama, status_perkawinan, pekerjaan, pendidikan, kewarganegaraan) VALUES
('7301012001850001', 'Ahmad Hidayat', 'Madidir', '1985-01-20', 'Laki-laki', 'Jl. Merdeka No. 10', '001', '002', 'Madidir Utara', 'Islam', 'Kawin', 'Wiraswasta', 'S1', 'WNI'),
('7301012501900002', 'Siti Nurhaliza', 'Madidir', '1990-05-25', 'Perempuan', 'Jl. Pembangunan No. 15', '002', '003', 'Madidir Selatan', 'Islam', 'Kawin', 'Guru', 'S1', 'WNI'),
('7301011003950003', 'Budi Santoso', 'Madidir', '1995-03-10', 'Laki-laki', 'Jl. Harmoni No. 7', '003', '001', 'Madidir Barat', 'Kristen', 'Belum Kawin', 'Pegawai Swasta', 'SMA', 'WNI'),
('7301011508880004', 'Dewi Lestari', 'Madidir', '1988-08-15', 'Perempuan', 'Jl. Kenanga No. 20', '004', '002', 'Madidir Timur', 'Islam', 'Kawin', 'Dokter', 'S2', 'WNI'),
('7301012007920005', 'Rizki Ramadhan', 'Madidir', '1992-07-20', 'Laki-laki', 'Jl. Pahlawan No. 5', '001', '001', 'Madidir Utara', 'Islam', 'Belum Kawin', 'PNS', 'S1', 'WNI'),
('7301011202930006', 'Fatimah Zahra', 'Madidir', '1993-02-12', 'Perempuan', 'Jl. Diponegoro No. 8', '002', '001', 'Madidir Utara', 'Islam', 'Kawin', 'Bidan', 'D3', 'WNI'),
('7301011809870007', 'Andi Pratama', 'Madidir', '1987-09-18', 'Laki-laki', 'Jl. Sudirman No. 25', '004', '003', 'Madidir Selatan', 'Islam', 'Kawin', 'Pengusaha', 'S1', 'WNI'),
('7301012803910008', 'Maya Sari', 'Madidir', '1991-03-28', 'Perempuan', 'Jl. Mawar No. 12', '001', '002', 'Madidir Timur', 'Islam', 'Kawin', 'Perawat', 'S1', 'WNI');
