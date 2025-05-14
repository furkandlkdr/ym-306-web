<?php
include("guvenlik.php"); // Güvenlik kontrolü için gerekli dosya ekleniyor

if (isset($_GET["s"])) {
    $sayfa = $_GET["s"];
} else {
    $sayfa = "anasayfa";
}


// if ($_SESSION["giris"] != true) { // Eğer oturum açılmamışsa
//     header('location: index.php'); // Giriş sayfasına yönlendiriliyor
//     exit();
// }

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background: #2d3e50;
            color: #fff;
            padding: 18px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(44,62,80,0.10);
        }
        .navbar .panel-title {
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 1px;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 1rem;
            padding: 6px 14px;
            border-radius: 4px;
            transition: background 0.2s, color 0.2s;
        }
        .navbar a:hover, .navbar .active {
            background: #34495e;
            color: #ffd700;
        }
        .navbar .logout-btn {
            background: #e74c3c;
            color: #fff;
            border: none;
            padding: 8px 18px;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s;
            text-decoration: none;
            margin-left: 18px;
        }
        .navbar .logout-btn:hover {
            background: #c0392b;
        }
        .container {
            max-width: 950px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(44,62,80,0.10);
            padding: 40px 44px 36px 44px;
        }
        .dashboard {
            display: flex;
            gap: 32px;
            flex-wrap: wrap;
            margin-bottom: 32px;
            justify-content: space-between;
        }
        .center {
            display: flex;
            align-items: center;
        }
        .card {
            flex: 1 1 200px;
            background: linear-gradient(135deg, #e3eafc 0%, #f8fafc 100%);
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(44,62,80,0.06);
            padding: 28px 18px;
            text-align: center;
            margin-bottom: 16px;
            transition: box-shadow 0.2s, transform 0.2s;
        }
        .card:hover {
            box-shadow: 0 6px 18px rgba(44,62,80,0.13);
            transform: translateY(-3px) scale(1.03);
        }
        .card h2 {
            font-size: 2.3rem;
            color: #2d3e50;
            margin: 0 0 8px 0;
        }
        .card p {
            color: #7b8a99;
            font-size: 1.1rem;
            margin: 0;
        }
        .table-section {
            margin-top: 32px;
        }
        .table-section h3 {
            margin-bottom: 16px;
            color: #2d3e50;
            font-size: 1.2rem;
            letter-spacing: 1px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 1px 6px rgba(44,62,80,0.06);
        }
        th, td {
            padding: 13px 12px;
            border-bottom: 1px solid #eaeaea;
            text-align: left;
        }
        th {
            background: #f4f6f8;
            color: #2d3e50;
            font-weight: 600;
        }
        tr:last-child td {
            border-bottom: none;
        }
        tr:hover td {
            background: #f7faff;
        }
        @media (max-width: 900px) {
            .container { padding: 18px; }
            .dashboard { flex-direction: column; gap: 14px; }
        }
        @media (max-width: 600px) {
            .container { padding: 6px; }
            .navbar { flex-direction: column; gap: 10px; padding: 12px 8px; }
            .dashboard { flex-direction: column; gap: 10px; }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <span class="panel-title">Yönetim Paneli</span>
        <div class="center"><a href="yonetim.php">Ana Sayfa</a></div>
        <div class="center"><a href="yonetim.php?s=musteri">Musteri</a></div>
        <div class="center"><a href="yonetim.php?s=kategori">Kategori</a></div>
        <div class="center"><a href="yonetim.php">Ürün</a></div>
        <div class="center"><a href="yonetim.php">Satış</a></div>
        <a href="cikis.php" class="logout-btn">Çıkış Yap</a>
    </div>
    <div class="container">
        <div class="dashboard">
            <div class="center">
                <?php include($sayfa . ".php"); ?>
            </div>
        </div>
    </div>
</body>
</html>