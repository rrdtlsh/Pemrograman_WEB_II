<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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

        .register-container {
            max-width: 500px;
            margin: 80px auto;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #00796b;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #00acc1;
            border: none;
        }

        .btn-primary:hover {
            background-color: #00838f;
        }

        .btn-secondary {
            background-color: #607d8b;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #455a64;
        }

        footer {
            background-color: transparent;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class="register-container">
        <h1 class="text-center">📋 Daftar Akun</h1>
        <p class="text-center mb-4">Silakan daftarkan identitas Anda untuk melanjutkan.</p>

        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>⚠️ Periksa entrian form:</strong>
                <?= \Config\Services::validation()->listErrors(); ?>
            </div>
        <?php endif; ?>

        <form method="post" action="<?= base_url(); ?>/register/process">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="username" class="form-label">👤 Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= old('username') ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">🔒 Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="password_conf" class="form-label">🔁 Konfirmasi Password</label>
                <input type="password" class="form-control" id="password_conf" name="password_conf">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">📧 Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= old('email') ?>">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Daftar</button>
                <a href="<?= base_url('/') ?>" class="btn btn-secondary">← Kembali ke Beranda</a>
            </div>
        </form>
    </div>

    <footer>
        <span class="text-muted">&copy; <?= date('Y') ?> - Web Praktikum</span>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>