<?php
include "inc.session.php";
include "menu.php";
include "../librari/inc.koneksidb.php";
?>
<html>
<head>
<title>Tampilan Data Gejala</title>
</head>
<body>
<table width="450" border="0" cellpadding="2" cellspacing="1" bgcolor="#DBEAF5">
  <tr bgcolor="#33FFFF">
    <td colspan="3" bgcolor="#77B6D0"><b>DAFTAR SEMUA GEJALA</b></td>
  </tr>
  <tr>
    <td width="24"><b>No</b></td>
    <td width="315"><b>Nama Gejala</b></td>
    <td width="95" align="center"><b>Pilihan</b></td>
  </tr>
  <?php
	$sql = "SELECT * FROM gejala ORDER BY kd_gejala";
	$qry = mysql_query($sql, $koneksi)
		 or die ("SQL Error".mysql_error());
	while ($data=mysql_fetch_array($qry)) {
	$no++;
  ?>
  <tr bgcolor="#FFFFFF">
    <td><?php echo $no; ?></td>
    <td><?php echo $data['nm_gejala']; ?></td>
    <td align="center">
	  <a href="GejalaEditFm.php?kdubah=<?php echo $data['kd_gejala']; ?>" target="_self">Ubah</a>
      | <a href="GejalaHapus.php?kdhapus=<?php echo $data['kd_gejala']; ?>" target="_self">Hapus</a></td>
  </tr>
  <?php
  }
  ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><a href="GejalaAddFm.php">Tambah</a></td>
  </tr>
</table>
</body>
</html>
