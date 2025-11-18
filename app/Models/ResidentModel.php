<?php

namespace App\Models;

use CodeIgniter\Model;

class ResidentModel extends Model
{
    protected $table = 'residents';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'rt',
        'rw',
        'desa',
        'agama',
        'status_perkawinan',
        'pekerjaan',
        'pendidikan',
        'kewarganegaraan'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Validation
    protected $validationRules = [
        'nik' => 'required|min_length[16]|max_length[16]|is_unique[residents.nik,id,{id}]',
        'nama' => 'required|max_length[100]',
        'tempat_lahir' => 'required|max_length[50]',
        'tanggal_lahir' => 'required|valid_date',
        'jenis_kelamin' => 'required|in_list[Laki-laki,Perempuan]',
        'alamat' => 'required',
        'rt' => 'required|max_length[3]',
        'rw' => 'required|max_length[3]',
        'desa' => 'required|max_length[50]',
        'agama' => 'required|max_length[20]',
        'status_perkawinan' => 'required|max_length[20]',
        'pekerjaan' => 'required|max_length[50]',
        'pendidikan' => 'required|max_length[50]',
        'kewarganegaraan' => 'required|in_list[WNI,WNA]'
    ];

    protected $validationMessages = [
        'nik' => [
            'required' => 'NIK wajib diisi',
            'min_length' => 'NIK harus 16 digit',
            'max_length' => 'NIK harus 16 digit',
            'is_unique' => 'NIK sudah terdaftar'
        ],
        'nama' => [
            'required' => 'Nama wajib diisi'
        ]
    ];

    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Custom methods
    public function getStatistics()
    {
        return [
            'total' => $this->countAll(),
            'laki_laki' => $this->where('jenis_kelamin', 'Laki-laki')->countAllResults(),
            'perempuan' => $this->where('jenis_kelamin', 'Perempuan')->countAllResults(),
            'kawin' => $this->where('status_perkawinan', 'Kawin')->countAllResults(),
            'belum_kawin' => $this->where('status_perkawinan', 'Belum Kawin')->countAllResults()
        ];
    }

    public function getByDesa($desa = null)
    {
        if ($desa && $desa !== 'all') {
            return $this->where('desa', $desa)->findAll();
        }
        return $this->findAll();
    }

    public function getGenderDistribution()
    {
        return $this->select('jenis_kelamin, COUNT(*) as jumlah')
            ->groupBy('jenis_kelamin')
            ->findAll();
    }

    public function getVillageDistribution()
    {
        return $this->select('desa, COUNT(*) as jumlah')
            ->groupBy('desa')
            ->orderBy('desa', 'ASC')
            ->findAll();
    }

    public function getEducationDistribution()
    {
        return $this->select('pendidikan, COUNT(*) as jumlah')
            ->groupBy('pendidikan')
            ->orderBy('jumlah', 'DESC')
            ->findAll();
    }

    public function searchResidents($search = '', $desa = 'all', $gender = 'all')
    {
        $builder = $this->builder();

        if (!empty($search)) {
            $builder->groupStart()
                ->like('nama', $search)
                ->orLike('nik', $search)
                ->orLike('alamat', $search)
                ->groupEnd();
        }

        if ($desa !== 'all' && !empty($desa)) {
            $builder->where('desa', $desa);
        }

        if ($gender !== 'all' && !empty($gender)) {
            $builder->where('jenis_kelamin', $gender);
        }

        $query = $builder->orderBy('nama', 'ASC')->get();
        
        // Log the SQL query for debugging
        log_message('debug', 'Search SQL: ' . $this->db->getLastQuery());
        
        return $query->getResultArray();
    }
}
