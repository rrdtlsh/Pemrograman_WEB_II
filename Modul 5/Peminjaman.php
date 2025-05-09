<?php
require('./Model.php');
if (isset($_GET['id_peminjaman'])) {
    DeletePeminjaman($_GET['id_peminjaman']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman</title>
    <style>
        :root {
            --header-bg-color: #800000;
            --button-bg-color: #800000;
            --button-hover-color: #5c0000;
            --main-bg-color: #f8f6f4;
            --text-color: #ffffff;
            --table-bg-color: #fff;
            --table-border-color: #ddd;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--main-bg-color);
            margin: 0;
            padding: 0;
            color: #333;
        }

        table {
            width: 90%;
            margin: 40px auto;
            border-collapse: collapse;
            background-color: var(--table-bg-color);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid var(--table-border-color);
        }

        th {
            background-color: var(--header-bg-color);
            color: var(--text-color);
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f0f7fa;
        }

        .action-btns {
            text-align: center;
        }

        .button {
            display: inline-block;
            padding: 8px 15px;
            color: var(--text-color);
            background-color: var(--button-bg-color);
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
            font-size: 16px;
            margin: 5px;
        }

        .button:hover {
            background-color: var(--button-hover-color);
        }

        .footer {
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: var(--header-bg-color);
        }

        header {
            background-color: var(--header-bg-color);
            color: var(--text-color);
            padding: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        header h2 {
            margin: 0;
            font-size: 2rem;
        }

        @media (max-width: 600px) {
            table {
                width: 95%;
            }

            th,
            td {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <?php if (isset($_GET['pesan'])): ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let pesan = "<?= $_GET['pesan'] ?>";
                if (pesan === "tambah") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses',
                        text: 'Data berhasil ditambahkan!',
                        timer: 2000,
                        showConfirmButton: false
                    });
                } else if (pesan === "update") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses',
                        text: 'Data berhasil diperbarui!',
                        timer: 2000,
                        showConfirmButton: false
                    });
                } else if (pesan === "hapus") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses',
                        text: 'Data berhasil dihapus!',
                        timer: 2000,
                        showConfirmButton: false
                    });
                }
            });
        </script>
    <?php endif; ?>

    <header>
        <h2>Data Peminjaman Perpustakaan</h2>
    </header>
    <table>
        <thead>
            <tr>
                <th>Id Peminjaman</th>
                <th>Nama Member</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Edit/Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?= GetAllData("peminjaman") ?>
        </tbody>
    </table>
    <div class="footer">
        <a href="FormPeminjaman.php" class="button">Tambah Data</a>
        <a href="index.php" class="button">Kembali ke Halaman Utama</a>
    </div>
</body>

</html>