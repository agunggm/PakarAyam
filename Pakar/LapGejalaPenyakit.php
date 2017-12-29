<?php 
include "inc.session.php"; 
include "menu.php"; 
include "../librari/inc.koneksidb.php";
?>
<html>
<head>
<title>Halaman Buat Relasi Gejala Penyakit</title>
</head>
<body>
<form name="form1" method="post" action="LapGejalaPenyakit2.php">
<table width="400" border="0" cellpadding="2" cellspacing="1" bgcolor="#99FFFF">
<tr>
  <td colspan="2" bgcolor="#22B5DD"><b>TAMPILKAN GEJALA PER PENYAKIT </b></td>
  </tr>
<tr>
  <td width="93" bgcolor="#DBEAF5"><b>Penyakit :</b></td>
  <td width="346" bgcolor="#DBEAF5">
   <select name="CmbPenyakit">
    <option value="NULL">[ Daftar Penyakit ]</option>
    <?php 
	$sqlp = "SELECT * FROM penyakit ORDER BY kd_penyakit";
	$qryp = mysql_query($sqlp, $koneksi) 
		    or die ("SQL Error: ".mysql_error());
	while ($datap=mysql_fetch_array($qryp)) {
		if ($datap['kd_penyakit']==$kdsakit) {
			$cek ="selected";
		}
		else {
			$cek ="";
		}
		echo "<option value='$datap[kd_penyakit]' $cek>
			  $datap[nm_penyakit] ($datap[kd_penyakit])</option>";
	}
  ?>
  </select></td>
</tr>
<tr bgcolor="#DBEAF5"> 
  <td align="center" bgcolor="#DBEAF5">&nbsp;</td>
  <td bgcolor="#DBEAF5"><input type="submit" name="Submit" value="Tampil"></td>
</tr>
</table>
</form>
</body>
</html>
