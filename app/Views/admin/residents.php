<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Admin Header -->
<header class="bg-blue-600 text-white shadow-md">
    <div class="container mx-auto px-4 py-4 md:py-6">
        <div class="flex items-center justify-between gap-2 md:gap-4">
            <div class="flex items-center gap-2 md:gap-3 flex-1 min-w-0">
                <svg class="w-6 h-6 md:w-8 md:h-8 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                <div class="min-w-0 flex-1">
                    <h1 class="text-sm md:text-2xl leading-tight truncate font-bold">Sistem Informasi Kependudukan</h1>
                    <p class="text-xs md:text-base text-blue-100 truncate">Kecamatan Madidir - Panel Admin</p>
                </div>
            </div>
            <div class="flex items-center gap-2 md:gap-4 flex-shrink-0">
                <div class="hidden md:flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div class="text-right">
                        <p class="text-sm font-medium"><?= esc($user['name']) ?></p>
                        <p class="text-xs text-blue-100">Admin</p>
                    </div>
                </div>
                <a href="<?= base_url('/logout') ?>" class="bg-white text-blue-600 hover:bg-blue-50 px-2 md:px-4 py-2 rounded-lg text-xs md:text-sm font-medium flex items-center gap-1">
                    <svg class="w-3 h-3 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    <span>Keluar</span>
                </a>
            </div>
        </div>
    </div>
</header>

