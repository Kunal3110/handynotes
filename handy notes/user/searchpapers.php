<?php

require_once "header.php";
require_once "db.php";

 ?>
 <center> <h1> SEARCH PREVIOUS YEAR PAPERS </h1></center>
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
							</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
						<tr>
                            <td>SELECT PAPER CONDUCTED YEAR</td>
                            <td><select name = "cyear">
							<option value = "2005">2005</option>
							<option value = "2006">2006</option>
							<option value = "2007">2007</option>
							<option value = "2008">2008</option>
							<option value = "2009">2009</option>
							<option value = "2010">2010</option>
							<option value = "2011">2011</option>
							<option value = "2012">2012</option>
							<option value = "2013">2013</option>
							<option value = "2014">2014</option>
							<option value = "2015">2015</option>
							<option value = "2016">2016</option>
							</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
					
								<tr>
						<td colspan="4" align="center"><input type="submit" name="submit" value="SUBMIT"/></td>
						</tr>
							</table>
			 </form>
			 <?php
							if(isset($_POST['submit']))
							{
								$year=$_POST['year'];
								$dept=$_POST['dept'];
								$cyear=$_POST['cyear'];
								$q="select * from paper where syear='$year' and sdept='$dept' and sconductedyear='$cyear'";
								
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
							
							<th>PAPER ID</th>
							<th>YEAR/SEMESTER</th>
							<th>PAPER CONDUCTED YEAR</th>
							<th>DEPARTMENT</th>
							<th>DOWNLOAD</th>
							
							</tr>
											 <?php
											for($i=0;$i<$r;$i++)
											{
										
													$fet=mysql_fetch_assoc($result);
													
													?>
													
													<tr>
													<td><?php echo $fet['sid'];?></td>
													<td><?php echo $fet['syear'];?></td>
													<td><?php echo $fet['sconductedyear'];?></td>
													<td><?php echo $fet['ssubjectname'];?></td>
													
													<td><form action="sdown.php"><input type="hidden" name="nid" value="<?php echo $fet['sid'];?>" /><input type="submit" name="download" value="DOWNLOAD"/></form></td>
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