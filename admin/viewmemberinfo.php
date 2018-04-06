<?php 
session_start();
$_SESSION['throughlogin']="";
$applicationkey="londonsdayout";

if($_SESSION['adminstatus']=="loggedin" && $_SESSION['accessname']!="")
{	
	$corekey="userverification";
	include("../core/dbmainsettings.php");
	include("../core/connect_database.php");
	include("../core/userfunctions.php");
?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Login Page::.</title>
</head>

<body text="#EAEAEA" bgcolor="#000000" link="#FFFFFF" vlink="#FFFFFF" alink="#FF9900">

<table border="0" cellspacing="0" cellpadding="0" bgcolor="#000000" id="table1" width="985" height="399">
	<!-- MSTableType="layout" -->
	<tr>
		<td>
		<p align="center">
		<img border="0" src="image/admin-banner.jpg" width="759" height="115"></td>
	<td height="138"></td>
	</tr>
	<tr>
		
  <td background="image/bannr.jpg"> <p align="center"><a href="home.php"> <span style="text-decoration: none"><font >Home</font></span></a> 
      | <a href="changepassword.php"><span style="text-decoration: none">Change 
      Password</span></a> | <a href="viewmessages.php"><span style="text-decoration: none">View 
      Messages</span></a> |<a href="viewmemberinfo.php"><span style="text-decoration: none">View 
      Member details</span></a> <a href="booked.php"> <span style="text-decoration: none">| 
      Booked-Records</span></a> | <a href="logout.php?action=complete"><span style="text-decoration: none">Log-out</span></a></td>
		<td height="25"></td>
	</tr>
	<tr>
		<td valign="top"></td>
		<td height="12"></td>
	</tr>
	<tr>
		<td valign="top" align="center"><font size="4" face="Verdana"><br>
		You are viewing comments or messages sent by member,<br>
		</font><font face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		Please ensure that you log-out, after you have finished viewing records.<br>
		</font><font face="Verdana" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		If any problems occurs then please contact your system administrator.<br>
		<br>
&nbsp;</font>

<table border="0" cellspacing="0" cellpadding="0" id="table2" style="border: 1px solid #808080" width="819" height="57">
			<!-- MSTableType="layout" -->
			<tr>
				
          
        <td valign="top" style="border-bottom: 1px solid #808080" bgcolor="#669900" colspan="5"> 
          &nbsp;Member or Customer Details</td>
				
        <td valign="top" colspan="3" height="20" bgcolor="#669900"> <div align="right"><span align= "left">Registered 
            user= 
            <?php
echo countmember("memberinfo",$conn)
?>
            </span> </div></td>
			</tr>
			<tr>
				<td valign="top" align="center" style="border-right: 1px solid #808080; border-bottom: 1px solid #808080">id</td>
				<td valign="top" align="center" style="border-right:1px solid #C0C0C0; border-bottom:1px solid #C0C0C0; ">
				User name</td>
				<td valign="top" style="border-right: 1px solid #C0C0C0; border-bottom: 1px solid #C0C0C0">&nbsp;Title</td>
				<td valign="top" align="center" style="border-right: 1px solid #808080; border-bottom: 1px solid #808080">First name</td>
				<td valign="top" align="center" style="border-right: 1px solid #C0C0C0; border-bottom: 1px solid #C0C0C0">
				Last Name</td>
				<td valign="top" style="border-left-width: 1px; border-right: 1px solid #C0C0C0; border-top-width: 1px; border-bottom: 1px solid #C0C0C0">
				<p align="center">Dob</td>
				<td valign="top" align="center" style="border-left-width: 1px; border-right: 1px solid #808080; border-top-width: 1px; border-bottom: 1px solid #808080">
				Email</td>
				<td height="24" valign="top" align="center" style="border-bottom: 1px solid #C0C0C0; ; border-left-width:1px; border-right-width:1px; border-top-width:1px">Function</td>
			</tr>
			<tr>
				<td valign="top" colspan="8" height="10"></td>
			</tr>
<?php
showallusernames("memberinfo",$conn);
?>
		</table>
		<br>
<table>
&nbsp;
	<tr>
		<td width="980">
		<p align="center"><font face="Verdana" size="2">Copyright © 2008 
		London's day out.</font></td>
		<td height="24" width="5"></td>
	</tr>
</table>

</body>

</html>
<?php
}
else
{
echo "Access Denied!";
}
?>