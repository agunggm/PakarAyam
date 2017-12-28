<?php 
include "inc.session.php"; 
include "menu.php"; 
include "../librari/inc.koneksidb.php";
include "../librari/inc.kodeauto.php";
?>
<html>
<head>
<title>Masukan Data Penyakit</title>
</head>
<body>
<form name="form1" method="post" action="PenyakitAddSim.php">
<table width="450" border="0" cellpadding="2" cellspacing="1" bgcolor="#DBEAF5">
<tr> 
  <td colspan="2" bgcolor="#77B6D0"><b>MASUKAN DATA PENYAKIT</b></td>
</tr>
<tr bgcolor="#FFFFFF"> 
  <td>Kode</td>
  <td><input name="TxtKode" type="text"  maxlength="4" size="6" value="<?php echo kdauto("penyakit","P"); ?>" disabled="disabled">
	  <input name="TxtKodeH" type="hidden" value="<?php echo kdauto("penyakit","P"); ?>"></td>
</tr>
<tr bgcolor="#FFFFFF"> 
  <td width="77">Penyakit</td>
  <td width="361"><input name="TxtPenyakit" type="text" value="" size="45" maxlength="100"></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td>Nama Latin </td>
  <td><input name="TxtNmLatin" type="text" value="" size="45" maxlength="100"></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td>Definisi</td>
  <td><textarea name="TxtDefinisi" cols="40" rows="4"></textarea></td>
</tr>
<tr bgcolor="#FFFFFF">
  <td>Solusi</td>
  <td><textarea name="TxtSolusi" cols="40" rows="4"></textarea></td>
</tr>
<tr bgcolor="#FFFFFF"> 
  <td>&nbsp;</td>
  <td><input type="submit" name="Submit" value="Simpan"></td>
</tr>
</table>
</form>
</body>
</html>
