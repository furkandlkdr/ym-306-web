<form name="form1" method="post" action="musteri_ekle_islem.php">
  <table width="50%" height="176" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2"><div align="center">Müşteri Bilgileri</div></td>
    </tr>
    <tr>
      <td width="21%"><div align="right">Adı:</div></td>
      <td width="79%"><input type="text" name="m_ad" id="textfield"></td>
    </tr>
    <tr>
      <td><div align="right">Soyadı:</div></td>
      <td><input type="text" name="m_sad" id="textfield2"></td>
    </tr>
    <tr>
      <td><div align="right">Mail:</div></td>
      <td><input type="text" name="m_mail" id="textfield3"></td>
    </tr>
    <tr>
      <td><div align="right">Adres:</div></td>
      <td><label>
        <textarea name="m_adres" id="textarea" cols="45" rows="5"></textarea>
      </label></td>
    </tr>
    <tr>
      <td><div align="right">İl:</div></td>
      <td><label>
        <select name="m_il" id="select">
        	<option value="38">Kayseri</option>
            <option value="6">Ankara</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="EKLE">
      </label></td>
    </tr>
  </table>
</form>
