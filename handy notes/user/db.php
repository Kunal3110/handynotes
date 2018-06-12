<?php
$hostname = "localhost";
$dbname = "register";
$dbuser = "root";
$dbpass ="";
$dbcon = mysql_connect($hostname,$dbuser,$dbpass);
if(!$dbcon)
{
die("Unable to connect".mysql_error());
}

$conn = mysql_select_db($dbname);
if(!$conn)
{
die("unable tp connect".mysql_error());
}

?>
