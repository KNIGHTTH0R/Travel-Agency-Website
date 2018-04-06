<?php
//This code is a work of Santosh K. Gurung
session_start();

$applicationkey="londonsdayout";
$usname=$_SESSION['accessname'];
$pwd1=$_POST['newpassword1'];
$pwd2=$_POST['newpassword2'];
if($pwd1==$pwd2 && $_SESSION['adminstatus']=="loggedin" && $_SESSION['accessname']!="")
{
	$corekey="userverification";
	include("../core/dbmainsettings.php");
	include("../core/connect_database.php");
	include("../core/userfunctions.php");
	if(changepassword($usname,$pwd1,"admininfo",$conn)=="true")
	{
?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Welcome to Admin page, London's Day Out::.</title>
</head>

<body text="#FFFFFF" bgcolor="#000000" link="#FFFFFF" vlink="#FFFFFF" alink="#FF9900" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">

<table border="0" cellspacing="0" cellpadding="0" bgcolor="#000000" id="table1" width="1005" height="543">
	<!-- MSTableType="layout" -->
	<tr>
		<td height="157">
		<p align="center">
		<img border="0" src="image/admin-banner.jpg" width="759" height="115"></td>
	</tr>
	<tr>
		
    <td background="image/bannr.jpg" height="24"> <p align="center"><a href="home.php"> 
        <span style="text-decoration: none"><font >Home</font></span></a> | <a href="changepassword.php"><span style="text-decoration: none">Change 
        Password</span></a> | <a href="viewmessages.php"><span style="text-decoration: none">View 
        Messages</span></a> |<a href="viewmemberinfo.php"><span style="text-decoration: none">View 
        Member details</span></a> <a href="booked.php"> <span style="text-decoration: none">| 
        Booked-Records</span></a> | <a href="logout.php?action=complete"><span style="text-decoration: none">Log-out</span></a></td>
		</tr>
	<tr>
		<td valign="top" height="18"></td>
		</tr>
	<tr>
		<td valign="top" align="center" height="316"><font size="4" face="Verdana"><br>
		Your password has been changed,<br>
		</font><font face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		Please ensure that you can remember the password but hard for others to 
		remember,<br>
&nbsp;please use strong alpha numeric password &amp; never write it down in paper .<br>
		</font><font face="Verdana" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		If any problems occurs then please contact your system administrator.</font></td>
		</tr>
	<tr>
		<td width="1005" height="28">
		<p align="center"><font face="Verdana" size="2">Copyright © 2008 
		London's day out.</font></td>
		</tr>
</table>
</body>
</html>
<?php
	}
	else
	{
?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Welcome to Admin page, London's Day Out::.</title>
</head>

<body text="#FFFFFF" bgcolor="#000000" link="#FFFFFF" vlink="#FFFFFF" alink="#FF9900" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">

<table border="0" cellspacing="0" cellpadding="0" bgcolor="#000000" id="table1" width="100%" height="100%">
	<tr>
		<td height="157">
		<p align="center">
		<img border="0" src="image/admin-banner.jpg" width="759" height="115"></td>
	</tr>
	<tr>
		<td background="image/bannr.jpg" height="25">
		<p align="center"><a href="home.php">
		<span style="text-decoration: none"><font >Home</font></span></a> | 
		<a href="changepassword.php"><span style="text-decoration: none">Change Password</span></a> | 
		<a href="viewmessages.php"><span style="text-decoration: none">View 
		Messages</span></a> | <a href="booked.php">
		<span style="text-decoration: none">Booked-Records</span></a> | 
		<a href="logout.php?action=complete"><span style="text-decoration: none">Log-out</span></a></td>
		</tr>
	<tr>
		<td valign="top" height="17"></td>
		</tr>
	<tr>
		<td valign="top" align="center" height="316"><font size="4" face="Verdana"><br>
		Your request for changing password could not be changed, please try again.<br>
		</font><font face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		Please ensure that you can remember the password but hard for others to 
		remember,<br>
&nbsp;please use strong alpha numeric password &amp; never write it down in paper .<br>
		</font><font face="Verdana" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		If any problems occurs then please contact your system administrator.</font></td>
		</tr>
	<tr>
		<td width="1005" height="28">
		<p align="center"><font face="Verdana" size="2">Copyright © 2008 
		London's day out.</font></td>
		</tr>
</table>
</body>
</html>
<?php
	}
}
else
{
?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Access Denied!</title>
</head>

<body>

<b><font size="4" face="Verdana" color="#003366">Access Denied!</font></b><hr color="#99CC00" size="1">
<font size="2">*Warning:: Please don't login to the system unless you are an 
employee of the company.</font>
</body>
</html>
<?php
}
?>