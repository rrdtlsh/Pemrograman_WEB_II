<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <form action="" method="post">
        Nilai:
        <input type="number" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"><br>

        Dari:<br>
        <?php
        $satuan = ['celcius' => 'Celcius', 'fahrenheit' => 'Fahrenheit', 'reamur' => 'Reamur', 'kelvin' => 'Kelvin'];
        foreach ($satuan as $key => $label) {
            $checked = (isset($_POST['dari']) && $_POST['dari'] === $key) ? 'checked' : '';
            echo "<input type='radio' name='dari' value='$key' $checked>$label<br>";
        }
        ?>

        Ke:<br>
        <?php
        foreach ($satuan as $key => $label) {
            $checked = (isset($_POST['ke']) && $_POST['ke'] === $key) ? 'checked' : '';
            echo "<input type='radio' name='ke' value='$key' $checked>$label<br>";
        }
        ?>

        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    function konversiSuhu($nilai, $dari, $ke)
    {
        switch ($dari) {
            case 'celcius':
                $celcius = $nilai;
                break;
            case 'fahrenheit':
                $celcius = 5 / 9 * ($nilai - 32);
                break;
            case 'reamur':
                $celcius = 5 / 4 * $nilai;
                break;
            case 'kelvin':
                $celcius = $nilai - 273;
                break;
            default:
                return null;
        }

        switch ($ke) {
            case 'celcius':
                return $celcius;
            case 'fahrenheit':
                return (9 / 5 * $celcius) + 32;
            case 'reamur':
                return 4 / 5 * $celcius;
            case 'kelvin':
                return $celcius + 273;
            default:
                return null;
        }
    }

    if (isset($_POST["konversi"]) && isset($_POST["dari"]) && isset($_POST["ke"])) {
        $nilai = floatval($_POST["nilai"]);
        $dari = $_POST["dari"];
        $ke = $_POST["ke"];
        $hasil = konversiSuhu($nilai, $dari, $ke);

        $simbol = [
            "celcius" => "&deg;C",
            "fahrenheit" => "&deg;F",
            "reamur" => "&deg;R",
            "kelvin" => "&deg;K"
        ];

        echo "<h1>Hasil Konversi: " . number_format($hasil, 1) . " " . $simbol[$ke] . "</strong></p>";
    }
    ?>
</body>

</html>