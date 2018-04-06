<?php 
session_start();
$_SESSION['throughlogin']="";
$applicationkey="londonsdayout";



if($_SESSION['adminstatus']=="loggedin" && $_SESSION['accessname']!="" )
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
      Welcome to Admin page,<br>
<span align= "center"> <font size="4" face="Verdana" color="#3366CC">you have got <b>
            <?php
$in_sql="SELECT * FROM contactusinfo;";
$in_result=mysql_query($in_sql,$conn);
$in_total=mysql_num_rows($in_result);
echo "<b>" . $in_total . "</b>";
?></b> messages.</font></span><br>
<span align= "center"> <font size="4" face="Verdana" color="#FF9900">There is <b>
            <?php
$mm_sql="SELECT * FROM bookingdetails;";
$mm_result=mysql_query($mm_sql,$conn);
$mm_total=mysql_num_rows($mm_result);
echo "<b>" . $mm_total . "</b>";
?></b> booking records.</font></span><br>
	<font color="#99CC00">
<span align= "left">Total Registered user is  <?php echo countmember("memberinfo",$conn) ?></span></font><br>
      <font face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      Please ensure that you log-out, after you have finished viewing records.<br>
		</font><font face="Verdana" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		If any problems occurs then please contact your system administrator.</font></td>
		<td height="200"></td>
	</tr>
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
?>
Access Denied!
<?php
}
?>