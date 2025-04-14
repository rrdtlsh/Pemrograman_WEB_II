<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    $nama = $nim = $gender = "";
    $namaError = $nimError = $genderError = "";

    if (isset($_POST["submit"])) {
        if (empty($_POST["nama"])) {
            $namaError = "nama tidak boleh kosong";
        } else {
            $nama = $_POST["nama"];
        }

        if (empty($_POST["nim"])) {
            $nimError = "nim tidak boleh kosong";
        } else {
            $nim = $_POST["nim"];
        }

        if (empty($_POST["gender"])) {
            $genderError = "jenis kelamin tidak boleh kosong";
        } else {
            $gender = $_POST["gender"];
        }
    }
    ?>

    <form action="" method="post">
        Nama:
        <input type="text" name="nama" value="<?= htmlspecialchars($nama); ?>">
        <span class="error">* <?= $namaError; ?></span>
        <br>

        NIM:
        <input type="text" name="nim" value="<?= htmlspecialchars($nim); ?>">
        <span class="error">* <?= $nimError; ?></span>
        <br>

        Jenis Kelamin:
        <span class="error">* <?php echo $genderError; ?></span><br>
        <input type="radio" name="gender" value="Laki-laki" <?= ($gender == "Laki-laki") ? "checked" : ""; ?>> Laki-laki<br>
        <input type="radio" name="gender" value="Perempuan" <?= ($gender == "Perempuan") ? "checked" : ""; ?>> Perempuan<br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST["submit"]) && empty($namaError) && empty($nimError) && empty($genderError)) {
        echo "<h1>Output: </h1>";
        echo htmlspecialchars($nama) . "<br>";
        echo htmlspecialchars($nim) . "<br>";
        echo htmlspecialchars($gender) . "<br>";
    }
    ?>
</body>

</html>