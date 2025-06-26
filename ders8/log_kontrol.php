<?php
session_start();

if ($_POST['kad'] == 'a' && $_POST['ksifre'] == 'a')//dogru
{
	$_SESSION['giris'] = "ok";
	header('location:yonetim.php');
} else//yanlış
{
	header('location:index.php?h=1');
}


?>