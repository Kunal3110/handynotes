<?php

require_once "header.php";
require_once "db.php";
if(isset($_POST["submit"]))
{
$course=$_POST["course"];
$year=$_POST["year"];
$dept=$_POST["dept"];
$title=$_POST["title"];	
$descrip=$_POST["descrip"];

if($_FILES)
{
	
	$name=$_FILES['filename']['name'];
	move_uploaded_file($_FILES['filename']['tmp_name'],$name);
	$q="insert into notes (scourse,syear,sdept,stitle,sdes,supload) values('$course','$year','$dept','$title','$descrip','$name')";
	$result=mysql_query($q);
	if(!$result)
	{
		echo "<script>alert('Sorry failed to Register')</script>";
		
	}
	else
	{
		
		echo "<script>alert('Notes Registered Successfully')</script>";
		
	}	
	
	
}
	
}

 ?>
 <center> <h1> NOTES REGISTERATION </h1></center>
 <form method="post" enctype="multipart/form-data">
              <table style="width: 50%;margin-left: 36%;">
           
                        <tr>
                            <td class="auto-style5">COURSE</td>
                            <td class="auto-style5"><input type="text" name="course" value="B.TECH" readonly="true"/></td>
                            <td class="auto-style5">&nbsp;</td>
                            <td class="auto-style5">&nbsp;</td>
                        </tr>
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
                            <td>ENTER NOTES TITLE</td>
                            <td><input type = "text" name = "title"/></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                       
                        <tr>
                            <td>ENTER DESCRIPTION </td>
                            <td><textarea name ="descrip"> </textarea></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                       
                        <tr>
                            <td>SELECT NOTES FOR YEAR TO UPLOAD</td>
                            <td><input type = "file" name = "filename"/></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
						<tr>
						<td colspan="4" align="center"><input type="submit" name="submit" value="SUBMIT"/></td>
                    </table>
			   </div>
    </form>
</body>
</html>