<main class="container mx-auto px-4 py-8">
    <!-- Tabs Navigation -->
    <div class="mb-6 border-b border-gray-200">
        <nav class="flex gap-4 overflow-x-auto">
            <a href="<?= base_url('/admin/dashboard') ?>" class="px-4 py-2 border-b-2 border-transparent hover:border-gray-300 text-gray-600 hover:text-gray-800 whitespace-nowrap">
                <svg class="inline w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Dashboard
            </a>
            <a href="<?= base_url('/admin/residents') ?>" class="px-4 py-2 border-b-2 border-blue-600 text-blue-600 font-medium whitespace-nowrap">
                <svg class="inline w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                Data Penduduk
            </a>
            <a href="<?= base_url('/admin/residents/create') ?>" class="px-4 py-2 border-b-2 border-transparent hover:border-gray-300 text-gray-600 hover:text-gray-800 whitespace-nowrap">
                <svg class="inline w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Tambah Data
            </a>
        </nav>
    </div>

    <?php if(session()->getFlashdata('success')): ?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        <?= session()->getFlashdata('success') ?>
    </div>
    <?php endif; ?>

    <?php if(session()->getFlashdata('error')): ?>
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <?= session()->getFlashdata('error') ?>
    </div>
    <?php endif; ?>

    <!-- Residents Table -->
    <div class="bg-white rounded-lg shadow">
        <div class="p-4 md:p-6">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3 mb-6">
                <h2 class="text-lg sm:text-xl md:text-2xl font-bold text-gray-800">Data Penduduk Kecamatan Madidir</h2>
                <a href="<?= base_url('/admin/residents/export-pdf') ?>?search=<?= urlencode($search ?? '') ?>&desa=<?= urlencode($selectedDesa ?? 'all') ?>&gender=<?= urlencode($selectedGender ?? 'all') ?>" 
                   target="_blank"
                   id="btnExportPdf"
                   class="inline-flex items-center gap-2 bg-red-600 text-white px-4 py-2.5 rounded-lg hover:bg-red-700 active:bg-red-800 transition-all duration-200 text-sm font-semibold shadow-lg hover:shadow-xl whitespace-nowrap">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <span>Cetak PDF</span>
                </a>
            </div>
            
            <!-- Filters -->
            <form method="GET" action="<?= base_url('/admin/residents') ?>" id="filterForm" class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                <div class="relative">
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input 
                        type="text" 
                        name="search" 
                        id="searchInput"
                        value="<?= esc($search) ?>"
                        class="pl-10 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Cari nama, NIK, atau alamat..."
                    >
                </div>

                <select name="desa" id="desaFilter" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="all">Semua Desa</option>
                    <?php if(!empty($villages)): ?>
                        <?php foreach($villages as $village): ?>
                            <option value="<?= esc($village) ?>" <?= $selectedDesa == $village ? 'selected' : '' ?>>
                                <?= esc($village) ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>

                <select name="gender" id="genderFilter" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="all">Semua Jenis Kelamin</option>
                    <option value="Laki-laki" <?= $selectedGender == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                    <option value="Perempuan" <?= $selectedGender == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                </select>

                <div class="flex gap-2">
                    <button type="submit" class="flex-1 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        <svg class="inline w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        Cari
                    </button>
                    <a href="<?= base_url('/admin/residents') ?>" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors flex items-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                    </a>
                </div>
            </form>

            <!-- Active Filters Display -->
            <?php 
            $hasFilters = ($search !== '' || $selectedDesa !== 'all' || $selectedGender !== 'all');
            if ($hasFilters): 
            ?>
            <div class="mb-4 flex flex-wrap items-center gap-2">
                <span class="text-sm font-medium text-gray-700">Filter aktif:</span>
                <?php if ($search !== ''): ?>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        Pencarian: "<?= esc($search) ?>"
                    </span>
                <?php endif; ?>
                <?php if ($selectedDesa !== 'all'): ?>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Desa: <?= esc($selectedDesa) ?>
                    </span>
                <?php endif; ?>
                <?php if ($selectedGender !== 'all'): ?>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <?= esc($selectedGender) ?>
                    </span>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <div class="text-sm text-gray-600 mb-4">
                Menampilkan <span class="font-semibold"><?= count($residents) ?></span> data
                <?php if ($hasFilters): ?>
                    dari hasil filter
                <?php endif; ?>
                <?php if (isset($totalData)): ?>
                    (Total: <?= $totalData ?> penduduk)
                <?php endif; ?>
            </div>

            <!-- Debug Info (Remove in production) -->
            <?php if (ENVIRONMENT !== 'production'): ?>
            <div class="mb-4 p-3 bg-yellow-50 border border-yellow-200 rounded text-xs font-mono">
                <strong>🔍 Debug Info:</strong><br>
                Search: "<strong><?= esc($search) ?></strong>" (<?= empty($search) ? 'EMPTY' : 'HAS VALUE' ?>) |
                Desa: "<strong><?= esc($selectedDesa) ?></strong>" | 
                Gender: "<strong><?= esc($selectedGender) ?></strong>"<br>
                Results: <strong><?= count($residents) ?></strong> | 
                Villages Available: <strong><?= !empty($villages) ? count($villages) : 0 ?></strong>
                <?php if (!empty($villages)): ?>
                    [<?= implode(', ', array_map('esc', $villages)) ?>]
                <?php endif; ?>
                <br>
                Total in DB: <strong><?= isset($totalData) ? $totalData : 'N/A' ?></strong>
                <br>
                GET Params: <?= !empty($_GET) ? json_encode($_GET) : 'NONE' ?>
            </div>
            <?php endif; ?>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIK</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Kelamin</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alamat</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Desa</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pekerjaan</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php if(empty($residents)): ?>
                            <tr>
                                <td colspan="7" class="px-6 py-12 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                    </svg>
                                    <h3 class="mt-2 text-sm font-medium text-gray-900">Tidak ada data ditemukan</h3>
                                    <p class="mt-1 text-sm text-gray-500">
                                        <?php if ($search !== '' || $selectedDesa !== 'all' || $selectedGender !== 'all'): ?>
                                            Coba ubah kriteria filter atau 
                                            <a href="<?= base_url('/admin/residents') ?>" class="text-blue-600 hover:text-blue-800">reset filter</a>
                                        <?php else: ?>
                                            Belum ada data penduduk yang terdaftar.
                                        <?php endif; ?>
                                    </p>
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php foreach($residents as $resident): ?>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm"><?= esc($resident['nik']) ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium"><?= esc($resident['nama']) ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm"><?= esc($resident['jenis_kelamin']) ?></td>
                                    <td class="px-6 py-4 text-sm"><?= esc($resident['alamat']) ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm"><?= esc($resident['desa']) ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm"><?= esc($resident['pekerjaan']) ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end gap-2">
                                            <a href="<?= base_url('/admin/residents/edit/' . $resident['id']) ?>" class="text-blue-600 hover:text-blue-900" title="Edit">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                            </a>
                                            <a href="<?= base_url('/admin/residents/delete/' . $resident['id']) ?>" 
                                               class="text-red-600 hover:text-red-900" 
                                               title="Hapus"
                                               onclick="return confirm('Apakah Anda yakin ingin menghapus data <?= esc($resident['nama']) ?>?')">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const desaFilter = document.getElementById('desaFilter');
    const genderFilter = document.getElementById('genderFilter');
    const filterForm = document.getElementById('filterForm');
    const searchInput = document.getElementById('searchInput');
    
    // Loading state
    let isSubmitting = false;
    
    function showLoading() {
        if (isSubmitting) return;
        isSubmitting = true;
        
        // Optional: Add loading overlay
        const submitBtn = filterForm.querySelector('button[type="submit"]');
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<svg class="animate-spin inline w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Mencari...';
        }
    }
    
    // Auto-submit when filter changes
    if (desaFilter) {
        desaFilter.addEventListener('change', function() {
            showLoading();
            filterForm.submit();
        });
    }
    
    if (genderFilter) {
        genderFilter.addEventListener('change', function() {
            showLoading();
            filterForm.submit();
        });
    }
    
    // Search with Enter key
    if (searchInput) {
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                showLoading();
                filterForm.submit();
            }
        });
    }
    
    // Form submit handler
    filterForm.addEventListener('submit', function() {
        showLoading();
    });
    
    // Show filter info in console
    const currentFilters = [];
    const searchValue = '<?= esc($search) ?>';
    const desaValue = '<?= esc($selectedDesa) ?>';
    const genderValue = '<?= esc($selectedGender) ?>';
    
    if (searchValue) currentFilters.push(`Pencarian: "${searchValue}"`);
    if (desaValue !== 'all') currentFilters.push(`Desa: ${desaValue}`);
    if (genderValue !== 'all') currentFilters.push(`Jenis Kelamin: ${genderValue}`);
    
    if (currentFilters.length > 0) {
        console.log('✓ Filter aktif:', currentFilters.join(', '));
        console.log('✓ Hasil ditemukan: <?= count($residents) ?> data');
    } else {
        console.log('✓ Menampilkan semua data: <?= count($residents) ?> penduduk');
    }
    
    // Highlight search results
    if (searchValue) {
        const tableRows = document.querySelectorAll('tbody tr');
        tableRows.forEach(row => {
            const cells = row.querySelectorAll('td');
            cells.forEach(cell => {
                const text = cell.textContent;
                if (text.toLowerCase().includes(searchValue.toLowerCase())) {
                    const regex = new RegExp(`(${searchValue})`, 'gi');
                    cell.innerHTML = cell.innerHTML.replace(regex, '<mark class="bg-yellow-200">$1</mark>');
                }
            });
        });
    }
    
    // PDF Export button handler
    const btnExportPdf = document.getElementById('btnExportPdf');
    if (btnExportPdf) {
        btnExportPdf.addEventListener('click', function(e) {
            // Show loading state
            const originalContent = this.innerHTML;
            this.innerHTML = `
                <svg class="animate-spin w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                <span>Membuat PDF...</span>
            `;
            this.classList.add('opacity-75', 'cursor-wait');
            
            // Restore button after 2 seconds
            setTimeout(() => {
                this.innerHTML = originalContent;
                this.classList.remove('opacity-75', 'cursor-wait');
            }, 2000);
        });
    }
});
</script>
<?= $this->endSection() ?>
