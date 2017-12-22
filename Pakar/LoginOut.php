<?php
session_start();
include_once "inc.session.php";

session_unregister("SES_USER");
echo "<meta http-equiv='refresh' content='0; url=Login.php'>";
exit;
?>