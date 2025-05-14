<?php /*
if ($_POST["username"] == "a" && $_POST["password"] == "a") { // Doğru kullanıcı adı ve şifre
    header('location: yonetim.php');
} else { // Yanlış kullanıcı adı veya şifre
    // header('location: index.php?a=1&b=true&c=akif');
    // Url'nin yanına ? koyarak değişken ekliyoruz, değişkenin ismi a, değeri 1
    // & koyarak birden fazla değişken ekleyebiliyoruz

    header('location: index.php?hata=1');
}
    */
?>

<?php
session_start(); // Oturum başlatılıyor
// Oturum başlatmak için session_start() fonksiyonu kullanılır, bunu en başta yazmak lazım.
if ($_POST["username"] == "a" && $_POST["password"] == "a") { 
    $_SESSION["giris"] = true; // Oturum değişkeni tanımlanıyor
    // Bu değişkene projemiz boyunca erişebiliriz, silmedikçe üstüne yazmadıkça uzun süre kullanabiliriz
    header('location: yonetim.php');
} else { // Yanlış kullanıcı adı veya şifre
    header('location: index.php?hata=1');
}
?>