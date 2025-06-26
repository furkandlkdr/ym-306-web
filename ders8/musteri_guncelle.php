
<?php
$sql=mysqli_query($baglan,"select * from musteri where id=".$_GET['gid']);
while($satir=mysqli_fetch_assoc($sql))
{
?>
<form name="form1" method="post" action="musteri_guncelle_islem.php?gid=<?php	echo $_GET['gid'];?>">
  <table width="50%" height="176" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2"><div align="center">Müşteri Bilgileri</div></td>
    </tr>
    <tr>
      <td width="21%"><div align="right">Adı:</div></td>
      <td width="79%"><input type="text" name="m_ad" id="textfield" value="<?php echo $satir['m_adi'];?>"></td>
    </tr>
    <tr>
      <td><div align="right">Soyadı:</div></td>
      <td><input type="text" name="m_sad" id="textfield2" value="<?php echo $satir['m_sadi'];?>"></td>
    </tr>
    <tr>
      <td><div align="right">Mail:</div></td>
      <td><input type="text" name="m_mail" id="textfield3" value="<?php echo $satir['m_mail'];?>"></td>
    </tr>
    <tr>
      <td><div align="right">Adres:</div></td>
      <td><label>
        <textarea name="m_adres" id="textarea" cols="45" rows="5"><?php echo $satir['m_adresi'];?></textarea>
      </label></td>
    </tr>
    <tr>
      <td><div align="right">İl:</div></td>
      <td><label>
        <select name="m_il" id="select">
        	<option value="38"<?php if($satir['m_il']==38){?> selected <?php }?>>Kayseri</option>
            <option value="6" <?php if($satir['m_il']==6){?> selected <?php }?>>Ankara</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="Güncelle">
      </label></td>
    </tr>
  </table>
  <input type="hidden" name="gun_id" value="<?php echo $_GET['gid'];?>">
</form>
<?php }?>