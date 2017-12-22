<?php
include "librari/inc.koneksidb.php";
?>
<html>
<head>
<title>Tampilan Data Penyakit</title>
</head>
<body>
<table width="500" border="0" cellpadding="2" cellspacing="1" bgcolor="#22B5DD">
  <tr>
    <td colspan="4"><b>DAFTAR SEMUA PENYAKIT</b></td>
  </tr>
  <tr bgcolor="#DBEAF5">
    <td width="24"><b>No</b></td>
    <td width="185"><b>Nama Penyakit</b></td>
    <td width="205"><b>Nama Latin </b></td>
    <td width="65" align="center"><strong>Pilih</strong></td>
  </tr>
  <?php
	$sql = "SELECT * FROM penyakit ORDER BY kd_penyakit";
	$qry = mysql_query($sql, $koneksi)
		 or die ("SQL Error".mysql_error());
 $no = 0;
  while ($data=mysql_fetch_array($qry)) {
	$no++;
  ?>
  <tr bgcolor="#FFFFFF">
    <td><?php echo $no; ?></td>
    <td><?php echo $data['nm_penyakit']; ?></td>
    <td><?php echo $data['nm_latin']; ?></td>
    <td align="center"><a href="?page=dafgejala&kdsakit=<?= $data['kd_penyakit'];?>">Lihat</a></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
</html>
