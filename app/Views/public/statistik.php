<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Public Header -->
<header class="bg-gradient-to-r from-blue-600 to-blue-700 text-white shadow-lg">
    <div class="container mx-auto px-4 py-4 md:py-6">
        <div class="flex items-center justify-between gap-3">
            <div class="flex items-center gap-2 md:gap-3 flex-1 min-w-0">
                <div class="bg-white/10 p-1.5 md:p-2 rounded-lg flex-shrink-0">
                    <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                <div class="min-w-0 flex-1">
                    <h1 class="text-sm md:text-2xl leading-tight truncate font-bold">Sistem Informasi Kependudukan</h1>
                    <p class="text-xs md:text-base text-blue-100 truncate">Kecamatan Madidir</p>
                </div>
            </div>
            <a href="<?= base_url('/login') ?>" class="bg-white text-blue-600 hover:bg-blue-50 border-2 border-white px-2 md:px-4 py-2 rounded-lg text-xs md:text-sm font-medium flex items-center gap-1 flex-shrink-0">
                <svg class="w-3 h-3 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
                <span class="hidden sm:inline">Login Admin</span>
                <span class="sm:hidden">Admin</span>
            </a>
        </div>
    </div>
</header>

<main class="container mx-auto px-4 py-8">
    <!-- Welcome Banner -->
    <div class="bg-white rounded-lg shadow-md p-4 md:p-6 mb-6">
        <div class="flex items-center gap-3 md:gap-4">
            <div class="bg-blue-100 p-3 md:p-4 rounded-full flex-shrink-0">
                <svg class="w-6 h-6 md:w-8 md:h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
            </div>
            <div class="min-w-0 flex-1">
                <h2 class="text-base md:text-2xl leading-tight font-bold">Selamat Datang di Portal Data Kependudukan</h2>
                <p class="text-sm md:text-base text-gray-600 mt-1">
                    Akses informasi statistik dan data penduduk Kecamatan Madidir secara transparan
                </p>
            </div>
        </div>
    </div>

    <?php if(session()->getFlashdata('success')): ?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        <?= session()->getFlashdata('success') ?>
    </div>
    <?php endif; ?>

    <!-- Tabs Navigation -->
    <div class="mb-6 border-b border-gray-200">
        <nav class="flex gap-2 md:gap-4 overflow-x-auto pb-2">
            <a href="<?= base_url('/profil') ?>" class="px-3 md:px-4 py-2 border-b-2 border-transparent hover:border-gray-300 text-gray-600 hover:text-gray-800 whitespace-nowrap text-sm md:text-base flex items-center gap-1 md:gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span class="hidden md:inline">Profil</span>
            </a>
            <a href="<?= base_url('/wilayah') ?>" class="px-3 md:px-4 py-2 border-b-2 border-transparent hover:border-gray-300 text-gray-600 hover:text-gray-800 whitespace-nowrap text-sm md:text-base flex items-center gap-1 md:gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                </svg>
                <span class="hidden md:inline">Wilayah</span>
            </a>
            <a href="<?= base_url('/statistik') ?>" class="px-3 md:px-4 py-2 border-b-2 border-blue-600 text-blue-600 font-medium whitespace-nowrap text-sm md:text-base flex items-center gap-1 md:gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                <span class="hidden md:inline">Statistik</span>
            </a>
            <a href="<?= base_url('/data') ?>" class="px-3 md:px-4 py-2 border-b-2 border-transparent hover:border-gray-300 text-gray-600 hover:text-gray-800 whitespace-nowrap text-sm md:text-base flex items-center gap-1 md:gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                </svg>
                <span class="hidden md:inline">Data</span>
            </a>
            <a href="<?= base_url('/kontak') ?>" class="px-3 md:px-4 py-2 border-b-2 border-transparent hover:border-gray-300 text-gray-600 hover:text-gray-800 whitespace-nowrap text-sm md:text-base flex items-center gap-1 md:gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                <span class="hidden md:inline">Hubungi Kami</span>
            </a>
        </nav>
    </div>

    <!-- Statistik Content -->
    <div class="space-y-6">
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white rounded-lg shadow p-6 card-hover transition-all border-l-4 border-l-blue-500">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-sm font-medium text-gray-600">Total Penduduk</h3>
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <div class="text-2xl font-bold"><?= $statistics['total'] ?></div>
                <p class="text-xs text-gray-600">Jiwa terdaftar</p>
            </div>

            <div class="bg-white rounded-lg shadow p-6 card-hover transition-all border-l-4 border-l-blue-500">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-sm font-medium text-gray-600">Laki-laki</h3>
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <div class="text-2xl font-bold"><?= $statistics['laki_laki'] ?></div>
                <p class="text-xs text-gray-600"><?= $statistics['total'] > 0 ? number_format(($statistics['laki_laki'] / $statistics['total']) * 100, 1) : 0 ?>% dari total</p>
            </div>

            <div class="bg-white rounded-lg shadow p-6 card-hover transition-all border-l-4 border-l-pink-500">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-sm font-medium text-gray-600">Perempuan</h3>
                    <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <div class="text-2xl font-bold"><?= $statistics['perempuan'] ?></div>
                <p class="text-xs text-gray-600"><?= $statistics['total'] > 0 ? number_format(($statistics['perempuan'] / $statistics['total']) * 100, 1) : 0 ?>% dari total</p>
            </div>

            <div class="bg-white rounded-lg shadow p-6 card-hover transition-all border-l-4 border-l-green-500">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-sm font-medium text-gray-600">Status Kawin</h3>
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="text-2xl font-bold"><?= $statistics['kawin'] ?></div>
                <p class="text-xs text-gray-600"><?= $statistics['belum_kawin'] ?> belum kawin</p>
            </div>
        </div>

        <!-- Charts -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold mb-4">Distribusi Jenis Kelamin</h3>
                <canvas id="genderChart"></canvas>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold mb-4">Distribusi per Desa</h3>
                <canvas id="villageChart"></canvas>
            </div>

            <div class="bg-white rounded-lg shadow p-6 lg:col-span-2">
                <h3 class="text-lg font-semibold mb-4">Tingkat Pendidikan</h3>
                <canvas id="educationChart"></canvas>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="bg-gray-800 text-white mt-12 py-6">
    <div class="container mx-auto px-4 text-center">
        <p class="text-sm">© 2025 Kecamatan Madidir. All rights reserved.</p>
        <p class="text-xs text-gray-400 mt-1">
            Sistem Informasi Kependudukan untuk transparansi data publik
        </p>
    </div>
