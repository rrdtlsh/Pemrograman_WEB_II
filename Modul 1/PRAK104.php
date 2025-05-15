<html>
<style>
    table,
    td {
        border: 1px solid black;

    }
</style>

<table>
    <tr>
        <td> <b>
                Daftar Smartphone Samsung
            </b></td>
    </tr>
    <?php
    $samsung = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");

    foreach ($samsung as $x) {
    ?> <tr>
            <td>
                <?php echo "$x"; ?>
            </td>
        </tr>

    <?php
    }
    ?>

</table>

</html>