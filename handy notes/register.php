<?php

require_once "header.php" ?>
 <center> <h1> REGISTER HERE </h1></center>
 <form action = "newregister.php" method = "post">
              <table style="width: 50%;margin-left: 31%;">                      
                        <tr>
                            <td>ENTER NAME</td>
                            <td>
                                <input type="text" name="sname" required />
                            </td>
                        </tr>
                        <tr>
                            <td>GENDER</td>
                            <td><input type = "radio" name = "gen" checked value = "Male"/>Male
							<input type ="radio" name ="gen" value ="Female"/>Female</td>
							
                               
                               
                            
                        </tr>
                        <tr>
                            <td>ADDRESS</td>
                            <td><textarea name = "add" rows = "5"> </textarea>
                               
                            </td>
                        </tr>
                        <tr>
                            <td>CONTACT NUMBER</td>
                            <td><input type = "text" name = "contact" required />
                                
                            </td>
                        </tr>
                        <tr>
                            <td>EMAIL ID</td>
                            <td>
                              <input type = "email" name = "email" required />
                            </td>
                        </tr>
                        <tr>
                            <td>PASSWORD</td>
                            <td>
                                <input type = "password" name = "pass1" required />
                            </td>
                        </tr>
                        <tr>
                            <td>CONFIRM PASSWORD</td>
                            <td>
                               <input type = "password" name = "pass2" required />
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center">
                                
                                <input type="submit"   name="reg" value="REGISTER" Width="105px" />
                            
                                    </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
			   </div>
    </form>
</body>
</html>
