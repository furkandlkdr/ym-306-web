<style type="text/css">
  <!--
  .style1 {
    color: #FFFFFF
  }
  -->
</style>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3"><a href="yonetim.php?s=musteri_ekle">Müşteri Ekle</a></td>
    <td width="17%">&nbsp;</td>
    <td width="17%">&nbsp;</td>
    <td width="28%">&nbsp;</td>
    <td width="14%">&nbsp;</td>
  </tr>
  <tr>
    <td width="8%" bgcolor="#000000"><span class="style1">Sıra</span></td>
    <td width="8%" bgcolor="#000000"><span class="style1">Müş No</span></td>
    <td width="16%" bgcolor="#000000"><span class="style1">Adı</span></td>
    <td bgcolor="#000000"><span class="style1">Soyadı</span></td>
    <td bgcolor="#000000"><span class="style1">Mail</span></td>
    <td bgcolor="#000000"><span class="style1">Adres</span></td>
    <td bgcolor="#000000"><span class="style1">İşlem</span></td>
  </tr>
  <?php
  $i = 0;
  $sql = mysqli_query($baglan, "select * from musteri order by id asc");
  while ($satir = mysqli_fetch_assoc($sql)) {
    $i++;
    if ($i % 2 == 0) {
      $rnk = '#FFFFFF';
    } else {
      $rnk = '#CCC';
    }
    ?>
    <tr bgcolor="<?php echo $rnk; ?>">
      <td><?php echo $i; ?></td>
      <td><?php echo $satir['id']; ?></td>
      <td><?php echo $satir['m_adi']; ?></td>
      <td><?php echo $satir['m_sadi']; ?></td>
      <td><?php echo $satir['m_mail']; ?></td>
      <td><?php echo $satir['m_adresi']; ?></td>
      <td>
        <a href="musteri_sil.php?sil=<?php echo $satir['id']; ?>">Sil</a>
        <a href="yonetim.php?s=musteri_guncelle&gid=<?php echo $satir['id']; ?>">Güncelle</a>
      </td>
    </tr>
    <?php
  }
  ?>
</table>