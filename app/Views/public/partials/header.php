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
