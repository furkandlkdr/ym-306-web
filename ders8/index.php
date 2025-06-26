      

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="log_kontrol.php">
  <table width="460" height="176" border="0" align="center" cellpadding="0" cellspacing="0" style="border:1px solid #000000 ">
    <tr>
      <td colspan="2"><div align="center">KULLANICI GİRİŞİ</div></td>
    </tr>
    <tr>
      <td width="265"><div align="right">Kullanıcı Adı :</div></td>
      <td width="247"><input type="text" name="kad" id="textfield" /></td>
    </tr>
    <tr>
      <td><div align="right">Şifre:</div></td>
      <td><input type="password" name="ksifre" id="textfield2" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" style="color:#FF0000;font-weight:bold;">
	   <?php
	   
			if(isset($_GET['h'])==1)//empty
			{
				echo "Kullanıcı adı veya şifre yanlış girildi !";	
			}
		?>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="GİRİŞ" style="border:0px;background-color:#CCCCCC;color:#000000;font-weight:bold;font-size:16px; padding:4px;cursor:pointer;" /></td>
    </tr>
  </table>
</form>
</body>
</html>
