<?php
require('./Model.php');

if (isset($_GET['id_buku'])) {
    $result = GetBuku($_GET['id_buku']);
}

if (isset($_POST['submit'])) {
    AddBuku($_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    header("Location: Buku.php?pesan=tambah");
    exit();
}

if (isset($_POST['update'])) {
    UpdateBuku($_POST['id_buku'], $_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    header("Location: Buku.php?pesan=update");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Form Buku</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fdf0f5;
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        form {
            width: 600px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        h2 {
            text-align: center;
            color: #800000;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px 0;
        }

        td:first-child {
            width: 35%;
            font-weight: bold;
            color: #4a4a4a;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
        }

        input:focus {
            outline: none;
            border-color: #a94442;
        }

        .btn-action {
            width: 100%;
            padding: 10px;
            background-color: #a00000;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .btn-action:hover {
            background-color: #800000;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <h2>Form Data Buku</h2>
        <input type="hidden" name="id_buku" value="<?= isset($_GET['id_buku']) ? htmlspecialchars($_GET['id_buku']) : ''; ?>">

        <table>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul_buku" required value="<?= isset($result) ? htmlspecialchars($result['judul_buku']) : ''; ?>"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis" required value="<?= isset($result) ? htmlspecialchars($result['penulis']) : ''; ?>"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" required value="<?= isset($result) ? htmlspecialchars($result['penerbit']) : ''; ?>"></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="number" name="tahun_terbit" min="1000" max="2099" required
                        value="<?= isset($result) ? htmlspecialchars($result['tahun_terbit']) : ''; ?>">
                </td>
            </tr>
        </table>

        <?php if (isset($_GET['id_buku'])): ?>
            <button class="btn-action" type="submit" name="update">Update</button>
        <?php else: ?>
            <button class="btn-action" type="submit" name="submit">Tambah</button>
        <?php endif; ?>

        <button class="btn-action" type="button" onclick="window.location.href='Buku.php';">Kembali</button>
    </form>
</body>

</html>