<?php
date_default_timezone_set('Asia/Makassar');
require('./Model.php');

$result = null;
$editMode = isset($_GET['id_member']);

if ($editMode) {
    $result = GetMember($_GET['id_member']);
}

if (isset($_POST['submit'])) {
    $tgl_daftar = date('Y-m-d H:i:s');
    AddMember(
        $_POST['nama_member'],
        $_POST['nomor_member'],
        $_POST['alamat'],
        $tgl_daftar,
        $_POST['tgl_terakhir_bayar']
    );
    header("Location: Member.php?pesan=tambah");
    exit();
}

if (isset($_POST['update']) && $editMode) {
    $tgl_daftar = $_POST['tgl_mendaftar'];
    UpdateMember(
        $_GET['id_member'],
        $_POST['nama_member'],
        $_POST['nomor_member'],
        $_POST['alamat'],
        $tgl_daftar,
        $_POST['tgl_terakhir_bayar']
    );
    header("Location: Member.php?pesan=update");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Member</title>
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

        input[type="text"],
        input[type="date"],
        input[type="datetime-local"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #a94442;
        }

        textarea {
            resize: vertical;
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
        <h2>Form Data Member</h2>
        <table>
            <tr>
                <td>Nama Member</td>
                <td>
                    <input type="text" name="nama_member" required value="<?= $editMode ? htmlspecialchars($result['nama_member']) : '' ?>">
                </td>
            </tr>
            <tr>
                <td>Nomor Member</td>
                <td>
                    <input type="text" name="nomor_member" required value="<?= $editMode ? htmlspecialchars($result['nomor_member']) : '' ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" rows="4" required><?= $editMode ? htmlspecialchars($result['alamat']) : '' ?></textarea>
                </td>
            </tr>

            <?php if ($editMode): ?>
                <tr>
                    <td>Tanggal Daftar</td>
                    <td>
                        <input type="text" value="<?= date('d-m-Y H:i:s', strtotime($result['tgl_mendaftar'])) ?>" readonly>
                        <input type="hidden" name="tgl_mendaftar" value="<?= htmlspecialchars($result['tgl_mendaftar']) ?>">
                    </td>
                </tr>
            <?php endif; ?>

            <tr>
                <td>Tanggal Terakhir Bayar</td>
                <td>
                    <input type="date" name="tgl_terakhir_bayar" required value="<?= $editMode ? $result['tgl_terakhir_bayar'] : date('Y-m-d') ?>">
                </td>
            </tr>
        </table>

        <button class="btn-action" type="submit" name="<?= $editMode ? 'update' : 'submit' ?>">
            <?= $editMode ? 'Update' : 'Tambah' ?>
        </button>

        <button class="btn-action" type="button" onclick="window.location.href='Member.php';">Kembali</button>
    </form>
</body>

</html>