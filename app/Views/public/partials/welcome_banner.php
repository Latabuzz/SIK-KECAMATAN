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
