<?php

require_once "header.php" ?>
 <center> <h1> LOGIN HERE </h1></center>
 <form action = "newlog.php" method = "post">
             <table style="width: 25%;margin-left: 37%;margin-top: 6%;">
           
                        <tr>
                            <td class="auto-style5">ENTER EMAIL ID</td>
                            <td class="auto-style5">
								<input type="email" name="email" required />
                                
                            </td>
                           
                        </tr>
                        <tr>
                            <td>PASSWORD</td>
                            <td>
                               <input type="password" name="pass" required />
                            </td>
                           
                        </tr>
            <tr>
                            <td align="center" colspan="2">
                              <input type="submit" name = "log" value="login" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><a href="register.php" style="text-align: center">click here to create account</a></td>
                        </tr>
						
						<tr>
						<td colspan = "2" align = "center">
						<?php
						if(isset($_GET["log"]))
						{
							echo "Invalid Credentials";
						}
						?>
						</td>
						</tr>
						
                    </table>
			   </div>
    </form>
</body>
</html>
