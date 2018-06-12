<?php
session_start();
require_once "db.php";
if (isset($_POST["log"]))
{
$q = $_POST["email"];
$r = $_POST["pass"];
$a = "select semail from registeration where semail = '$q' and spass = '$r' ";
$result=mysql_query($a);
	if(!$result)
	{
		die("failed to get data");
	
	}
	else
	{
		$row=mysql_num_rows($result);

		if($row>0)
		{
			$_SESSION["email"]=$q;
			header("location:user/searchnotes.php");
		}
		else
			{
			$b = "select aemail from admin where aemail = '$q' and apass = '$r' ";
			$result1=mysql_query($b);
			if(!$result1)
				{
					die("failed to get data");
	
				}
			else
				{
					$row1=mysql_num_rows($result1);

					if($row1>0)
					{
						$_SESSION["aemail"]=$q;
						header('location:admin/notesregisteration.php');
					}
					else
					{
					header("location:login.php?log=error");
					}
				}
			}

	}
}


?>