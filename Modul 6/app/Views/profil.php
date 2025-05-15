<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Profil Praktikan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('assets/bg2.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            opacity: 1;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.6rem;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .colon {
            width: 10px;
            display: inline-block;
            text-align: center;
            margin-right: 8px;
        }

        .label {
            width: 140px;
            font-weight: 600;
            color: #333;
        }

        .value {
            flex: 1;
            color: #444;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .profile-card {
            max-width: 975px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 25px;
            padding: 2rem;
            margin: 4rem auto;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 2rem;
            flex-wrap: wrap;
            position: relative;
            z-index: 1;
            animation: fadeInUp 1s ease-out;
        }

        .profile-img {
            width: 300px;
            height: 500px;
            object-fit: cover;
            border-radius: 50%;
            border: 6px solid #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            margin: 0 auto;
        }

        .profile-info {
            flex: 1;
        }

        .profile-info h3 {
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .profile-info p {
            font-size: 1.1rem;
            margin-bottom: 0.6rem;
            color: #333;
            font-weight: 500;
        }

        .btn-custom {
            margin-top: 1rem;
            padding: 10px 25px;
            font-weight: 600;
            border-radius: 30px;
            transition: transform 0.3s ease;
        }

        .btn-custom:hover {
            transform: scale(1.05);
        }

        h2 {
            text-align: center;
            font-weight: 700;
            margin-top: 2rem;
        }

        #loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <?= view('partials/navbar') ?>
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>

    <div class="container">
        <div class="profile-card">
            <img src="/assets/profile.jpg" class="profile-img" alt="Foto Profil">
            <div class="profile-info">
                <h3><?= $nama ?></h3>
                <div class="info-item"><span class="label">NIM</span><span class="colon">:</span><span class="value"><?= $nim ?></span></div>
                <div class="info-item"><span class="label">Fakultas</span><span class="colon">:</span><span class="value"><?= $fakultas ?></span></div>
                <div class="info-item"><span class="label">Prodi</span><span class="colon">:</span><span class="value"><?= $prodi ?></span></div>
                <div class="info-item"><span class="label">Hobi</span><span class="colon">:</span><span class="value"><?= $hobi ?></span></div>
                <div class="info-item"><span class="label">Skill</span><span class="colon">:</span><span class="value"><?= $skill ?></span></div>
                <div class="info-item"><span class="label">Asal</span><span class="colon">:</span><span class="value"><?= $asal ?></span></div>
                <div class="info-item"><span class="label">Motto Hidup</span><span class="colon">:</span><span class="value">"<?= $motto ?>"</span></div>
                <a href="/" class="btn btn-outline-secondary btn-custom">🏠 Halaman Utama</a>
                <a href="/beranda" class="btn btn-outline-primary btn-custom">🔙 Kembali ke Beranda</a>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener("load", () => {
            document.getElementById("loader").style.display = "none";
        });

        document.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const href = this.getAttribute('href');
                document.body.style.opacity = 0;
                setTimeout(() => {
                    window.location.href = href;
                }, 500);
            });
        });
    </script>
</body>

</html>