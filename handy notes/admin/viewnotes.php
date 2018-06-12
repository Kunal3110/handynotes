<?php

require_once "header.php";
require_once "db.php";

										
										
 ?>

 <center> <h1> VIEW/DELETE NOTES </h1></center>
 <form method="post">
              <table style="width: 40%;margin-left: 36%;">
           <tr>
		       <td>SELECT YEAR</td>
                            <td><select name = "year">
							<option value = "First Year">First Year</option>
							<option value = "Second Year">Second Year</option>
							<option value = "Third Year">Third Year</option>
							<option value = "Fourth Year">Fourth Year</option>
							</select>
							</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
						<tr>
                             <td>SELECT DEPARTMENT</td>
                            <td><select name = "dept">
							<option value = "CSE">CSE</option>
							<option value = "IT">IT</option>
							<option value = "ECE">ECE</option>
							<option value = "ME">ME</option>
							</select>
							<td>&nbsp;</td>
                            <td>&nbsp;</td>
							
							
							</tr>
							<tr>
							
                            
							<td align = "center" colspan="4"><input type = "submit" name="look" value="Search"/></td>
							
							</tr>
							</table>
							</form>
							<?php
							if(isset($_POST['look']))
							{
								$year=$_POST['year'];
								$dept=$_POST['dept'];
								$q="select * from notes where syear='$year' and sdept='$dept'";
								
								$result=mysql_query($q);
								
								if(!$result)
								{
									echo "<script>alert('Sorry failed to Process')</script>";
								}
								else
									
									{
										$r=mysql_num_rows($result);
										if($r>0)
										{
											?>
											 <table border="1" style="margin-left: 36%;">
							<tr>
							
							<th>NOTES ID</th>
							<th>NOTES TITLE</th>
							<th>NOTES DESCRIPTION</th>
							<th>DOWNLOAD</th>
							<th>DELETE</th>
							</tr>
											 <?php
											for($i=0;$i<$r;$i++)
											{
										
													$fet=mysql_fetch_assoc($result);
													
													?>
													
													<tr>
													<td><?php echo $fet['nid'];?></td>
													<td><?php echo $fet['stitle'];?></td>
													<td><?php echo $fet['sdes'];?></td>
													<td><form action="down.php"><input type="hidden" name="nid" value="<?php echo $fet['nid'];?>" /><input type="submit" name="delete" value="DELETE"/></form></td>
													<td><form action="down.php"><input type="hidden" name="nid" value="<?php echo $fet['nid'];?>" /><input type="submit" name="download" value="DOWNLOAD"/></form></td>
													</tr>
													<?php
											}
											?>
											</table>
											<?php
										}
									}
							}	

							
									
							?>
							
							
							  
			   </div>
 
</body>
</html>

							
							