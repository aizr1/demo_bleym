<?php
include ("inc/dbaccess.inc.php");
echo $_REQUEST['login']."<br>";
echo $_REQUEST['passwort']."<br>";
$passwortX = crypt($_REQUEST['passwort'],"LONGD1CK");
echo $passwortX;
?>
