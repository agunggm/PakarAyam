<?php
include "inc.session.php";
include "../librari/koneksi.php";

# Baca variabel Form (If Register Global ON)
$TxtKodeH 	= $_POST['TxtKode'];
$TxtGejala 	= $_POST['TxtGejala'];
$sql = mysql_query("UPDATE gejala SET kd_gejala='$TxtKodeH', nm_gejala='$TxtGejala' WHERE kd_gejala='$TxtKodeH'");
if($sql)
{
	header('location: GejalaTampil.php');
}
else
{
	echo "data gagal diedit";
}
?>
