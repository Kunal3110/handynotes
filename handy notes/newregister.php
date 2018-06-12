<?php
if (isset($_POST["reg"]))
{
require_once "db.php";
$a=$_POST["sname"];
$b=$_POST["gen"];
$c=$_POST["add"];
$d=$_POST["contact"];
$e=$_POST["email"];
$f=$_POST["pass1"];
$q = "insert into registeration values('$a','$b','$c',$d,'$e','$f')";
$check=mysql_query($q);
if(!$check)
{
	die("unable to execute the query ". mysql_error().$q);
	
}
else
{
echo "Inserted Successfully";	
	
}
}


?>
