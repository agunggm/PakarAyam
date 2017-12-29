<?php
include "inc.session.php";
include "../librari/koneksi.php";

# Baca variabel Form (If Register Global ON)
$kode = $_POST['kode'];
$penyakit = $_POST['penyakit'];
$nmlatin  = $_POST['latin'];
$definisi = $_POST['definisi'];
$solusi   = $_POST['solusi'];

$sql = mysql_query("UPDATE penyakit SET kd_penyakit='$kode', nm_penyakit='$penyakit', nm_latin='$nmlatin', definisi='$definisi', solusi='$solusi' WHERE kd_penyakit='$kode'");
if($sql)
{
	header('location: PenyakitTampil.php');
}
else
{
	echo "data gagal diedit";
}
?>
