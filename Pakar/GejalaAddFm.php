<?php 
include "inc.session.php"; 
include "menu.php"; 
include "../librari/inc.koneksidb.php";
include "../librari/inc.kodeauto.php";
?>
<html>
<head>
<title>Masukan Data Gejala</title>
</head>
<body>
<form name="form1" method="post" action="GejalaAddSim.php">
  <table width="400" border="0" cellpadding="2" cellspacing="1" bgcolor="#DBEAF5">
    <tr> 
      <td colspan="2" bgcolor="#77B6D0"><b>MASUKAN GEJALA PENYAKIT</b></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td>Kode</td>
      <td><input name="TxtKode" type="text"  maxlength="4" size="6" value="<? echo kdauto("gejala","G"); ?>" disabled="disabled">
	      <input name="TxtKodeH" type="hidden" value="<? echo kdauto("gejala","G"); ?>"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td width="77">Gejala</td>
      <td width="361"><textarea name="TxtGejala" cols="35" rows="3"><?= $TxtGejala; ?></textarea></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Simpan"></td>
    </tr>
  </table>
</form>
</body>
</html>
