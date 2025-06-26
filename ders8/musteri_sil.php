<?php
include("baglanti.php");


mysqli_query($baglan,"delete from musteri where id=".$_GET['sil']);

header('location:yonetim.php?s=musteri');

?>