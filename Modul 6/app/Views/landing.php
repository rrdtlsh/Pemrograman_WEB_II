<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Selamat Datang 🎓</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('assets/bg1.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 110vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .card-fun {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(5px);
            border-radius: 25px;
            padding: 50px 40px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 600px;
            width: 100%;
            animation: popUp 0.8s ease;
        }

        @keyframes popUp {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        h1 {
            font-size: 2.8rem;
            color: #333;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .emoji {
            font-size: 2rem;
        }

        .tagline {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 2rem;
            font-family: 'Comic Sans MS', cursive;
        }

        .btn-fun {
            border-radius: 50px;
            padding: 12px 28px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: 0.3s ease;
        }

        .btn-fun:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <?= view('partials/navbar') ?>
    <div class="card-fun">
        <div class="emoji mb-2">👋✨</div>
        <h1>Selamat Datang di Website Praktikum</h1>
        <p class="tagline">Dimana Disini Akan Menampilkan Orang Hebat 🚀</p>
        <a href="/beranda" class="btn btn-primary btn-fun me-3">Masuk ke Beranda</a>
        <a href="/profil" class="btn btn-outline-dark btn-fun">Lihat Profil</a>
    </div>
</body>

</html>