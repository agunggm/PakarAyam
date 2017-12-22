<html>
<head>
<title>SISTEM PAKAR PENYAKIT AYAM</title>
</head>
<body>
<?php
include "inc.header.php";
?>
<table width="800" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#22B5DD">
<tr>
  <td colspan="2">&nbsp;</td>
</tr>
<tr bgcolor="#FFFFFF">
  <td width="188" align="center" valign="top">
  <table width="99%" border="0" cellpadding="0" cellspacing="1" bgcolor="#22B5DD">
	<tr> 
	  <td align="center"><strong>MENU</strong></td>
	</tr>
	<tr> 
	  <td bgcolor="#DBEAF5">+ <a href="?page=dafsakit" target="_self">Daftar Penyakit </a></td>
	</tr>
	<tr> 
	  <td bgcolor="#DBEAF5">+ <a href="?page=daftar" target="_self">Konsultasi 
		</a></td>
	</tr>
	<tr> 
	  <td bgcolor="#DBEAF5">+ <a href="?page=tolong">Pertolongan</a></td>
	</tr>
	<tr>
	  <td bgcolor="#DBEAF5">&nbsp;</td>
	  </tr>
	<tr>
	  <td bgcolor="#DBEAF5">+ <a href="?page=infobk">Info BK </a></td>
	  </tr>
	<tr> 
	  <td bgcolor="#DBEAF5">&nbsp;</td>
	</tr>
	<tr>
	  <td bgcolor="#DBEAF5">+ <a href="pakar/login.php" target="_blank">Masuk 
		Pakar</a></td>
	</tr>
  </table>
  </td>
  <td width="601" valign="top">
  <?php
    include "inc.bukaprogram.php";
  ?>
  <br><br>
  </td>
</tr>
<tr>
  <td colspan="2">&nbsp;</td>
</tr>
</table>
<br>
<?php
include "inc.footer.php";
?>
</body>
</html>
