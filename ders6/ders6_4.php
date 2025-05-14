<?php

$dizi = array();
$tpl = 0;

for($i = 0; $i < $_POST['boyut']; $i++) {
    $dizi[$i] = rand($_POST['deger1'], $_POST['deger2']);
    $tpl = $tpl + $dizi[$i];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Değer Ortalama - Sonuç</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f7f7f7;
        }
        
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        
        form {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Sonuçlar:</h2>
    <p>Oluşturulan dizi elemanları:</p>
    <!-- Foreach göstermedi, echo ile kendi yazdırıyor ama ben daha stabil bir program olması için yazdım. -->
    <?php foreach($dizi as $eleman): ?>
        <?php echo $eleman; ?><br>
    <?php endforeach; ?>
    
    <p>Dizi elemanlarının toplamı: <?php echo $tpl; ?></p>
    
    <input type="text" id="textfield" name="textfield" value="<?php echo $tpl; ?>">
    
    <hr>    
    <p><a href="ders6_4.html">Yeni hesaplama yapmak için tıklayın</a></p>
</body>
</html>