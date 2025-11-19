<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?= $this->include('public/partials/header') ?>

<main class="container mx-auto px-4 py-8">
    <?= $this->include('public/partials/welcome_banner') ?>
    <?= $this->include('public/partials/tabs', ['active' => 'wilayah']) ?>

    <!-- Informasi Wilayah -->
    <div class="mb-4 md:mb-6">
        <h2 class="text-lg md:text-2xl font-bold mb-2">Desa/Kelurahan di Kecamatan Madidir</h2>
        <p class="text-sm md:text-base text-gray-600">Kecamatan Madidir terdiri dari 4 desa/kelurahan dengan karakteristik wilayah yang beragam</p>
    </div>

    <!-- Desa Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
        <!-- Desa Madidir Utara -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
            <div class="bg-gradient-to-br from-sky-500 to-sky-600 text-white p-4 md:p-6">
                <div class="flex items-center justify-between mb-3 md:mb-4">
                    <svg class="w-10 h-10 md:w-12 md:h-12 opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span class="bg-white/30 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-medium">Utara</span>
                </div>
                <h3 class="text-lg md:text-xl font-bold">Madidir Utara</h3>
            </div>
            <div class="p-4 md:p-6">
                <div class="space-y-2 md:space-y-3">
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-gray-600">Jumlah Penduduk</span>
                        <span class="font-bold text-sky-600"><?= number_format($villageStats['Madidir Utara'] ?? 0) ?></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-gray-600">Jumlah RT</span>
                        <span class="text-sm md:text-base font-bold text-gray-800">8 RT</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-gray-600">Jumlah RW</span>
                        <span class="text-sm md:text-base font-bold text-gray-800">3 RW</span>
                    </div>
                    <div class="pt-2 md:pt-3 border-t border-gray-200">
                        <p class="text-xs md:text-sm text-gray-500">Luas Wilayah</p>
                        <p class="text-sm md:text-base font-semibold text-gray-800">12.5 km<sup>2</sup></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Desa Madidir Selatan -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
            <div class="bg-gradient-to-br from-emerald-500 to-emerald-600 text-white p-4 md:p-6">
                <div class="flex items-center justify-between mb-3 md:mb-4">
                    <svg class="w-10 h-10 md:w-12 md:h-12 opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span class="bg-white/30 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-medium">Selatan</span>
                </div>
                <h3 class="text-lg md:text-xl font-bold">Madidir Selatan</h3>
            </div>
            <div class="p-4 md:p-6">
                <div class="space-y-2 md:space-y-3">
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-gray-600">Jumlah Penduduk</span>
                        <span class="text-sm md:text-base font-bold text-emerald-600"><?= number_format($villageStats['Madidir Selatan'] ?? 0) ?></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-gray-600">Jumlah RT</span>
                        <span class="text-sm md:text-base font-bold text-gray-800">6 RT</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-gray-600">Jumlah RW</span>
                        <span class="text-sm md:text-base font-bold text-gray-800">2 RW</span>
                    </div>
                    <div class="pt-2 md:pt-3 border-t border-gray-200">
                        <p class="text-xs md:text-sm text-gray-500">Luas Wilayah</p>
                        <p class="text-sm md:text-base font-semibold text-gray-800">10.8 km<sup>2</sup></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Desa Madidir Barat -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
            <div class="bg-gradient-to-br from-violet-500 to-violet-600 text-white p-4 md:p-6">
                <div class="flex items-center justify-between mb-3 md:mb-4">
                    <svg class="w-10 h-10 md:w-12 md:h-12 opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span class="bg-white/30 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-medium">Barat</span>
                </div>
                <h3 class="text-lg md:text-xl font-bold">Madidir Barat</h3>
            </div>
            <div class="p-4 md:p-6">
                <div class="space-y-2 md:space-y-3">
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-gray-600">Jumlah Penduduk</span>
                        <span class="text-sm md:text-base font-bold text-violet-600"><?= number_format($villageStats['Madidir Barat'] ?? 0) ?></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-gray-600">Jumlah RT</span>
                        <span class="text-sm md:text-base font-bold text-gray-800">5 RT</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-gray-600">Jumlah RW</span>
                        <span class="text-sm md:text-base font-bold text-gray-800">2 RW</span>
                    </div>
                    <div class="pt-2 md:pt-3 border-t border-gray-200">
                        <p class="text-xs md:text-sm text-gray-500">Luas Wilayah</p>
                        <p class="text-sm md:text-base font-semibold text-gray-800">11.2 km<sup>2</sup></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Desa Madidir Timur -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
            <div class="bg-gradient-to-br from-orange-500 to-orange-600 text-white p-4 md:p-6">
                <div class="flex items-center justify-between mb-3 md:mb-4">
                    <svg class="w-10 h-10 md:w-12 md:h-12 opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span class="bg-white/30 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-medium">Timur</span>
                </div>
                <h3 class="text-lg md:text-xl font-bold">Madidir Timur</h3>
            </div>
            <div class="p-4 md:p-6">
                <div class="space-y-2 md:space-y-3">
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-gray-600">Jumlah Penduduk</span>
                        <span class="text-sm md:text-base font-bold text-orange-600"><?= number_format($villageStats['Madidir Timur'] ?? 0) ?></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-gray-600">Jumlah RT</span>
                        <span class="text-sm md:text-base font-bold text-gray-800">7 RT</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm md:text-base text-gray-600">Jumlah RW</span>
                        <span class="text-sm md:text-base font-bold text-gray-800">3 RW</span>
                    </div>
                    <div class="pt-2 md:pt-3 border-t border-gray-200">
                        <p class="text-xs md:text-sm text-gray-500">Luas Wilayah</p>
                        <p class="text-sm md:text-base font-semibold text-gray-800">10.7 km<sup>2</sup></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Peta Informasi (Optional) -->
    <div class="mt-6 md:mt-8 bg-white rounded-lg shadow-md p-4 md:p-6">
        <h3 class="text-lg md:text-xl font-bold mb-4">Informasi Tambahan</h3>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="bg-blue-50 p-3 md:p-4 rounded-lg">
                <div class="flex items-center gap-2 md:gap-3">
                    <div class="bg-blue-100 p-2 md:p-3 rounded-full flex-shrink-0">
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs md:text-sm text-gray-600">Total RT</p>
                        <p class="text-xl md:text-2xl font-bold text-blue-600">26 RT</p>
                    </div>
                </div>
            </div>
            <div class="bg-green-50 p-3 md:p-4 rounded-lg">
                <div class="flex items-center gap-2 md:gap-3">
                    <div class="bg-green-100 p-2 md:p-3 rounded-full flex-shrink-0">
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs md:text-sm text-gray-600">Total RW</p>
                        <p class="text-xl md:text-2xl font-bold text-green-600">10 RW</p>
                    </div>
                </div>
            </div>
            <div class="bg-purple-50 p-3 md:p-4 rounded-lg">
                <div class="flex items-center gap-2 md:gap-3">
                    <div class="bg-purple-100 p-2 md:p-3 rounded-full flex-shrink-0">
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs md:text-sm text-gray-600">Luas Total</p>
                        <p class="text-xl md:text-2xl font-bold text-purple-600">45.2 km²</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $this->include('public/partials/footer') ?>
<?= $this->endSection() ?>
