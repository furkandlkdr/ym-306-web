<?php

$baglan = mysqli_connect("localhost", "root", "");
mysqli_select_db($baglan, "kayu");


if (!$baglan) {
    echo "Veri Baglanti Hatasi!!!!!!";
    echo mysqli_error();
    exit;
}
mysqli_query($baglan, "SET NAMES 'utf-8'");
mysqli_query($baglan, "SET NAMES 'utf8'");
mysqli_query($baglan, "SET CHARACTER SET 'utf8'");
mysqli_query($baglan, "SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
date_default_timezone_set('Europe/Istanbul');
?>