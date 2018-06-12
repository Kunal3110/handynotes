<?php

require_once "header.php" ?>
 <center> <h1> NOTES REGISTERATION </h1></center>s
              <table style="width: 40%;margin-left: 36%;">
           
                        <tr>
                            <td class="auto-style5">COURSE</td>
                            <td class="auto-style5">B.TECH</td>
                            <td class="auto-style5">&nbsp;</td>
                            <td class="auto-style5">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>SELECT YEAR</td>
                            <td><select name = "s1">
							<option value = "a">First Year</option>
							<option value = "b">Second Year</option>
							<option value = "c">Third Year</option>
							<option value = "d">Fourth Year</option>
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
                            <td><textarea name ="ta1" rows = "2"> </textarea></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                       
                        <tr>
                            <td>SELECT NOTES FOR YEAR TO UPLOAD</td>
                            <td><input type = "file" name = "fp1"/>Browse</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
			   </div>
    </form>
</body>
</html>
