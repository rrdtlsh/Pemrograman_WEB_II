<?php
function Koneksi()
{
    try {
        $pdo_conn = new PDO(
            'mysql:host=localhost;dbname=prak501',
            'root',
            '',
            array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true)
        );
    } catch (PDOException $e) {
        print "Koneksi atau query sedang bermasalah: " . $e->getMessage() . "<br/>";
        die();
    }
    return $pdo_conn;
}
