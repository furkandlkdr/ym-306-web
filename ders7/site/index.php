<?php

// echo $_GET["a"]."-".$_GET["b"]."-".$_GET["c"];
// Burada $_GET ile url'den gelen değişkenleri alıyoruz

// Böyle bir değişken var mı? Diye bakmak için isset() fonksiyonunu kullanıyoruz
if (isset($_GET["hata"]) == 1) {
    $msg = "Kullanıcı adı veya şifre hatalı";
}
// else {
//     echo "yok";
// }

// Böyle bir değişken yok mu? Diye bakmak için empty() fonksiyonunu kullanıyoruz
// if (empty($_GET["hata"])) {
//     echo "hata yok";
// } else {
//     echo "hata var";
// }

?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Girişi</title>
    <!-- Eğer sunucumdaki ana sayfayı ve tree'yi kimse görmesin istiyorsak boş index.html atabiliriz. -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            margin-bottom: 25px;
            text-align: center;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        div {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input:focus {
            outline: none;
            border-color: #4a90e2;
            box-shadow: 0 0 5px rgba(74, 144, 226, 0.3);
        }

        button {
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 12px 0;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        button:hover {
            background-color: #3a7bc8;
        }
    </style>
</head>

<body>
    <!-- Bu girişleri dreamveawer ile, table kullanarak yaptı. O nedenle css'i de eliyle verdi. Ben kendim yaptım -->
    <!-- Bir sayfadan bir sayfaya veri göndereceğin zaman post kullanıyorsun -->
    <h1>Kullanıcı Girişi</h1>
    <form action="log_kontrol.php" method="post">
        <div>
            <label for="username">Kullanıcı Adı:</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <?php
            echo isset($msg) ? "<p style='color:red;'>$msg</p>" : "";
            ?>
        </div>
        <div>
            <button type="submit">Giriş Yap</button>
        </div>
    </form>
</body>

</html>