<?php
require_once "db.php";
if(isset($_GET['download']))
										{
										$id=$_GET['nid'];
											$q="select supload from notes where nid=$id";
											$result=mysql_query($q);
											if($result)
											{
												$fet=mysql_fetch_assoc($result);
												$n=$fet['supload'];
												header("location:$n");
												
												
											}
											
										
										
											
										}
										
										
if(isset($_GET['delete']))
										{
										$id=$_GET['nid'];
											$q="delete from notes where nid=$id";
											$result=mysql_query($q);
											if($result)
											{
												
												header('location:viewnotes.php?a=success');
												
											}
											
											
										
										
											
										}
										?>