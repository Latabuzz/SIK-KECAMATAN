<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="min-h-screen bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center p-4">
    <div class="w-full max-w-md space-y-6">
        <!-- Header -->
        <div class="text-center text-white space-y-2">
            <div class="flex justify-center mb-4">
                <div class="bg-white p-4 rounded-full">
                    <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
            </div>
            <h1 class="text-3xl font-bold">Sistem Informasi Kependudukan</h1>
            <p class="text-blue-100">Kecamatan Madidir</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-lg shadow-xl p-8">
            <h2 class="text-2xl font-bold mb-2">Login Admin</h2>
            <p class="text-gray-600 mb-6">Masukkan username dan password untuk mengakses sistem</p>

            <?php if(session()->getFlashdata('error')): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <?= session()->getFlashdata('error') ?>
            </div>
            <?php endif; ?>

            <?php if(session()->getFlashdata('success')): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                <?= session()->getFlashdata('success') ?>
            </div>
            <?php endif; ?>

            <form action="<?= base_url('/login') ?>" method="POST" class="space-y-4">
                <?= csrf_field() ?>
                
                <div class="space-y-2">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <input 
                            type="text" 
                            id="username" 
                            name="username" 
                            class="pl-10 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Masukkan username"
                            required
                            value="<?= old('username') ?>"
                        >
                    </div>
                </div>

                <div class="space-y-2">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="pl-10 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Masukkan password"
                            required
                        >
                    </div>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 transition">
                    Masuk
                </button>

                <a href="<?= base_url('/') ?>" class="block w-full text-center border border-gray-300 py-2 px-4 rounded-lg hover:bg-gray-50 transition">
                    Kembali ke Halaman Utama
                </a>
            </form>

            <!-- Demo credentials info -->
            <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
                <p class="text-sm text-blue-800 font-semibold mb-2">Demo Akun:</p>
                <p class="text-sm text-blue-700">Username: admin</p>
                <p class="text-sm text-blue-700">Password: admin123</p>
            </div>
        </div>

        <p class="text-center text-white text-sm">
            © 2025 Kecamatan Madidir. All rights reserved.
        </p>
    </div>
</div>
<?= $this->endSection() ?>
