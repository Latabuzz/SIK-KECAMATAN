<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?= $this->include('public/partials/header') ?>

<main class="container mx-auto px-4 py-8">
    <?= $this->include('public/partials/welcome_banner') ?>
    <?= $this->include('public/partials/tabs', ['active' => 'data']) ?>

    <!-- Data Penduduk Table -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-6 gap-4">
            <h2 class="text-2xl font-bold">Data Penduduk Kecamatan Madidir</h2>
            <div class="flex gap-2">
                <button onclick="window.print()" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                    </svg>
                    Cetak
                </button>
            </div>
        </div>

        <!-- Filter Form -->
        <form method="get" class="mb-6 grid md:grid-cols-3 gap-4">
            <div>
                <label class="block text-sm font-medium mb-2">Pencarian</label>
                <input type="text" name="search" value="<?= esc($search ?? '') ?>" 
                       placeholder="Cari NIK atau Nama..." 
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Desa</label>
                <select name="desa" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua Desa</option>
                    <?php foreach($villages as $village): ?>
                        <option value="<?= esc($village) ?>" <?= ($selectedDesa ?? '') == $village ? 'selected' : '' ?>>
                            <?= esc($village) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Jenis Kelamin</label>
                <select name="gender" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua</option>
                    <option value="Laki-laki" <?= ($selectedGender ?? '') == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                    <option value="Perempuan" <?= ($selectedGender ?? '') == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                </select>
            </div>
            <div class="md:col-span-3 flex gap-2">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg">
                    <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    Filter
                </button>
                <a href="<?= base_url('/data') ?>" class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded-lg">Reset</a>
            </div>
        </form>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b-2 border-gray-200">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">NIK</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jenis Kelamin</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Desa</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pekerjaan</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php if(empty($residents)): ?>
                        <tr>
                            <td colspan="7" class="px-4 py-8 text-center text-gray-500">
                                <svg class="w-12 h-12 mx-auto mb-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                </svg>
                                Tidak ada data penduduk
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach($residents as $index => $resident): ?>
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-sm"><?= $index + 1 ?></td>
                                <td class="px-4 py-3 text-sm font-mono"><?= esc($resident['nik']) ?></td>
                                <td class="px-4 py-3 text-sm font-medium"><?= esc($resident['nama']) ?></td>
                                <td class="px-4 py-3 text-sm">
                                    <?php if($resident['jenis_kelamin'] == 'Laki-laki'): ?>
                                        <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Laki-laki</span>
                                    <?php else: ?>
                                        <span class="px-2 py-1 bg-pink-100 text-pink-800 rounded-full text-xs">Perempuan</span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-4 py-3 text-sm"><?= esc($resident['desa']) ?></td>
                                <td class="px-4 py-3 text-sm"><?= esc($resident['pekerjaan']) ?></td>
                                <td class="px-4 py-3 text-sm">
                                    <button onclick="showDetail(<?= $resident['id'] ?>)" class="text-blue-600 hover:text-blue-800 font-medium">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination Info -->
        <?php if(!empty($residents)): ?>
            <div class="mt-4 text-sm text-gray-600">
                Menampilkan <?= count($residents) ?> data penduduk
            </div>
        <?php endif; ?>
    </div>
</main>

<!-- Detail Modal -->
<div id="detailModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold">Detail Penduduk</h3>
                <button onclick="closeDetail()" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div id="detailContent" class="space-y-3">
                <!-- Content will be loaded here -->
            </div>
        </div>
    </div>
</div>

<script>
const residentsData = <?= json_encode($residents) ?>;

function showDetail(id) {
    const resident = residentsData.find(r => r.id == id);
    if (!resident) return;
    
    const content = `
        <div class="grid md:grid-cols-2 gap-4">
            <div><span class="text-gray-600">NIK:</span> <span class="font-semibold">${resident.nik}</span></div>
            <div><span class="text-gray-600">Nama:</span> <span class="font-semibold">${resident.nama}</span></div>
            <div><span class="text-gray-600">Tempat Lahir:</span> <span class="font-semibold">${resident.tempat_lahir}</span></div>
            <div><span class="text-gray-600">Tanggal Lahir:</span> <span class="font-semibold">${resident.tanggal_lahir}</span></div>
            <div><span class="text-gray-600">Jenis Kelamin:</span> <span class="font-semibold">${resident.jenis_kelamin}</span></div>
            <div><span class="text-gray-600">Agama:</span> <span class="font-semibold">${resident.agama}</span></div>
            <div class="md:col-span-2"><span class="text-gray-600">Alamat:</span> <span class="font-semibold">${resident.alamat}</span></div>
            <div><span class="text-gray-600">RT:</span> <span class="font-semibold">${resident.rt}</span></div>
            <div><span class="text-gray-600">RW:</span> <span class="font-semibold">${resident.rw}</span></div>
            <div><span class="text-gray-600">Desa:</span> <span class="font-semibold">${resident.desa}</span></div>
            <div><span class="text-gray-600">Status Perkawinan:</span> <span class="font-semibold">${resident.status_perkawinan}</span></div>
            <div><span class="text-gray-600">Pekerjaan:</span> <span class="font-semibold">${resident.pekerjaan}</span></div>
            <div><span class="text-gray-600">Pendidikan:</span> <span class="font-semibold">${resident.pendidikan}</span></div>
            <div><span class="text-gray-600">Kewarganegaraan:</span> <span class="font-semibold">${resident.kewarganegaraan}</span></div>
        </div>
    `;
    
    document.getElementById('detailContent').innerHTML = content;
    document.getElementById('detailModal').classList.remove('hidden');
}

function closeDetail() {
    document.getElementById('detailModal').classList.add('hidden');
}
</script>

<?= $this->include('public/partials/footer') ?>
<?= $this->endSection() ?>
