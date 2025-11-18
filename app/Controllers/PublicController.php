<?php

namespace App\Controllers;

use App\Models\ResidentModel;

class PublicController extends BaseController
{
    protected $residentModel;
    protected $session;

    public function __construct()
    {
        $this->residentModel = new ResidentModel();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data = [
            'title' => 'Sistem Informasi Kependudukan Kecamatan Madidir',
            'statistics' => $this->residentModel->getStatistics(),
            'genderDistribution' => $this->residentModel->getGenderDistribution(),
            'villageDistribution' => $this->residentModel->getVillageDistribution(),
            'educationDistribution' => $this->residentModel->getEducationDistribution()
        ];

        return view('public/dashboard', $data);
    }

    public function data()
    {
        $search = $this->request->getGet('search') ?? '';
        $desa = $this->request->getGet('desa') ?? 'all';
        $gender = $this->request->getGet('gender') ?? 'all';

        $residents = $this->residentModel->searchResidents($search, $desa, $gender);
        
        // Get unique villages
        $villageData = $this->residentModel->select('desa')->distinct()->orderBy('desa', 'ASC')->findAll();
        $villages = array_column($villageData, 'desa');

        $data = [
            'title' => 'Data Penduduk - Kecamatan Madidir',
            'residents' => $residents,
            'villages' => $villages,
            'search' => $search,
            'selectedDesa' => $desa,
            'selectedGender' => $gender
        ];

        return view('public/data', $data);
    }

    public function detail($id)
    {
        $resident = $this->residentModel->find($id);

        if (!$resident) {
            return redirect()->to('/data')
                ->with('error', 'Data penduduk tidak ditemukan');
        }

        $data = [
            'title' => 'Detail Penduduk - ' . $resident['nama'],
            'resident' => $resident
        ];

        return view('public/detail', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil Kecamatan Madidir',
            'statistics' => $this->residentModel->getStatistics()
        ];

        return view('public/profil', $data);
    }

    public function wilayah()
    {
        $data = [
            'title' => 'Wilayah Kecamatan Madidir',
            'villageDistribution' => $this->residentModel->getVillageDistribution()
        ];

        return view('public/wilayah', $data);
    }

    public function statistik()
    {
        $data = [
            'title' => 'Statistik Kependudukan - Kecamatan Madidir',
            'statistics' => $this->residentModel->getStatistics(),
            'genderDistribution' => $this->residentModel->getGenderDistribution(),
            'villageDistribution' => $this->residentModel->getVillageDistribution(),
            'educationDistribution' => $this->residentModel->getEducationDistribution()
        ];

        return view('public/statistik', $data);
    }

    public function kontak()
    {
        $data = [
            'title' => 'Hubungi Kami - Kecamatan Madidir'
        ];

        return view('public/kontak', $data);
    }

    public function submitKontak()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'name' => 'required|max_length[100]',
            'phone' => 'required|max_length[15]',
            'email' => 'required|valid_email',
            'subject' => 'required',
            'message' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $validation->getErrors());
        }

        // Dalam produksi, ini akan mengirim email atau menyimpan ke database
        return redirect()->to('/kontak')
            ->with('success', 'Pesan Anda telah terkirim! Terima kasih telah menghubungi kami.');
    }
}
