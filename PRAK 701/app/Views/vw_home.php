<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="main-box">
    <h1 class="display-6 mb-3" style="color: #00796b;">
        📚 Selamat Datang di <strong style="color:#f57c00;">Perpustakaan Minimalis</strong>
    </h1>
    <p class="lead text-muted">Kelola koleksi bukumu dengan mudah.</p>

    <hr class="my-4">

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>

    <a href="<?= base_url('home') ?>" class="btn btn-outline-primary m-2">
        <i class="fas fa-book"></i> Lihat Data Buku
    </a>

    <?php if (session()->get('logged_in')): ?>
        <p class="mt-3">Halo, <strong><?= esc(session()->get('username')) ?></strong> 👋</p>
        </a>
        <a href="<?= base_url('logout') ?>" class="btn btn-danger m-2">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    <?php else: ?>
        <a href="<?= base_url('login') ?>" class="btn btn-primary m-2">
            <i class="fas fa-sign-in-alt"></i> Login
        </a>
        <a href="<?= base_url('register') ?>" class="btn btn-warning m-2 text-white">
            <i class="fas fa-user-plus"></i> Register
        </a>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>