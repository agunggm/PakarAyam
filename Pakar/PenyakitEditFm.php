<?php
include "inc.session.php";
include "menu.php";
include "../librari/koneksi.php";
$kdubah = $_GET['kdubah'];
$sql = mysql_query("select * from penyakit where kd_penyakit = '$kdubah'");
$data = mysql_fetch_array($sql);
?>
<html>
<head>
<title>EDIT PENYAKIT</title>
</head>
<body>
<form method="post" action="PenyakitEditSim.php">
<table width="450" border="0" cellpadding="2" cellspacing="1" bgcolor="#DBEAF5">
<tr>
  <td colspan="2" bgcolor="#77B6D0"><b>UBAH DATA PENYAKIT</b></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td>Kode</td>
  <td><input name="kode" type="text"  maxlength="4" size="6" value="<?php echo $data['kd_penyakit']?>" readonly></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td width="77">Penyakit</td>
  <td width="361"><input name="penyakit" type="text" value="<?php echo $data['nm_penyakit']?>" size="45" maxlength="100"></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td>Nama Latin </td>
  <td><input name="latin" type="text" value="<?php echo $data['nm_latin']?>" size="45" maxlength="100"></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td>Definisi</td>
  <td><textarea name="definisi" cols="40" rows="4"><?php echo $data['definisi']?></textarea></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td>Solusi</td>
  <td><textarea name="solusi" cols="40" rows="4"><?php echo $data['solusi']?></textarea></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td>&nbsp;</td>
  <td><input type="submit" value="Simpan"></td>
</tr>
</table>
</form>
</body>
</html>
