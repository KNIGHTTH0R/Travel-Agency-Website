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
<span align= "center"> <font size="4" face="Verdana">There is <b>
            <?php
$mm_sql="SELECT * FROM bookingdetails;";
$mm_result=mysql_query($mm_sql,$conn);
$mm_total=mysql_num_rows($mm_result);
echo "<b>" . $mm_total . "</b>";
?></b> booking records.</font></span><br>

      <font face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      Please ensure that you log-out, after you have finished viewing records.<br>
		</font><font face="Verdana" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		If any problems occurs then please contact your system administrator.<br>
	<br>
&nbsp;</font></font><table border="0" cellspacing="0" cellpadding="0" id="table2" style="border: 1px solid #808080" width="768" height="46">
			<!-- MSTableType="layout" -->
			<tr>
				
          <td valign="top" style="border-bottom: 1px solid #808080" bgcolor="#669900" colspan="10" height="20">
			&nbsp;Bookings</td>
				
        	</tr>
			<tr>
				<td valign="top" align="center" style="border-right: 1px solid #808080; border-bottom: 1px solid #808080" rowspan="2" width="16">id</td>
				<td valign="top" align="center" style="border-right: 1px solid #808080; border-bottom: 1px solid #808080" rowspan="2" width="87">
				Username</td>
				<td valign="top" align="center" style="border-right: 1px solid #C0C0C0; border-bottom: 1px solid #C0C0C0" rowspan="2" width="52">
				Tripid</td>
				<td valign="top" align="center" style="border-left-width: 1px; border-right: 1px solid #808080; border-top-width: 1px; border-bottom: 1px solid #808080" rowspan="2" width="74">
				Adult no</td>
				<td align="center" style="border-right: 1px solid #808080; border-bottom: 1px solid #808080" rowspan="2" width="119">
				Children's no.</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td height="1"></td>
			</tr>
			<tr>
				<td valign="top" align="center" style="border-right:1px solid #C0C0C0; border-bottom:1px solid #C0C0C0; " width="90">
				Trip date</td>
				<td valign="top" width="60"  style="border-right:1px solid #C0C0C0; border-bottom:1px solid #C0C0C0; " >
				<p align="center">Disability</td>
				<td valign="top" width="83"  style="border-right:1px solid #C0C0C0; border-bottom:1px solid #C0C0C0; " >
				<p align="center">Assistance</td>
				<td valign="top" align="center" style="border-bottom: 1px solid #C0C0C0; ; border-left-width:1px; border-right-width:1px; border-top-width:1px" width="103">
				Filled Date</td>
				<td height="23" width="74" valign="top" style="border-bottom: 1px solid #C0C0C0; ; border-left-width:1px; border-right-width:1px; border-top-width:1px">
				<p align="center">Userdetails</td>
			</tr>
<?PHP
showbookingtable("bookingdetails",$conn);
?>
		</table>
		</td>
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