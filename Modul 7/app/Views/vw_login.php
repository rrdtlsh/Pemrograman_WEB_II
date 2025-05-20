<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            background: linear-gradient(135deg, #fcefee, #f8e1f4, #d6f4f4, #b2f0e8, #e0f7fa);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            display: flex;
            align-items: center;
            justify-content: center;
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

        .form-signin {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 2.5rem;
            border-radius: 1rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            max-width: 350px;
            width: 100%;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-signin h1 {
            margin-bottom: 1.5rem;
            color: #00796b;
        }

        .form-signin input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1em;
        }

        .form-signin button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-signin button:hover {
            background-color: #0056b3;
        }

        .form-signin .btn-secondary {
            background-color: #6c757d;
        }

        .form-signin .btn-secondary:hover {
            background-color: #5a6268;
        }

        .alert {
            padding: 10px;
            background-color: #f9edbe;
            color: #856404;
            border: 1px solid #ffeeba;
            border-radius: 6px;
            margin-bottom: 1rem;
        }

        .text-muted {
            font-size: 0.9em;
            color: #6c757d;
            margin-top: 2rem;
        }
    </style>
</head>

<body>

    <main class="form-signin">
        <h1>Login</h1>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert">
                <?= session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>

        <form method="post" action="<?= base_url(); ?>/login/process">
            <?= csrf_field(); ?>
            <input type="text" name="username" id="username" placeholder="Username" required autofocus>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <a href="<?= base_url(); ?>" style="text-decoration: none;">
            <button class="btn-secondary">← Kembali ke Beranda</button>
        </a>

        <p class="text-muted">&copy; Perpustakaan Minimalis</p>
    </main>

</body>

</html>