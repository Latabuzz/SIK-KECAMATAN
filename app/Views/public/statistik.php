<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?= $this->include('public/partials/header') ?>

<main class="container mx-auto px-4 py-8">
    <?= $this->include('public/partials/welcome_banner') ?>
    <?= $this->include('public/partials/tabs', ['active' => 'statistik']) ?>

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

<?= $this->include('public/partials/footer') ?>
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
