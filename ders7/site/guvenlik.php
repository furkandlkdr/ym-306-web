<?php
session_start();
if ($_SESSION["giris"] != true) { // Eğer oturum açılmamışsa
    header('location: index.php'); // Giriş sayfasına yönlendiriliyor
    exit();
}
?>