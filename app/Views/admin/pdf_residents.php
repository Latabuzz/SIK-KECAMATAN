<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
            line-height: 1.4;
            color: #333;
        }
        
        .header {
            text-align: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 3px solid #2563eb;
        }
        
        .header h1 {
            font-size: 18px;
            color: #1e40af;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .header h2 {
            font-size: 14px;
            color: #374151;
            margin-bottom: 3px;
        }
        
        .header p {
            font-size: 10px;
            color: #6b7280;
        }
        
        .meta-info {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #f3f4f6;
            border-radius: 5px;
        }
        
        .meta-info table {
            width: 100%;
        }
        
        .meta-info td {
            padding: 3px 5px;
            font-size: 10px;
        }
        
        .meta-info td:first-child {
            width: 150px;
            font-weight: bold;
            color: #374151;
        }
        
        .filter-info {
            margin-bottom: 15px;
            padding: 8px;
            background-color: #dbeafe;
            border-left: 4px solid #2563eb;
            border-radius: 3px;
        }
        
        .filter-info p {
            font-size: 10px;
            color: #1e40af;
            margin: 2px 0;
        }
        
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        .data-table thead {
            background-color: #2563eb;
            color: white;
        }
        
        .data-table th {
            padding: 8px 5px;
            font-size: 10px;
            font-weight: bold;
            text-align: left;
            border: 1px solid #1e40af;
        }
        
        .data-table td {
            padding: 6px 5px;
            border: 1px solid #d1d5db;
            font-size: 10px;
        }
        
        .data-table tbody tr:nth-child(even) {
            background-color: #f9fafb;
        }
        
        .data-table tbody tr:hover {
            background-color: #eff6ff;
        }
        
        .no-data {
            text-align: center;
            padding: 30px;
            color: #9ca3af;
            font-style: italic;
        }
        
        .footer {
            margin-top: 30px;
            padding-top: 15px;
            border-top: 2px solid #e5e7eb;
            font-size: 9px;
            color: #6b7280;
        }
        
        .footer .signature {
            margin-top: 50px;
            text-align: right;
        }
        
        .footer .signature p {
            margin: 3px 0;
        }
        
        .footer .signature .name {
            font-weight: bold;
            margin-top: 60px;
            text-decoration: underline;
        }
        
        .page-number {
            text-align: center;
            margin-top: 10px;
            font-size: 9px;
            color: #9ca3af;
        }
        
        @page {
            margin: 15mm;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1>Data Penduduk</h1>
        <h2>Kecamatan Madidir</h2>
        <p>Kabupaten Mamuju, Sulawesi Barat</p>
    </div>
    
    <!-- Meta Information -->
    <div class="meta-info">
        <table>
            <tr>
                <td>Tanggal Cetak</td>
                <td>: <?= esc($generatedDate) ?></td>
            </tr>
            <tr>
                <td>Total Data</td>
                <td>: <?= esc($totalData) ?> Penduduk</td>
            </tr>
        </table>
    </div>
    
    <!-- Filter Information -->
    <?php 
    $hasFilters = ($search !== '' || $selectedDesa !== 'all' || $selectedGender !== 'all');
    if ($hasFilters): 
    ?>
    <div class="filter-info">
        <p><strong>Filter yang Diterapkan:</strong></p>
        <?php if ($search !== ''): ?>
            <p>• Pencarian: "<?= esc($search) ?>"</p>
        <?php endif; ?>
        <?php if ($selectedDesa !== 'all'): ?>
            <p>• Desa: <?= esc($selectedDesa) ?></p>
        <?php endif; ?>
        <?php if ($selectedGender !== 'all'): ?>
            <p>• Jenis Kelamin: <?= esc($selectedGender) ?></p>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    
    <!-- Data Table -->
    <table class="data-table">
        <thead>
            <tr>
                <th style="width: 5%;">No</th>
                <th style="width: 13%;">NIK</th>
                <th style="width: 18%;">Nama</th>
                <th style="width: 8%;">L/P</th>
                <th style="width: 10%;">Tempat Lahir</th>
                <th style="width: 10%;">Tanggal Lahir</th>
                <th style="width: 12%;">Desa</th>
                <th style="width: 12%;">Pekerjaan</th>
                <th style="width: 12%;">Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <?php if(empty($residents)): ?>
                <tr>
                    <td colspan="9" class="no-data">
                        Tidak ada data penduduk yang ditemukan
                        <?php if ($hasFilters): ?>
                            dengan filter yang diterapkan
                        <?php endif; ?>
                    </td>
                </tr>
            <?php else: ?>
                <?php $no = 1; ?>
                <?php foreach($residents as $resident): ?>
                    <tr>
                        <td style="text-align: center;"><?= $no++ ?></td>
                        <td><?= esc($resident['nik']) ?></td>
                        <td><?= esc($resident['nama']) ?></td>
                        <td style="text-align: center;"><?= $resident['jenis_kelamin'] == 'Laki-laki' ? 'L' : 'P' ?></td>
                        <td><?= esc($resident['tempat_lahir']) ?></td>
                        <td><?= date('d/m/Y', strtotime($resident['tanggal_lahir'])) ?></td>
                        <td><?= esc($resident['desa']) ?></td>
                        <td><?= esc($resident['pekerjaan']) ?></td>
                        <td><?= esc($resident['pendidikan']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    
    <!-- Footer -->
    <div class="footer">
        <p>Dokumen ini dicetak secara otomatis dari Sistem Informasi Kependudukan Kecamatan Madidir</p>
        <p>Dicetak pada: <?= esc($generatedDate) ?></p>
        
        <div class="signature">
            <p>Madidir, <?= date('d F Y') ?></p>
            <p>Kepala Kecamatan Madidir</p>
            <p class="name">( _________________________ )</p>
        </div>
    </div>
</body>
</html>
