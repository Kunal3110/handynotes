<?php
session_start();
if(!isset($_SESSION['email']))
{
	header('location:../index.php');
	
	
	
}
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
        .auto-style1 {
            width: 100%;
        }
        .auto-style2 {
          height: 51px;
    text-align: center;
    width: 263px;
        }
        .auto-style3 {
            color: #FF0000;
            text-align: center;
            font-size: large;
        }
        .auto-style4 {
            text-align: center;
            font-weight: 700;
        }
        .auto-style5 {
            height: 23px;
        }
    </style>
</head>
<body style="background-image:url(background.jpg)">
    
    <div>
        <table class="auto-style1">
            <tr>
                <td class="auto-style2">
                     <image  Width="160px" src="hn.png" />

                </td>
                <td class="auto-style2"><b><a href="searchnotes.php" style="color:black">SEARCH NOTES</a></b></td>
                <td class="auto-style2"><b><a href="searchpapers.php" style="color:black">SEARCH PAPERS</a></b></td>
                <td class="auto-style2"><b><a href="logout.php" style="color:black">LOGOUT</a></b></td>
            </tr>
            </table>
        
        <div>

           