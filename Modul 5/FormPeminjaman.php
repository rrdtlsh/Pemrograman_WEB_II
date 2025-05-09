<?php
require('./Model.php');

$result = null;
$editMode = isset($_GET['id_peminjaman']);

if ($editMode) {
    $result = GetPeminjaman($_GET['id_peminjaman']);
}

$members = Koneksi()->query("SELECT id_member, nama_member FROM member")->fetchAll(PDO::FETCH_ASSOC);
$bukus = Koneksi()->query("SELECT id_buku, judul_buku FROM buku")->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['submit'])) {
    AddPeminjaman($_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    header("Location: Peminjaman.php?pesan=tambah");
    exit();
}

if (isset($_POST['update']) && $editMode) {
    UpdatePeminjaman($_GET['id_peminjaman'], $_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    header("Location: Peminjaman.php?pesan=update");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Form Peminjaman</title>
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

        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
        }

        input:focus,
        select:focus {
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
        <h2>Form Peminjaman Buku</h2>
        <table>
            <tr>
                <td>Nama Member</td>
                <td>
                    <select name="id_member" required>
                        <option value="">-- Pilih Member --</option>
                        <?php foreach ($members as $member): ?>
                            <option value="<?= $member['id_member'] ?>"
                                <?= (isset($result) && $result['id_member'] == $member['id_member']) ? 'selected' : '' ?>>
                                <?= $member['nama_member'] ?> (ID: <?= $member['id_member'] ?>)
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>

            </tr>
            <tr>
                <td>Judul Buku</td>
                <td>
                    <select name="id_buku" required>
                        <option value="">-- Pilih Buku --</option>
                        <?php foreach ($bukus as $buku): ?>
                            <option value="<?= $buku['id_buku'] ?>"
                                <?= (isset($result) && $result['id_buku'] == $buku['id_buku']) ? 'selected' : '' ?>>
                                <?= $buku['judul_buku'] ?> (ID: <?= $buku['id_buku'] ?>)
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>

            </tr>
            <tr>
                <td>Tanggal Pinjam</td>
                <td><input type="date" name="tgl_pinjam" required value="<?= $editMode ? $result['tgl_pinjam'] : '' ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Kembali</td>
                <td><input type="date" name="tgl_kembali" required value="<?= $editMode ? $result['tgl_kembali'] : '' ?>"></td>
            </tr>
        </table>

        <button class="btn-action" type="submit" name="<?= $editMode ? 'update' : 'submit' ?>">
            <?= $editMode ? 'Update' : 'Tambah' ?>
        </button>
        <button class="btn-action" type="button" onclick="window.location.href='Peminjaman.php';">Kembali</button>
    </form>
</body>

</html>