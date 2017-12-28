<?php
session_start();
include_once "../librari/inc.koneksidb.php";

$TxtUser   = $_POST['TxtUser'];
$TxtPasswd = $_POST['TxtPasswd'];

if (trim($TxtUser)=="") {
	echo "DATA USER BELUM DIISI";
	include "Login.php"; exit;
}
elseif (trim($TxtPasswd)=="") {
	echo "DATA PASSWORD BELUM DIISI";
	include "Login.php"; exit;
}

$sql_cek = "SELECT * FROM pakar WHERE userID='$TxtUser'
		    AND passID=md5('$TxtPasswd')";
$qry_cek = mysql_query($sql_cek, $koneksi)
		   or die ("Gagal Cek".mysql_error());
$ada_cek = mysql_num_rows($qry_cek);
if ($ada_cek >=1) {
	$SES_USER=$TxtUser;
	$_SESSION['SES_USER']=$SES_USER;

	header ("location: index.php");
}
else {
	echo "USER DAN PASSWORD TIDAK SESUAI";
	include "Login.php";
	exit;
}
?>
