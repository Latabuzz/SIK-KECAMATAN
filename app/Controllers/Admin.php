<?php

namespace App\Controllers;

use App\Models\ResidentModel;
use Dompdf\Dompdf;

class Admin extends BaseController
{
    protected $residentModel;
    protected $session;

    public function __construct()
    {
        $this->residentModel = new ResidentModel();
        $this->session = \Config\Services::session();
        
        // Check if user is logged in
        if (!$this->session->get('logged_in')) {
            redirect()->to('/login')->send();
            exit;
        }
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard Admin - Kecamatan Madidir',
            'user' => [
                'name' => $this->session->get('full_name'),
                'username' => $this->session->get('username'),
                'role' => $this->session->get('role')
            ],
            'statistics' => $this->residentModel->getStatistics(),
            'genderDistribution' => $this->residentModel->getGenderDistribution(),
            'villageDistribution' => $this->residentModel->getVillageDistribution(),
            'educationDistribution' => $this->residentModel->getEducationDistribution()
        ];

        return view('admin/dashboard', $data);
    }

    public function residents()
    {
        $search = $this->request->getGet('search') ?? '';
        $desa = $this->request->getGet('desa') ?? 'all';
        $gender = $this->request->getGet('gender') ?? 'all';

        // Debug: log the filter values
        log_message('debug', 'Filter - Search: ' . $search . ', Desa: ' . $desa . ', Gender: ' . $gender);

        $residents = $this->residentModel->searchResidents($search, $desa, $gender);
        
        // Debug: log the result count
        log_message('debug', 'Found residents: ' . count($residents));
        
        // Get unique villages
        $villageData = $this->residentModel->select('desa')->distinct()->orderBy('desa', 'ASC')->findAll();
        $villages = array_column($villageData, 'desa');

        $data = [
            'title' => 'Data Penduduk - Admin',
            'user' => [
                'name' => $this->session->get('full_name'),
                'username' => $this->session->get('username'),
                'role' => $this->session->get('role')
            ],
            'residents' => $residents,
            'villages' => $villages,
            'search' => $search,
            'selectedDesa' => $desa,
            'selectedGender' => $gender,
            'totalData' => $this->residentModel->countAll()
        ];

        return view('admin/residents', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Penduduk - Admin',
            'user' => [
                'name' => $this->session->get('full_name'),
                'username' => $this->session->get('username'),
                'role' => $this->session->get('role')
            ]
        ];

        return view('admin/resident_form', $data);
    }

    public function store()
    {
        $validation = \Config\Services::validation();
        
        if (!$this->validate($this->residentModel->getValidationRules())) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $validation->getErrors());
        }

        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat' => $this->request->getPost('alamat'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'desa' => $this->request->getPost('desa'),
            'agama' => $this->request->getPost('agama'),
            'status_perkawinan' => $this->request->getPost('status_perkawinan'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'kewarganegaraan' => $this->request->getPost('kewarganegaraan')
        ];

        if ($this->residentModel->save($data)) {
            return redirect()->to('/admin/residents')
                ->with('success', 'Data penduduk berhasil ditambahkan');
        }

        return redirect()->back()
            ->withInput()
            ->with('error', 'Gagal menambahkan data penduduk');
    }

    public function edit($id)
    {
        $resident = $this->residentModel->find($id);

        if (!$resident) {
            return redirect()->to('/admin/residents')
                ->with('error', 'Data penduduk tidak ditemukan');
        }

        $data = [
            'title' => 'Edit Data Penduduk - Admin',
            'user' => [
                'name' => $this->session->get('full_name'),
                'username' => $this->session->get('username'),
                'role' => $this->session->get('role')
            ],
            'resident' => $resident
        ];

        return view('admin/resident_form', $data);
    }

    public function update($id)
    {
        $resident = $this->residentModel->find($id);

        if (!$resident) {
            return redirect()->to('/admin/residents')
                ->with('error', 'Data penduduk tidak ditemukan');
        }

        $validation = \Config\Services::validation();
        
        if (!$this->validate($this->residentModel->getValidationRules())) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $validation->getErrors());
        }

        $data = [
            'id' => $id,
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'alamat' => $this->request->getPost('alamat'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'desa' => $this->request->getPost('desa'),
            'agama' => $this->request->getPost('agama'),
            'status_perkawinan' => $this->request->getPost('status_perkawinan'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'kewarganegaraan' => $this->request->getPost('kewarganegaraan')
        ];

        if ($this->residentModel->save($data)) {
            return redirect()->to('/admin/residents')
                ->with('success', 'Data penduduk berhasil diperbarui');
        }

        return redirect()->back()
            ->withInput()
            ->with('error', 'Gagal memperbarui data penduduk');
    }

    public function delete($id)
    {
        $resident = $this->residentModel->find($id);

        if (!$resident) {
            return redirect()->to('/admin/residents')
                ->with('error', 'Data penduduk tidak ditemukan');
        }

        if ($this->residentModel->delete($id)) {
            return redirect()->to('/admin/residents')
                ->with('success', 'Data penduduk berhasil dihapus');
        }

        return redirect()->to('/admin/residents')
            ->with('error', 'Gagal menghapus data penduduk');
    }

    public function exportPdf()
    {
        try {
            // Get filters from request
            $search = $this->request->getGet('search') ?? '';
            $desa = $this->request->getGet('desa') ?? 'all';
            $gender = $this->request->getGet('gender') ?? 'all';

            // Get filtered residents
            $residents = $this->residentModel->searchResidents($search, $desa, $gender);

            // Prepare data for PDF
            $data = [
                'title' => 'Data Penduduk Kecamatan Madidir',
                'residents' => $residents,
                'search' => $search,
                'selectedDesa' => $desa,
                'selectedGender' => $gender,
                'generatedDate' => date('d F Y H:i:s'),
                'totalData' => count($residents)
            ];

            // Load DomPDF
            $dompdf = new Dompdf();
            
            // Load HTML content
            $html = view('admin/pdf_residents', $data);
            
            // Configure DomPDF
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'landscape');
            
            // Render PDF
            $dompdf->render();
            
            // Generate filename
            $filename = 'Data_Penduduk_' . date('Y-m-d_His') . '.pdf';
            
            // Output PDF for download
            $dompdf->stream($filename, ['Attachment' => true]);
            exit();
        } catch (\Exception $e) {
            log_message('error', 'PDF Export Error: ' . $e->getMessage());
            return redirect()->to('/admin/residents')
                ->with('error', 'Gagal mengekspor PDF: ' . $e->getMessage());
        }
    }
}
