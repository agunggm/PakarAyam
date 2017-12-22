<?php
$my['host']	= "localhost";
$my['user']	= "";
$my['pass']	= "";
$my['dbs']	= "pakarayamdb";

$koneksi	= mysql_connect($my['host'], 
							$my['user'], 
							$my['pass']);
if (! $koneksi) {
  echo "Gagal koneksi boss..!";
  mysql_error();
}
mysql_select_db($my['dbs'])
	 or die ("Database nggak ada tuh".mysql_error());

?>