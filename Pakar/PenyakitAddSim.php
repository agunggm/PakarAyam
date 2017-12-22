<?php 
include "inc.session.php"; 
include "../librari/inc.koneksidb.php";
	
# Baca variabel Form (If Register Global ON)
$TxtKodeH 	 = $_REQUEST['TxtKodeH'];
$TxtPenyakit = $_REQUEST['TxtPenyakit'];
$TxtNmLatin  = $_REQUEST['TxtNmLatin'];
$TxtDefinisi = $_REQUEST['TxtDefinisi'];
$TxtSolusi   = $_REQUEST['TxtSolusi'];

# Validasi Form
if (trim($TxtKodeH)=="") {
	echo "Kode belum terbentuk, ulangi kembali";
	include "PenyakitAddFm.php";
}
elseif (trim($TxtPenyakit)=="") {
	echo "Nama Penyakit masih kosong, ulangi kembali";
	include "PenyakitAddFm.php";
}
elseif (trim($TxtNmLatin)=="") {
	echo "Nama Latin masih kosong, ulangi kembali";
	include "PenyakitAddFm.php";
}
elseif (trim($TxtDefinisi)=="") {
	echo "Definisi masih kosong, ulangi kembali";
	include "PenyakitAddFm.php";
}
elseif (trim($TxtSolusi)=="") {
	echo "Solusi masih kosong, ulangi kembali";
	include "PenyakitAddFm.php";
}
else {
	$sql  = " INSERT INTO penyakit (kd_penyakit,nm_penyakit,nm_latin,definisi,solusi) ";
	$sql .=	" VALUES ('$TxtKodeH','$TxtPenyakit','$TxtNmLatin','$TxtDefinisi','$TxtSolusi')";
	mysql_query($sql, $koneksi) 
		  or die ("SQL Error".mysql_error());

	$pesan= "DATA TELAH BERHASIL DISIMPAN";
	header("Location: PenyakitAddFm.php?pesan=$pesan");
}
?>
