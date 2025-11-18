<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?= $this->include('public/partials/header') ?>

<main class="container mx-auto px-4 py-8">
    <?= $this->include('public/partials/welcome_banner') ?>
    <?= $this->include('public/partials/tabs', ['active' => '']) ?>

    <!-- Dashboard sebagai landing page - redirect ke statistik -->
    <script>window.location.href = '<?= base_url('/statistik') ?>';</script>
    
    <div class="text-center py-12">
        <div class="spinner mx-auto"></div>
        <p class="mt-4 text-gray-600">Memuat...</p>
    </div>
</main>

<?= $this->include('public/partials/footer') ?>
<?= $this->endSection() ?>
