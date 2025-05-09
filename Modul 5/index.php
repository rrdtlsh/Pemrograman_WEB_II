<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Perpustakaan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f6f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        header {
            background-color: #800000;
            color: white;
            padding: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h2 {
            margin: 0;
            font-size: 2rem;
        }

        main {
            padding: 50px 20px;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 60%;
        }

        td {
            padding: 20px;
            border: 1px solid #800000;
            background-color: #fff0f0;
        }

        a {
            text-decoration: none;
            color: #800000;
            font-weight: bold;
            font-size: 1.1rem;
            transition: background-color 0.3s, color 0.3s;
        }

        a:hover {
            color: white;
            background-color: #800000;
            padding: 8px 16px;
            border-radius: 6px;
        }

        @media (max-width: 600px) {
            table {
                width: 90%;
            }

            td {
                padding: 15px;
            }
        }
    </style>
</head>

<body>
    <header>
        <h2>Data Perpustakaan</h2>
    </header>
    <main>
        <table>
            <tr>
                <td><a href="Member.php">Data Member</a></td>
                <td><a href="Buku.php">Data Buku</a></td>
                <td><a href="Peminjaman.php">Data Peminjaman</a></td>
            </tr>
        </table>
    </main>
</body>

</html>