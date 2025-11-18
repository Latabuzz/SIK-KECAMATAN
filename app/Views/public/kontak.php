<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?= $this->include('public/partials/header') ?>

<main class="container mx-auto px-4 py-8">
    <?= $this->include('public/partials/welcome_banner') ?>
    <?= $this->include('public/partials/tabs', ['active' => 'kontak']) ?>

    <div class="grid md:grid-cols-2 gap-6">
        <!-- Contact Form -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-6">Hubungi Kami</h2>
            <form action="<?= base_url('/kontak/submit') ?>" method="post" class="space-y-4">
                <?= csrf_field() ?>
                
                <div>
                    <label for="nama" class="block text-sm font-medium mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                    <input type="text" id="nama" name="nama" required 
                           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
                           placeholder="Masukkan nama lengkap Anda">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium mb-2">Email <span class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" required 
                           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
                           placeholder="nama@email.com">
                </div>

                <div>
                    <label for="telepon" class="block text-sm font-medium mb-2">Nomor Telepon</label>
                    <input type="tel" id="telepon" name="telepon" 
                           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
                           placeholder="08xx-xxxx-xxxx">
                </div>

                <div>
                    <label for="subjek" class="block text-sm font-medium mb-2">Subjek <span class="text-red-500">*</span></label>
                    <input type="text" id="subjek" name="subjek" required 
                           class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
                           placeholder="Perihal pesan Anda">
                </div>

                <div>
                    <label for="pesan" class="block text-sm font-medium mb-2">Pesan <span class="text-red-500">*</span></label>
                    <textarea id="pesan" name="pesan" rows="5" required 
                              class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
                              placeholder="Tulis pesan Anda di sini..."></textarea>
                </div>

                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-medium flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Kirim Pesan
                </button>
            </form>
        </div>

        <!-- Contact Information -->
        <div class="space-y-6">
            <!-- Office Info -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4">Informasi Kantor</h3>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <div class="bg-blue-100 p-2 rounded-lg flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium">Alamat</p>
                            <p class="text-gray-600 text-sm">Jalan Babe Palar, No. 91<br>Paceda, Madidir, Madidir Ure<br>Kota Bitung, Sulawesi Utara</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="bg-green-100 p-2 rounded-lg flex-shrink-0">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium">Telepon</p>
                            <p class="text-gray-600 text-sm">(0771) 123-456<br>(0771) 789-012</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="bg-purple-100 p-2 rounded-lg flex-shrink-0">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium">Email</p>
                            <p class="text-gray-600 text-sm">kecamatan.madidir@natuna.go.id<br>info@madidir.go.id</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="bg-yellow-100 p-2 rounded-lg flex-shrink-0">
                            <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-medium">Jam Pelayanan</p>
                            <p class="text-gray-600 text-sm">Senin - Kamis: 08.00 - 16.00 WIB<br>Jumat: 08.00 - 16.30 WIB<br>Sabtu - Minggu: Tutup</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Media -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4">Media Sosial</h3>
                <div class="space-y-3">
                    <a href="#" class="flex items-center gap-3 p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition">
                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        <span class="font-medium">Facebook: @KecamatanMadidir</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 p-3 bg-sky-50 hover:bg-sky-100 rounded-lg transition">
                        <svg class="w-6 h-6 text-sky-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                        <span class="font-medium">Twitter: @MadidirOfficial</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 p-3 bg-pink-50 hover:bg-pink-100 rounded-lg transition">
                        <svg class="w-6 h-6 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                        <span class="font-medium">Instagram: @madidir.official</span>
                    </a>
                </div>
            </div>

            <!-- Map -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4">Lokasi Kantor</h3>
                <div class="rounded-lg overflow-hidden h-64">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7234!2d125.1234!3d1.4567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMcKwMjcnMjQuMSJOIDEyNcKwMDcnMjQuMyJF!5e0!3m2!1sid!2sid!4v1234567890!5m2!1sid!2sid&q=Jalan+Babe+Palar+No.+91+Paceda+Madidir+Bitung"
                        width="100%" 
                        height="256" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="mt-4">
                    <a href="https://www.google.com/maps/search/?api=1&query=Jalan+Babe+Palar+No.+91+Paceda+Madidir+Bitung+Sulawesi+Utara" 
                       target="_blank" 
                       class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 text-sm font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                        Buka di Google Maps
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $this->include('public/partials/footer') ?>
<?= $this->endSection() ?>
