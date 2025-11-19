<!-- Tabs Navigation -->
<div class="mb-6 border-b border-gray-200">
    <nav class="flex justify-center gap-1 md:gap-6 overflow-x-auto pb-2 scrollbar-hide">
        <a href="<?= base_url('/profil') ?>" class="flex-1 md:flex-initial min-w-[70px] md:min-w-0 px-2 md:px-4 py-2 border-b-2 <?= ($active ?? '') == 'profil' ? 'border-blue-600 text-blue-600 font-medium' : 'border-transparent hover:border-gray-300 text-gray-600 hover:text-gray-800' ?> flex flex-col md:flex-row items-center justify-center gap-1 md:gap-2 transition-colors">
            <svg class="w-5 h-5 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span class="text-[10px] md:text-base whitespace-nowrap">Profil</span>
        </a>
        <a href="<?= base_url('/wilayah') ?>" class="flex-1 md:flex-initial min-w-[70px] md:min-w-0 px-2 md:px-4 py-2 border-b-2 <?= ($active ?? '') == 'wilayah' ? 'border-blue-600 text-blue-600 font-medium' : 'border-transparent hover:border-gray-300 text-gray-600 hover:text-gray-800' ?> flex flex-col md:flex-row items-center justify-center gap-1 md:gap-2 transition-colors">
            <svg class="w-5 h-5 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
            </svg>
            <span class="text-[10px] md:text-base whitespace-nowrap">Wilayah</span>
        </a>
        <a href="<?= base_url('/statistik') ?>" class="flex-1 md:flex-initial min-w-[70px] md:min-w-0 px-2 md:px-4 py-2 border-b-2 <?= ($active ?? '') == 'statistik' ? 'border-blue-600 text-blue-600 font-medium' : 'border-transparent hover:border-gray-300 text-gray-600 hover:text-gray-800' ?> flex flex-col md:flex-row items-center justify-center gap-1 md:gap-2 transition-colors">
            <svg class="w-5 h-5 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
            </svg>
            <span class="text-[10px] md:text-base whitespace-nowrap">Statistik</span>
        </a>
        <a href="<?= base_url('/data') ?>" class="flex-1 md:flex-initial min-w-[70px] md:min-w-0 px-2 md:px-4 py-2 border-b-2 <?= ($active ?? '') == 'data' ? 'border-blue-600 text-blue-600 font-medium' : 'border-transparent hover:border-gray-300 text-gray-600 hover:text-gray-800' ?> flex flex-col md:flex-row items-center justify-center gap-1 md:gap-2 transition-colors">
            <svg class="w-5 h-5 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
            </svg>
            <span class="text-[10px] md:text-base whitespace-nowrap">Data</span>
        </a>
        <a href="<?= base_url('/kontak') ?>" class="flex-1 md:flex-initial min-w-[70px] md:min-w-0 px-2 md:px-4 py-2 border-b-2 <?= ($active ?? '') == 'kontak' ? 'border-blue-600 text-blue-600 font-medium' : 'border-transparent hover:border-gray-300 text-gray-600 hover:text-gray-800' ?> flex flex-col md:flex-row items-center justify-center gap-1 md:gap-2 transition-colors">
            <svg class="w-5 h-5 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
            </svg>
            <span class="text-[10px] md:text-base whitespace-nowrap">Hubungi</span>
        </a>
    </nav>
</div>
