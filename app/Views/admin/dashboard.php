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
            <a href="<?= base_url('/admin/dashboard') ?>" class="px-4 py-2 border-b-2 border-blue-600 text-blue-600 font-medium whitespace-nowrap">
                <svg class="inline w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Dashboard
            </a>
            <a href="<?= base_url('/admin/residents') ?>" class="px-4 py-2 border-b-2 border-transparent hover:border-gray-300 text-gray-600 hover:text-gray-800 whitespace-nowrap">
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

    <!-- Dashboard Content -->
    <div class="space-y-6">
        <div>
            <h2 class="text-2xl font-bold">Dashboard Statistik</h2>
            <p class="text-gray-600">Ringkasan data penduduk Kecamatan Madidir</p>
        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white rounded-lg shadow p-6 card-hover transition-all">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-sm font-medium text-gray-600">Total Penduduk</h3>
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <div class="text-2xl font-bold"><?= $statistics['total'] ?></div>
                <p class="text-xs text-gray-600">Jiwa terdaftar</p>
            </div>

            <div class="bg-white rounded-lg shadow p-6 card-hover transition-all">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-sm font-medium text-gray-600">Laki-laki</h3>
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <div class="text-2xl font-bold"><?= $statistics['laki_laki'] ?></div>
                <p class="text-xs text-gray-600"><?= $statistics['total'] > 0 ? number_format(($statistics['laki_laki'] / $statistics['total']) * 100, 1) : 0 ?>% dari total</p>
            </div>

            <div class="bg-white rounded-lg shadow p-6 card-hover transition-all">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-sm font-medium text-gray-600">Perempuan</h3>
                    <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <div class="text-2xl font-bold"><?= $statistics['perempuan'] ?></div>
                <p class="text-xs text-gray-600"><?= $statistics['total'] > 0 ? number_format(($statistics['perempuan'] / $statistics['total']) * 100, 1) : 0 ?>% dari total</p>
            </div>

            <div class="bg-white rounded-lg shadow p-6 card-hover transition-all">
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