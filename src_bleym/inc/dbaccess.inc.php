<?php  
// Datenbankserver kontaktieren

$db_host = 'localhost';
$db_base = 'adressdb';
$db_user = 'root';
$db_passwd = '';


$db = new mysqli($db_host, $db_user, $db_passwd,$db_base);

$db->query("SET NAMES 'utf8'");

?>