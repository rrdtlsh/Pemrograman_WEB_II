<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="" method="post">
        <label for="bawah">Batas Bawah :</label>
        <input type="text" name="bawah" value="<?= $_POST['bawah'] ?? '' ?>"> </br>
        <label for="atas">Batas Atas :</label>
        <input type="text" name="atas" value="<?= $_POST['atas'] ?? '' ?>"> </br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <br>

    <?php
    if (isset($_POST['submit'])) {
        $i = (int)$_POST['bawah'];
        $j = (int)$_POST['atas'];

        do {
            if (($i + 7) % 5 == 0) {
                echo "<span style='margin-right:5px;'><img style='width: 20px;' src='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png' alt=''></span>";
            } else {
                echo "<span style='margin-right:5px;'>$i</span>";
            }
            $i++;
        } while ($i <= $j);
    }
    ?>
</body>

</html>