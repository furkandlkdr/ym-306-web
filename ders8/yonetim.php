<?php
session_start();

include("guvenlik.php");
include("baglanti.php");


if(isset($_GET['s']))
{
	$sayfa=$_GET['s'];
}
else
{
	$sayfa="orta";		
}
				
				
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6"><div align="center">ADMİN PANELİ</div></td>
  </tr>
  <tr>
    <td width="9%"><div align="center"><a href="yonetim.php">Ana Sayfa</a></div></td>
    <td width="21%"><div align="center"><a href="yonetim.php?s=musteri">Müşteri</a></div></td>
    <td width="23%"><div align="center"><a href="yonetim.php?s=kategori">Kategori</a> </div></td>
    <td width="21%"><div align="center">Ürün</div></td>
    <td width="17%"><div align="center">Satış</div></td>
    <td width="9%"><div align="center"><a href="cikis.php">Çıkış</a></div></td>
  </tr>
  
   <tr>
    <td colspan="6">
    <div align="center">
			<?php include($sayfa.".php");?>
    </div>
    </td>
  </tr>
</table>
</body>
</html>
