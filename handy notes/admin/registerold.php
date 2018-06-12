<?php

require_once "header.php";
require_once "db.php";
if(isset($_POST["submit"]))
{

$year=$_POST["year"];
$dept=$_POST["dept"];
$cyear=$_POST["cyear"];	
$subject=$_POST["subject"];

if($_FILES)
{
	
	$name="paper/".$_FILES['filename']['name'];
	move_uploaded_file($_FILES['filename']['tmp_name'],$name);
	$q="insert into paper (syear,sdept,sconductedyear,ssubjectname,supload) values('$year','$dept','$cyear','$subject','$name')";
	$result=mysql_query($q);
	if(!$result)
	{
		echo "<script>alert('Sorry failed to Register')</script>";
		
	}
	else
	{
		
		echo "<script>alert('Paper Registered Successfully')</script>";
		
	}	
	
	
}
	else{
		
		echo "<script>alert('NOOOOOO')</script>";
		
	}
}


 ?>
 <center> <h1> REGISTER OLD PAPER </h1></center>
 <form method="post" enctype="multipart/form-data">
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
                            <td>ENTER PAPER SUBJECT</td>
                            <td><input type = "text" name = "subject"/></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
						 <tr>
                            <td>SELECT PAPER TO UPLOAD</td>
                            <td><input type = "file" name ="filename" /></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
						<tr>
						<td colspan="4" align="center"><input type="submit" name="submit" value="SUBMIT"/></td>
						</tr>
                    </table>
			   </div>
    </form>
</body>
</html>
