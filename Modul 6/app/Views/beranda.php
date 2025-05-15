<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Beranda Aplikasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: url('/assets/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
            position: relative;
        }

        .content-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            z-index: 1;
            position: relative;
            text-align: center;
            padding: 20px;
        }

        .card-profile {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(5px);
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            animation: fadeInScale 1.2s ease-out forwards;
            transform: scale(0.8);
            opacity: 0;
            max-width: 700px;
            width: 100%;
        }

        @keyframes fadeInScale {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .card-profile h1 {
            font-size: 2.3rem;
            font-weight: 600;
            color: #333;
        }

        .card-profile p {
            font-size: 1.2rem;
            color: #444;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .btn-custom {
            font-size: 1rem;
            padding: 10px 25px;
            border-radius: 30px;
            margin: 5px;
            font-weight: 500;
        }

        .logo-container {
            margin-bottom: 20px;
            animation: shimmer 2.5s infinite linear;
        }

        .logo-container img {
            width: 100px;
            height: auto;
            filter: drop-shadow(0 0 15px rgb(247, 255, 91));
            border-radius: 12px;
        }

        @keyframes shimmer {
            0% {
                opacity: 0.8;
            }

            50% {
                opacity: 1;
                transform: scale(1.05);
            }

            100% {
                opacity: 0.8;
            }
        }
    </style>
</head>

<body>
    <?= view('partials/navbar') ?>
    <div class="content-wrapper">
        <div class="card-profile">
            <div class="logo-container">
                <img src="/assets/logo.png" alt="Logo Universitas">
            </div>
            <h1>Halo, saya <?= $nama ?></h1>
            <p>
                dari <strong>Universitas Lambung Mangkurat</strong><br>
                dengan NIM <strong><?= $nim ?></strong>
            </p>
            <a href="/" class="btn btn-outline-secondary btn-custom">🔙 Kembali</a>
            <a href="/profil" class="btn btn-primary btn-custom">👀 Lihat Profil</a>
        </div>
    </div>
</body>

</html>