<?php
include "librari/inc.koneksidb.php";
?>
<html>
<head>
<title>Form Masukan Data Pasien</title>
</head>
<body>
<form action="?page=daftarsim" method="post" name="form1" target="_self">
  <table width="400" border="0" cellpadding="2" cellspacing="1" bgcolor="#DBEAF5">
    <tr>
      <td colspan="2"><b>MASUKAN DATA PASIEN</b></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>Nama</td>
      <td>
        <input name="TxtNama" type="text"  size="35" maxlength="60"></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>Kelamin</td>
      <td>
        <input type="radio" name="RbKelamin" value="P" checked>
        Pria
        <input type="radio" name="RbKelamin" value="W">
        Wanita</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>Alamat</td>
      <td>
        <input name="TxtAlamat" type="text"  size="35" maxlength="60"></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="76">Pekerjaan</td>
      <td width="312">
        <input name="TxtPekerjaan" type="text"  size="35" maxlength="60"></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>&nbsp;</td>
      <td>
        <input type="submit" name="Submit" value="Daftar"></td>
    </tr>
  </table>
</form>
</body>
</html>
