<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ResidentSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nik' => '7301012001850001',
                'nama' => 'Ahmad Hidayat',
                'tempat_lahir' => 'Madidir',
                'tanggal_lahir' => '1985-01-20',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Merdeka No. 10',
                'rt' => '001',
                'rw' => '002',
                'desa' => 'Madidir Utara',
                'agama' => 'Islam',
                'status_perkawinan' => 'Kawin',
                'pekerjaan' => 'Wiraswasta',
                'pendidikan' => 'S1',
                'kewarganegaraan' => 'WNI'
            ],
            [
                'nik' => '7301012501900002',
                'nama' => 'Siti Nurhaliza',
                'tempat_lahir' => 'Madidir',
                'tanggal_lahir' => '1990-05-25',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Pembangunan No. 15',
                'rt' => '002',
                'rw' => '003',
                'desa' => 'Madidir Selatan',
                'agama' => 'Islam',
                'status_perkawinan' => 'Kawin',
                'pekerjaan' => 'Guru',
                'pendidikan' => 'S1',
                'kewarganegaraan' => 'WNI'
            ],
            [
                'nik' => '7301011003950003',
                'nama' => 'Budi Santoso',
                'tempat_lahir' => 'Madidir',
                'tanggal_lahir' => '1995-03-10',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Harmoni No. 7',
                'rt' => '003',
                'rw' => '001',
                'desa' => 'Madidir Barat',
                'agama' => 'Kristen',
                'status_perkawinan' => 'Belum Kawin',
                'pekerjaan' => 'Pegawai Swasta',
                'pendidikan' => 'SMA',
                'kewarganegaraan' => 'WNI'
            ],
            [
                'nik' => '7301011508880004',
                'nama' => 'Dewi Lestari',
                'tempat_lahir' => 'Madidir',
                'tanggal_lahir' => '1988-08-15',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Kenanga No. 20',
                'rt' => '004',
                'rw' => '002',
                'desa' => 'Madidir Timur',
                'agama' => 'Islam',
                'status_perkawinan' => 'Kawin',
                'pekerjaan' => 'Dokter',
                'pendidikan' => 'S2',
                'kewarganegaraan' => 'WNI'
            ],
            [
                'nik' => '7301012007920005',
                'nama' => 'Rizki Ramadhan',
                'tempat_lahir' => 'Madidir',
                'tanggal_lahir' => '1992-07-20',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Pahlawan No. 5',
                'rt' => '001',
                'rw' => '001',
                'desa' => 'Madidir Utara',
                'agama' => 'Islam',
                'status_perkawinan' => 'Belum Kawin',
                'pekerjaan' => 'PNS',
                'pendidikan' => 'S1',
                'kewarganegaraan' => 'WNI'
            ],
            [
                'nik' => '7301011202930006',
                'nama' => 'Fatimah Zahra',
                'tempat_lahir' => 'Madidir',
                'tanggal_lahir' => '1993-02-12',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Diponegoro No. 8',
                'rt' => '002',
                'rw' => '001',
                'desa' => 'Madidir Utara',
                'agama' => 'Islam',
                'status_perkawinan' => 'Kawin',
                'pekerjaan' => 'Bidan',
                'pendidikan' => 'D3',
                'kewarganegaraan' => 'WNI'
            ],
            [
                'nik' => '7301011809870007',
                'nama' => 'Andi Pratama',
                'tempat_lahir' => 'Madidir',
                'tanggal_lahir' => '1987-09-18',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Sudirman No. 25',
                'rt' => '004',
                'rw' => '003',
                'desa' => 'Madidir Selatan',
                'agama' => 'Islam',
                'status_perkawinan' => 'Kawin',
                'pekerjaan' => 'Pengusaha',
                'pendidikan' => 'S1',
                'kewarganegaraan' => 'WNI'
            ],
            [
                'nik' => '7301012803910008',
                'nama' => 'Maya Sari',
                'tempat_lahir' => 'Madidir',
                'tanggal_lahir' => '1991-03-28',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Mawar No. 12',
                'rt' => '001',
                'rw' => '002',
                'desa' => 'Madidir Timur',
                'agama' => 'Islam',
                'status_perkawinan' => 'Kawin',
                'pekerjaan' => 'Perawat',
                'pendidikan' => 'S1',
                'kewarganegaraan' => 'WNI'
            ],
            [
                'nik' => '7301010105940009',
                'nama' => 'Rahman Hakim',
                'tempat_lahir' => 'Madidir',
                'tanggal_lahir' => '1994-05-01',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Kartini No. 18',
                'rt' => '003',
                'rw' => '002',
                'desa' => 'Madidir Barat',
                'agama' => 'Islam',
                'status_perkawinan' => 'Belum Kawin',
                'pekerjaan' => 'Mahasiswa',
                'pendidikan' => 'S1',
                'kewarganegaraan' => 'WNI'
            ],
            [
                'nik' => '7301012209890010',
                'nama' => 'Nurul Hidayah',
                'tempat_lahir' => 'Madidir',
                'tanggal_lahir' => '1989-09-22',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Melati No. 9',
                'rt' => '002',
                'rw' => '002',
                'desa' => 'Madidir Selatan',
                'agama' => 'Islam',
                'status_perkawinan' => 'Kawin',
                'pekerjaan' => 'Ibu Rumah Tangga',
                'pendidikan' => 'SMA',
                'kewarganegaraan' => 'WNI'
            ]
        ];

        // Simple insert
        foreach ($data as $resident) {
            // Check if NIK already exists
            $builder = $this->db->table('residents');
            $exists = $builder->where('nik', $resident['nik'])->countAllResults();
            
            if ($exists == 0) {
                $builder->insert($resident);
                echo "Inserted: {$resident['nama']}\n";
            } else {
                echo "Already exists: {$resident['nama']}\n";
            }
        }

        echo "\nSeeder completed! Total residents: " . $this->db->table('residents')->countAll() . "\n";
    }
}
