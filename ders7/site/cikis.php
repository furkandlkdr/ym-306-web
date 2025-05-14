<?php
session_start();

UNSET($_SESSION["giris"]); // Oturum değişkenini unset ile sileriz
header('location: index.php'); // Giriş sayfasına yönlendiriliyor
?>