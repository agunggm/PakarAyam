<?php
include "librari/inc.koneksidb.php";

$NOIP = $_SERVER['REMOTE_ADDR'];
$sql = "SELECT analisa_hasil.*, penyakit.*
		FROM analisa_hasil,penyakit
		WHERE penyakit.kd_penyakit=analisa_hasil.kd_penyakit
		AND analisa_hasil.noip='$NOIP'
		ORDER BY analisa_hasil.id DESC LIMIT 1";
$qry = mysql_query($sql, $koneksi)
	   or die ("Query Hasil salam".mysql_error());
$data= mysql_fetch_assoc($qry);
if ($data['kelamin']=="P") {
	$kelamin = "Pria";
}
else {
	$kelamin = "Wanita";
}
?>
<html>
<head>
<title>Hasil Analisa Pasien</title>
</head>
<body>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#DBEAF5">
  <tr align="center">
    <td colspan="2" bgcolor="#22B5DD"><b>HASIL ANALISA PENYAKIT AYAM</b></td>
  </tr>
  <tr>
    <td colspan="2"><b>DATA PASIEN :</b></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="86">Nama</td>
    <td width="689"><?php echo $data['nama']; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td>Kelamin</td>
    <td><?php echo $kelamin; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td>Alamat</td>
    <td><?php echo $data['alamat']; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td>Pekerjaan</td>
    <td><?php echo $data['pekerjaan']; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><b>HASIL ANALISA TERAKHIR :</b></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td>Penyakit</td>
    <td><?php echo $data['nm_penyakit']; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td valign="top">Nama Latin</td>
    <td><?php echo $data['nm_latin']; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td valign="top">Gejala</td>
    <td>
      <?php
		$sql_gejala = "SELECT gejala.* FROM gejala,relasi
						WHERE gejala.kd_gejala=relasi.kd_gejala
						AND relasi.kd_penyakit='$data[kd_penyakit]'";
		$qry_gejala = mysql_query($sql_gejala, $koneksi);
		$i=0;
		while ($hsl_gejala=mysql_fetch_array($qry_gejala)) {
		$i++;
			echo "$i . $hsl_gejala[nm_gejala] <br>";
		}
		?>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td valign="top">Keterangan</td>
    <td><?php echo $data['definisi']; ?></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td valign="top">Solusi</td>
    <td><?php echo $data['solusi']; ?></td>
  </tr>
</table>
</body>
</html>
