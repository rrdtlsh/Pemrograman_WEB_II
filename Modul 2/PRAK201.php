<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $nama1 = '';
    $nama2 = '';
    $nama3 = '';
    $hasil = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama1 = $_POST['nama1'];
        $nama2 = $_POST['nama2'];
        $nama3 = $_POST['nama3'];

        // Urutkan manual dengan if
        if ($nama1 <= $nama2 && $nama2 <= $nama3) {
            $hasil = "$nama1<br>$nama2<br>$nama3";
        } elseif ($nama1 <= $nama3 && $nama3 <= $nama2) {
            $hasil = "$nama1<br>$nama3<br>$nama2";
        } elseif ($nama2 <= $nama1 && $nama1 <= $nama3) {
            $hasil = "$nama2<br>$nama1<br>$nama3";
        } elseif ($nama2 <= $nama3 && $nama3 <= $nama1) {
            $hasil = "$nama2<br>$nama3<br>$nama1";
        } elseif ($nama3 <= $nama1 && $nama1 <= $nama2) {
            $hasil = "$nama3<br>$nama1<br>$nama2";
        } else {
            $hasil = "$nama3<br>$nama2<br>$nama1";
        }

        $hasil = "Nama-nama setelah diurutkan secara alfabetikal: <br>" . $hasil;
    }
    ?>
    <form action="" method="post">
        Nama 1 : <input type="text" name="nama1" value="<?php echo $nama1; ?>"> <br>
        Nama 2 : <input type="text" name="nama2" value="<?php echo $nama2; ?>"><br>
        Nama 3 : <input type="text" name="nama3" value="<?php echo $nama3; ?>"><br>
        <input type="submit" name="submit" value="urutkan">
    </form>

    <?php echo $hasil; ?>
</body>

</html>