<?php
include("baglanti.php");



$tarih = date("y-m-d");

$sql = "insert into musteri values(NULL,'" . $_POST['m_ad'] . "','" . $_POST['m_sad'] . "', '" . $_POST['m_mail'] . "', '" . $_POST['m_adres'] . "' ,'" . $_POST['m_il'] . "','" . $tarih . "' )";

mysqli_query($baglan, $sql) or die(mysqli_error($baglan));

header('location:yonetim.php?s=musteri');


?>