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
        <input type="text" name="kata">
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <?php if (isset($_POST['submit'])) : ?>
        <?php
        $kata = $_POST['kata'];
        echo "<p><b>Input:</b><br>$kata</p>";
        echo "<p><b>Output:</b><br>";
        $arr = str_split($kata);
        for ($i = 1; $i <= count($arr); $i = $i + 1) {
            for ($j = 1; $j <= count($arr); $j = $j + 1) {
                if ($j == 1) {
                    echo strtoupper($arr[$i - 1]);
                } else {
                    echo strtolower($arr[$i - 1]);
                }
            }
        }
        ?>
    <?php endif; ?>
</body>

</html>