<?php 
include "inc.session.php"; 
include "menu.php"; 
include "../librari/inc.koneksidb.php";
?>
<html>
<head>
<title>Tampilan Data Penyakit</title>
</head>
<body>
<table width="500" border="0" cellpadding="2" cellspacing="1" bgcolor="#22B5DD">
  <tr> 
    <td colspan="2"><b>DAFTAR SEMUA PENYAKIT</b></td>
  </tr>
  <tr bgcolor="#DBEAF5"> 
    <td colspan="2">&nbsp;</td>
  </tr>
  <?php 
	$sql = "SELECT * FROM penyakit ORDER BY kd_penyakit";
	$qry = mysql_query($sql, $koneksi) 
		 or die ("SQL Error".mysql_error());
     $no=0;
	while ($data=mysql_fetch_array($qry)) {
	$no++;
  ?>
  <tr bgcolor="#FFFFFF">
    <td width="110">Kode</td>
    <td width="379"><?php echo $data['kd_penyakit']; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td valign="top">Nama Indonesia </td>
    <td><?php echo $data['nm_penyakit']; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td valign="top">Nama Latin </td>
    <td><?php echo $data['nm_latin']; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td valign="top">Definisi</td>
    <td><?php echo $data['definisi']; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td valign="top">Solusi</td>
    <td><?php echo $data['solusi']; ?></td>
  </tr>
  <tr bgcolor="#DBEAF5"> 
    <td colspan="2">&nbsp;</td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>
