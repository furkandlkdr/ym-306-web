<?php

include("baglanti.php");

$sql = "update musteri set m_adi='" . $_POST['m_ad'] . "', " .
	" m_sadi='" . $_POST['m_sad'] . "', m_mail='" . $_POST['m_mail'] . "'," .
	" m_adresi='" . $_POST['m_adres'] . "', m_il='" . $_POST['m_il'] . "' " .
	" where id=" . $_GET['gid'];
mysqli_query($baglan, $sql);

header('location:yonetim.php?s=musteri');


?>