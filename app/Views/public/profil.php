<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?= $this->include('public/partials/header') ?>

<main class="container mx-auto px-4 py-8">
    <?= $this->include('public/partials/welcome_banner') ?>
    <?= $this->include('public/partials/tabs', ['active' => 'profil']) ?>

    <!-- Profil Kecamatan -->
    <div class="grid gap-4 md:gap-6">
        <!-- Tentang Kecamatan -->
        <div class="bg-white rounded-lg shadow-md p-4 md:p-6">
            <h2 class="text-lg md:text-2xl font-bold mb-3 md:mb-4 text-blue-600">Tentang Kecamatan Madidir</h2>
            <div class="prose max-w-none">
                <p class="text-sm md:text-base text-gray-700 leading-relaxed mb-3 md:mb-4">
                    Kecamatan Madidir merupakan salah satu kecamatan di wilayah yang memiliki potensi besar dalam bidang pertanian dan perikanan. Dengan luas wilayah yang strategis, Kecamatan Madidir terus berkembang menjadi daerah yang modern namun tetap mempertahankan nilai-nilai kearifan lokal.
                </p>
                <p class="text-sm md:text-base text-gray-700 leading-relaxed">
                    Visi dan misi kecamatan kami adalah mewujudkan masyarakat yang sejahtera, mandiri, dan berdaya saing tinggi melalui peningkatan kualitas pelayanan publik, pemberdayaan ekonomi masyarakat, dan pengembangan infrastruktur yang berkelanjutan.
                </p>
            </div>
        </div>

        <!-- Data Umum -->
        <div class="bg-white rounded-lg shadow-md p-4 md:p-6">
            <h3 class="text-lg md:text-xl font-bold mb-3 md:mb-4 text-blue-600">Data Umum</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 md:gap-4">
                <div class="flex items-start gap-2 md:gap-3">
                    <div class="bg-blue-100 p-2 rounded flex-shrink-0">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs md:text-sm text-gray-500">Luas Wilayah</p>
                        <p class="text-sm md:text-base font-semibold">45.2 km²</p>
                    </div>
                </div>
                <div class="flex items-start gap-2 md:gap-3">
                    <div class="bg-green-100 p-2 rounded flex-shrink-0">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs md:text-sm text-gray-500">Jumlah Penduduk</p>
                        <p class="text-sm md:text-base font-semibold"><?= number_format($totalPenduduk ?? 8, 0, ',', '.') ?> Jiwa</p>
                    </div>
                </div>
                <div class="flex items-start gap-2 md:gap-3">
                    <div class="bg-purple-100 p-2 rounded flex-shrink-0">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs md:text-sm text-gray-500">Jumlah Desa/Kelurahan</p>
                        <p class="text-sm md:text-base font-semibold">4 Desa</p>
                    </div>
                </div>
                <div class="flex items-start gap-2 md:gap-3">
                    <div class="bg-yellow-100 p-2 rounded flex-shrink-0">
                        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs md:text-sm text-gray-500">Kepadatan Penduduk</p>
                        <p class="text-sm md:text-base font-semibold"><?= number_format(($totalPenduduk ?? 8) / 45.2, 0) ?> Jiwa/km²</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Batas Wilayah -->
        <div class="bg-white rounded-lg shadow-md p-4 md:p-6">
            <h3 class="text-lg md:text-xl font-bold mb-3 md:mb-4 text-blue-600">Batas Wilayah</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 md:gap-4">
                <div class="border-l-4 border-blue-500 pl-3 md:pl-4">
                    <p class="text-xs md:text-sm text-gray-500">Sebelah Utara</p>
                    <p class="text-sm md:text-base font-semibold">Kecamatan Bintang</p>
                </div>
                <div class="border-l-4 border-green-500 pl-3 md:pl-4">
                    <p class="text-xs md:text-sm text-gray-500">Sebelah Selatan</p>
                    <p class="text-sm md:text-base font-semibold">Kecamatan Serasan</p>
                </div>
                <div class="border-l-4 border-purple-500 pl-3 md:pl-4">
                    <p class="text-xs md:text-sm text-gray-500">Sebelah Barat</p>
                    <p class="text-sm md:text-base font-semibold">Selat Karimata</p>
                </div>
                <div class="border-l-4 border-yellow-500 pl-3 md:pl-4">
                    <p class="text-xs md:text-sm text-gray-500">Sebelah Timur</p>
                    <p class="text-sm md:text-base font-semibold">Kecamatan Palmatak</p>
                </div>
            </div>
        </div>

        <!-- Struktur Organisasi -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-xl font-bold mb-4 text-blue-600">Struktur Organisasi Kecamatan</h3>
            <div class="space-y-4">
                <div class="bg-blue-50 border-l-4 border-blue-600 p-4 rounded">
                    <p class="text-sm text-gray-600">Camat</p>
                    <p class="font-bold text-lg">H. Ahmad Ridwan, S.Sos, M.Si</p>
                </div>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 border-l-4 border-gray-400 p-4 rounded">
                        <p class="text-sm text-gray-600">Sekretaris Camat</p>
                        <p class="font-semibold">Siti Nurhaliza, S.AP</p>
                    </div>
                    <div class="bg-gray-50 border-l-4 border-gray-400 p-4 rounded">
                        <p class="text-sm text-gray-600">Kasi Pemerintahan</p>
                        <p class="font-semibold">Muhammad Yusuf, S.Sos</p>
                    </div>
                    <div class="bg-gray-50 border-l-4 border-gray-400 p-4 rounded">
                        <p class="text-sm text-gray-600">Kasi Pemberdayaan Masyarakat</p>
                        <p class="font-semibold">Fatimah Zahra, S.Pd</p>
                    </div>
                    <div class="bg-gray-50 border-l-4 border-gray-400 p-4 rounded">
                        <p class="text-sm text-gray-600">Kasi Pelayanan Umum</p>
                        <p class="font-semibold">Bambang Sutrisno, S.Kom</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $this->include('public/partials/footer') ?>
<?= $this->endSection() ?>
