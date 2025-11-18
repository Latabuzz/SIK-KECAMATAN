<?php

namespace App\Controllers;

use App\Models\ResidentModel;

class TestData extends BaseController
{
    public function index()
    {
        $residentModel = new ResidentModel();
        
        // Get all data
        $allData = $residentModel->findAll();
        
        // Count data
        $count = $residentModel->countAll();
        
        // Get villages
        $villages = $residentModel->select('desa')->distinct()->findAll();
        
        echo "<h1>Test Data Penduduk</h1>";
        echo "<p><strong>Total Data:</strong> " . $count . "</p>";
        echo "<p><strong>Jumlah Desa:</strong> " . count($villages) . "</p>";
        
        echo "<h2>Data Desa:</h2>";
        echo "<pre>";
        print_r($villages);
        echo "</pre>";
        
        echo "<h2>Semua Data Penduduk:</h2>";
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>ID</th><th>NIK</th><th>Nama</th><th>Jenis Kelamin</th><th>Desa</th></tr>";
        
        foreach ($allData as $resident) {
            echo "<tr>";
            echo "<td>" . $resident['id'] . "</td>";
            echo "<td>" . $resident['nik'] . "</td>";
            echo "<td>" . $resident['nama'] . "</td>";
            echo "<td>" . $resident['jenis_kelamin'] . "</td>";
            echo "<td>" . $resident['desa'] . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        
        // Test search
        echo "<h2>Test Search 'Andi':</h2>";
        $searchResult = $residentModel->searchResidents('Andi', 'all', 'all');
        echo "<p><strong>Hasil:</strong> " . count($searchResult) . " data</p>";
        echo "<pre>";
        print_r($searchResult);
        echo "</pre>";
        
        // Show last query
        echo "<h2>Last Query:</h2>";
        echo "<pre>" . $residentModel->db->getLastQuery() . "</pre>";
    }
}