</footer>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
// Gender Chart
const genderCtx = document.getElementById('genderChart').getContext('2d');
new Chart(genderCtx, {
    type: 'pie',
    data: {
        labels: <?= json_encode(array_column($genderDistribution, 'jenis_kelamin')) ?>,
        datasets: [{
            data: <?= json_encode(array_column($genderDistribution, 'jumlah')) ?>,
            backgroundColor: ['#3b82f6', '#ec4899']
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { position: 'bottom' }
        }
    }
});

// Village Chart
const villageCtx = document.getElementById('villageChart').getContext('2d');
new Chart(villageCtx, {
    type: 'bar',
    data: {
        labels: <?= json_encode(array_column($villageDistribution, 'desa')) ?>,
        datasets: [{
            label: 'Jumlah Penduduk',
            data: <?= json_encode(array_column($villageDistribution, 'jumlah')) ?>,
            backgroundColor: '#10b981'
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false }
        },
        scales: {
            y: { beginAtZero: true }
        }
    }
});

// Education Chart
const educationCtx = document.getElementById('educationChart').getContext('2d');
new Chart(educationCtx, {
    type: 'bar',
    data: {
        labels: <?= json_encode(array_column($educationDistribution, 'pendidikan')) ?>,
        datasets: [{
            label: 'Jumlah',
            data: <?= json_encode(array_column($educationDistribution, 'jumlah')) ?>,
            backgroundColor: '#3b82f6'
        }]
    },
    options: {
        responsive: true,
        indexAxis: 'y',
        plugins: {
            legend: { display: false }
        },
        scales: {
            x: { beginAtZero: true }
        }
    }
});
</script>
<?= $this->endSection() ?>
