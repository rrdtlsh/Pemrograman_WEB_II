<?php
$jari_jari = 4.2;
$tinggi = 5.4;
$phi = 3.14159265359;

$volume = (1 / 3) * $phi * pow($jari_jari, 2) * $tinggi;

echo number_format($volume, 3) . " m3\n";
