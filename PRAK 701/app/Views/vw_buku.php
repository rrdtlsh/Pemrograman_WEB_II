<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #e0f7fa, #b2ebf2, #80deea);
        background-size: 400% 400%;
        animation: gradientBG 15s ease infinite;
        min-height: 100vh;
        margin: 0;
        padding: 0;
    }

    @keyframes gradientBG {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .sidebar {
        width: 300px;
        min-height: 100vh;
        background-color: rgba(255, 255, 255, 0.95);
        box-shadow: 2px 0 10px rgba(0, 0, 0, 0.05);
        padding: 20px;
        position: fixed;
        top: 0;
        left: 0;
    }

    .sidebar h4 {
        font-weight: bold;
        color: #00796b;
        margin-bottom: 30px;
    }

    .sidebar .nav-link.logout {
        color: #fff !important;
        background-color: #e53935;
        padding: 8px 12px;
        border-radius: 6px;
        display: inline-block;
        text-align: center;
    }

    .sidebar .nav-link.logout:hover {
        background-color: #c62828;
        text-decoration: none;
    }

    .main-content {
        margin-left: 270px;
        padding: 30px 20px;
    }

    .card {
        background-color: rgba(255, 255, 255, 0.95);
        border-radius: 12px;
        width: 1000px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
        background-color: #00acc1;
        border: none;
    }

    .btn-primary:hover {
        background-color: #00838f;
    }

    .table thead {
        background-color: #b2ebf2;
    }

    .welcome-message h4 {
        font-size: 22px;
        line-height: 1.5;
    }

    .welcome-message h3 {
        font-size: 36px;
        font-weight: bold;
    }

    .table td,
    .table th {
        max-width: 200px;
        white-space: normal;
        vertical-align: middle;
    }
</style>

<div class="sidebar">
    <h4>📚 Data Buku</h4>
    <div class="nav flex-column">
        <?php if (session()->get('logged_in')) : ?>
            <div class="nav-item">
                <a href="<?= base_url('logout') ?>" class="btn btn-danger m-2">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="main-content">
    <?php if (session()->get('logged_in')) : ?>
        <div class="welcome-message mb-4">
            <h3 class="fw-bold" style="color: #004d40;">
                Selamat Datang, <?= esc(session()->get('username')) ?>👋
            </h3>
        </div>
    <?php endif; ?>


    <div class="card p-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0" style="color:#00796b;">Daftar Buku</h5>
            <a href="<?= base_url('buku/create') ?>" class="btn btn-primary btn-sm">+ Tambah Buku</a>
        </div>
        <div class="card-body">
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success mt-2"><?= session()->getFlashdata('success') ?></div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger mt-2"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>

            <table class="table table-bordered table-hover mt-2">
                <thead class="text-center">
                    <tr>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php if (!empty($posts) && is_array($posts)) : ?>
                        <?php foreach ($posts as $row) : ?>
                            <tr>
                                <td><?= esc($row['judul']) ?></td>
                                <td><?= esc($row['penulis']) ?></td>
                                <td><?= esc($row['penerbit']) ?></td>
                                <td><?= esc($row['tahun_terbit']) ?></td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');"
                                        action="<?= base_url('buku/delete/' . $row['id']) ?>" method="post" style="display:inline-block">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="<?= base_url('buku/edit/' . $row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="5">Tidak ada data buku ditemukan.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>

            <?php if ($pager->hasMore() || $pager->getCurrentPage() > 1): ?>
                <div class="mt-3"><?= $pager->links() ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('extra-js') ?>
<script>
    $(document).ready(function() {
        $('.pagination li').addClass('page-item');
        $('.pagination li a').addClass('page-link');

        setTimeout(() => {
            $('.alert').fadeOut('slow');
        }, 3000);
    });
</script>
<?= $this->endSection() ?>