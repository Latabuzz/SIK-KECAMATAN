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
            <a href="<?= base_url('/admin/dashboard') ?>" class="px-4 py-2 border-b-2 border-transparent hover:border-gray-300 text-gray-600 hover:text-gray-800 whitespace-nowrap">
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
            <a href="<?= base_url('/admin/residents/create') ?>" class="px-4 py-2 border-b-2 border-blue-600 text-blue-600 font-medium whitespace-nowrap">
                <svg class="inline w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Tambah Data
            </a>
        </nav>
    </div>

    <?php if(session()->getFlashdata('error')): ?>
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <?= session()->getFlashdata('error') ?>
    </div>
    <?php endif; ?>

    <?php if(session()->has('errors')): ?>
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul class="list-disc list-inside">
            <?php foreach(session('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>

    <!-- Form Content -->
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-bold mb-2"><?= isset($resident) ? 'Edit Data Penduduk' : 'Tambah Data Penduduk Baru' ?></h2>
        <p class="text-gray-600 mb-6"><?= isset($resident) ? 'Perbarui informasi data penduduk' : 'Masukkan informasi data penduduk baru' ?></p>

        <form action="<?= isset($resident) ? base_url('/admin/residents/update/' . $resident['id']) : base_url('/admin/residents/store') ?>" method="POST" class="space-y-4">
            <?= csrf_field() ?>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- NIK -->
                <div class="space-y-2">
                    <label for="nik" class="block text-sm font-medium text-gray-700">NIK *</label>
                    <input 
                        type="text" 
                        id="nik" 
                        name="nik" 
                        value="<?= old('nik', $resident['nik'] ?? '') ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Nomor Induk Kependudukan"
                        required
                        maxlength="16"
                    >
                </div>

                <!-- Nama -->
                <div class="space-y-2">
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap *</label>
                    <input 
                        type="text" 
                        id="nama" 
                        name="nama" 
                        value="<?= old('nama', $resident['nama'] ?? '') ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Nama lengkap"
                        required
                    >
                </div>

                <!-- Tempat Lahir -->
                <div class="space-y-2">
                    <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir *</label>
                    <input 
                        type="text" 
                        id="tempat_lahir" 
                        name="tempat_lahir" 
                        value="<?= old('tempat_lahir', $resident['tempat_lahir'] ?? '') ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Tempat lahir"
                        required
                    >
                </div>

                <!-- Tanggal Lahir -->
                <div class="space-y-2">
                    <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir *</label>
                    <input 
                        type="date" 
                        id="tanggal_lahir" 
                        name="tanggal_lahir" 
                        value="<?= old('tanggal_lahir', $resident['tanggal_lahir'] ?? '') ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        required
                    >
                </div>

                <!-- Jenis Kelamin -->
                <div class="space-y-2">
                    <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin *</label>
                    <select 
                        id="jenis_kelamin" 
                        name="jenis_kelamin"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        required
                    >
                        <option value="Laki-laki" <?= (old('jenis_kelamin', $resident['jenis_kelamin'] ?? '') == 'Laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
                        <option value="Perempuan" <?= (old('jenis_kelamin', $resident['jenis_kelamin'] ?? '') == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
                    </select>
                </div>

                <!-- Agama -->
                <div class="space-y-2">
                    <label for="agama" class="block text-sm font-medium text-gray-700">Agama *</label>
                    <select 
                        id="agama" 
                        name="agama"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        required
                    >
                        <option value="">Pilih agama</option>
                        <?php 
                        $agamaList = ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu'];
                        foreach($agamaList as $agama): 
                        ?>
                            <option value="<?= $agama ?>" <?= (old('agama', $resident['agama'] ?? '') == $agama) ? 'selected' : '' ?>><?= $agama ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Alamat -->
                <div class="space-y-2 md:col-span-2">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat *</label>
                    <input 
                        type="text" 
                        id="alamat" 
                        name="alamat" 
                        value="<?= old('alamat', $resident['alamat'] ?? '') ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Alamat lengkap"
                        required
                    >
                </div>

                <!-- RT -->
                <div class="space-y-2">
                    <label for="rt" class="block text-sm font-medium text-gray-700">RT *</label>
                    <input 
                        type="text" 
                        id="rt" 
                        name="rt" 
                        value="<?= old('rt', $resident['rt'] ?? '') ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="001"
                        required
                        maxlength="3"
                    >
                </div>

                <!-- RW -->
                <div class="space-y-2">
                    <label for="rw" class="block text-sm font-medium text-gray-700">RW *</label>
                    <input 
                        type="text" 
                        id="rw" 
                        name="rw" 
                        value="<?= old('rw', $resident['rw'] ?? '') ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="001"
                        required
                        maxlength="3"
                    >
                </div>

                <!-- Desa -->
                <div class="space-y-2">
                    <label for="desa" class="block text-sm font-medium text-gray-700">Desa *</label>
                    <select 
                        id="desa" 
                        name="desa"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        required
                    >
                        <option value="">Pilih desa</option>
                        <?php 
                        $desaList = ['Madidir Utara', 'Madidir Selatan', 'Madidir Barat', 'Madidir Timur'];
                        foreach($desaList as $desa): 
                        ?>
                            <option value="<?= $desa ?>" <?= (old('desa', $resident['desa'] ?? '') == $desa) ? 'selected' : '' ?>><?= $desa ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Status Perkawinan -->
                <div class="space-y-2">
                    <label for="status_perkawinan" class="block text-sm font-medium text-gray-700">Status Perkawinan *</label>
                    <select 
                        id="status_perkawinan" 
                        name="status_perkawinan"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        required
                    >
                        <option value="">Pilih status</option>
                        <?php 
                        $statusList = ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati'];
                        foreach($statusList as $status): 
                        ?>
                            <option value="<?= $status ?>" <?= (old('status_perkawinan', $resident['status_perkawinan'] ?? '') == $status) ? 'selected' : '' ?>><?= $status ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Pekerjaan -->
                <div class="space-y-2">
                    <label for="pekerjaan" class="block text-sm font-medium text-gray-700">Pekerjaan *</label>
                    <input 
                        type="text" 
                        id="pekerjaan" 
                        name="pekerjaan" 
                        value="<?= old('pekerjaan', $resident['pekerjaan'] ?? '') ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Pekerjaan"
                        required
                    >
                </div>

                <!-- Pendidikan -->
                <div class="space-y-2">
                    <label for="pendidikan" class="block text-sm font-medium text-gray-700">Pendidikan Terakhir *</label>
                    <select 
                        id="pendidikan" 
                        name="pendidikan"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        required
                    >
                        <option value="">Pilih pendidikan</option>
                        <?php 
                        $pendidikanList = ['Tidak/Belum Sekolah', 'SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3'];
                        foreach($pendidikanList as $pendidikan): 
                        ?>
                            <option value="<?= $pendidikan ?>" <?= (old('pendidikan', $resident['pendidikan'] ?? '') == $pendidikan) ? 'selected' : '' ?>><?= $pendidikan ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Kewarganegaraan -->
                <div class="space-y-2">
                    <label for="kewarganegaraan" class="block text-sm font-medium text-gray-700">Kewarganegaraan *</label>
                    <select 
                        id="kewarganegaraan" 
                        name="kewarganegaraan"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        required
                    >
                        <option value="WNI" <?= (old('kewarganegaraan', $resident['kewarganegaraan'] ?? 'WNI') == 'WNI') ? 'selected' : '' ?>>WNI</option>
                        <option value="WNA" <?= (old('kewarganegaraan', $resident['kewarganegaraan'] ?? '') == 'WNA') ? 'selected' : '' ?>>WNA</option>
                    </select>
                </div>
            </div>

            <div class="flex gap-2 justify-end pt-4 border-t">
                <a href="<?= base_url('/admin/residents') ?>" class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                    Batal
                </a>
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    <?= isset($resident) ? 'Perbarui Data' : 'Simpan Data' ?>
                </button>
            </div>
        </form>
    </div>
</main>
<?= $this->endSection() ?>
