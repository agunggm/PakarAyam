<?php
if (!isset($_REQUEST['page'])) {
	if(file_exists ("utamakita.htm")) {
		include "utamakita.htm";
	}
	else {
		echo "FILE HALAMAN UTAMA KITA TIDAK ADA";
	}
}
else{
	$page= $_REQUEST['page'];
if ($page=="dafsakit") {
	if(file_exists ("PenyakitTampil.php")) {
		include "PenyakitTampil.php";
	}
	else {
		echo "FILE PROGRAM PENYAKIT TIDAK ADA";
	}
}
elseif ($page=="dafgejala") {
	if(file_exists ("GejalaTampil.php")) {
		include "GejalaTampil.php";
	}
	else {
		echo "FILE PROGRAM GEJALA PENYAKIT TIDAK ADA";
	}
}
elseif ($page=="daftar") {
	if(file_exists ("PasienAddFm.php")) {
		include "PasienAddFm.php";
	}
	else {
		echo "FILE PROGRAM FORM PASIEN TIDAK ADA";
	}
}
elseif ($page=="daftarsim") {
	if(file_exists ("PasienAddSim.php")) {
		include "PasienAddSim.php";
	}
	else {
		echo "FILE PROGRAM FORM PASIEN SIMPAN TIDAK ADA";
	}
}
elseif ($page=="konsul") {
	if(file_exists ("KonsultasiFm.php")) {
		include "KonsultasiFm.php";
	}
	else {
		echo "FILE PROGRAM FORM KONSULTASI TIDAK ADA";
	}
}
elseif ($page=="konsulcek") {
	if(file_exists ("KonsultasiPeriksa.php")) {
		include "KonsultasiPeriksa.php";
	}
	else {
		echo "FILE PROGRAM KONSULTASI PERIKSA TIDAK ADA";
	}
}
elseif ($page=="hasil") {
	if(file_exists ("AnalisaHasil.php")) {
		include "AnalisaHasil.php";
	}
	else {
		echo "FILE PROGRAM ANALISA HASIL TIDAK ADA";
	}
}
elseif ($page=="tolong") {
	if(file_exists ("penjelasan.htm")) {
		include "penjelasan.htm";
	}
	else {
		echo "FILE PROGRAM PERTOLONGAN TIDAK ADA";
	}
}
elseif ($page=="infobk") {
	if(file_exists ("utamakita.htm")) {
		include "utamakita.htm";
	}
	else {
		echo "FILE HALAMAN UTAMA KITA TIDAK ADA";
	}
}
}
?>
