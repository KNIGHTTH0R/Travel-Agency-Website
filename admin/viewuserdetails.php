<?php 
session_start();
$_SESSION['throughlogin']="";
$applicationkey="londonsdayout";

if($_SESSION['adminstatus']=="loggedin" && $_SESSION['accessname']!="" && isset($_GET['id'])=="true")
{	
    $userfound="no";
	$gid=$_GET['id'];
	$corekey="userverification";
	include("../core/dbmainsettings.php");
	include("../core/connect_database.php");
	include("../core/userfunctions.php");
	$xs_sql="SELECT * FROM `memberinfo` WHERE `id`='" . $gid. "'";
    if($xs_result=mysql_query($xs_sql,$conn))
	{   
	    $userfound="yes";
		if($xs_showdata=mysql_fetch_array($xs_result))
		{
		$userfound="yes";
 
				$ds_id=$xs_showdata['id'];
				$ds_title=$xs_showdata['title'];
				$ds_firstname=$xs_showdata['firstname'];
				$ds_familyname=$xs_showdata['familyname'];
				$ds_dob=$xs_showdata['dob'];
				$ds_gender=$xs_showdata['gender'];
				$ds_houseno=$xs_showdata['houseno'];
				$ds_streetname=$xs_showdata['streetname'];
				$ds_country=$xs_showdata['country'];
				$ds_postcode=$xs_showdata['postcode'];
				$ds_mobileno=$xs_showdata['mobileno'];
				$ds_telephone=$xs_showdata['telephone'];
				$ds_email=$xs_showdata['email'];
 				$ds_username=$xs_showdata['username'];
 
		}
		else
		{
		$userfound="no";
		}
	}
	else
	{
	    $userfound="no";
	}
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
		<td valign="top" align="center"><br><font size="4" face="Verdana">
<?php
if ($userfound=="yes")
{
 echo "You are viewing selected user details";	
}
else
{
 echo "User doesnot exist or other error may have occured, please try again.";
}
?>
</font><br>				
		<font face="Verdana">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		Please ensure that you log-out, after you have finished viewing records.<br>
		</font><font face="Verdana" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		If any problems occurs then please contact your system administrator.<br>
		<br>
&nbsp;</font>

<?php
		if($userfound="yes")
		{
?>
		<div align="center">
			<table border="0" id="table2" cellspacing="0" cellpadding="0" width="399" height="642">
				<!-- MSTableType="layout" -->
				<tr>
					<td valign="top" colspan="2" height="10" bgcolor="#0066CC"></td>
				</tr>
				<tr>
					<td colspan="2" height="98"><b>
					<font face="Times new Roman" size="4">User or Customer 
					Details<br>
					&nbsp; </font></b>
					<font face="Times new Roman" size="2" color="#676767">User 
					details must not be shared with any other third party as it 
					is the policy of the website<br>
					...</font><b><font face="Times new Roman" size="4"><br>
					</font><font face="Tahoma" size="3">1. Personal
					<font color="#676767">information's
					<input id="key" type="hidden" value="7sgdbc028feb879ce2902fcb6d38ef3" name="key">
					</font></font></b></td>
				</tr>
				<tr>
					<td colspan="2" height="20"><hr color="#d9d9d9" SIZE="1">
					</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Title:</font></td>
					<td height="26" valign="top">	<?php  echo $ds_title; ?></td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">First Name:</font></td>
					<td height="26" valign="top"><?php echo $ds_firstname; ?>
					</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Family Name:</font></td>
					<td height="26" valign="top"><?php echo $ds_familyname ;?>
					</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">DOB</font></td>
					<td height="28" valign="top"><?php echo $ds_dob; ?></td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Gender:</font></td>
					<td height="25" valign="top"><?php echo $ds_gender; ?></td>
				</tr>
				<tr>
					<td colspan="2" height="21"><hr color="#d9d9d9" SIZE="1">
					</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">House no.</font></td>
					<td height="27" valign="top"><?php echo $ds_houseno; ?>	</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Street Name.</font></td>
					<td height="27" valign="top"><?php echo $ds_streetname; ?>	</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">City/Country</font></td>
					<td height="27" valign="top"><?php echo $ds_country; ?>
	</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Post code:</font></td>
					<td height="27" valign="top"><?php echo $ds_postcode;?></td>
				</tr>
				<tr>
					<td colspan="2" height="21"><hr color="#d9d9d9" SIZE="1">
					</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Mobile no:</font></td>
					<td height="27" valign="top"><?php echo $ds_mobileno; ?>		</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Telephone no:</font></td>
					<td height="27" valign="top"><?php echo $ds_telephone; ?></td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Email:</font></td>
					<td height="27" valign="top"><?php echo $ds_email; ?></td>
				</tr>
				<tr>
					<td colspan="2" height="21"><hr color="#c0c0c0" SIZE="1">
					</td>
				</tr>
				<tr>
					<td colspan="2" height="24"><b><font face="Tahoma" size="3">
					2. Registration <font color="#676767">information's</font></font></b></td>
				</tr>
				<tr>
					<td colspan="2" height="21"><hr color="#c0c0c0" SIZE="1">
					</td>
				</tr>
				<tr>
					<td><font face="Tahoma" size="2">Username:</font></td>
					<td height="27" valign="top"><?php echo $ds_username; ?>
					</td>
				</tr>
				<tr>
					<td valign="top" width="133">
					User id</td>
					<td height="26" width="266" valign="top"><?php echo $ds_id; ?></td>
				</tr>
				<tr>
					<td colspan="2" height="33">
					<a href="viewmemberinfo.php">
					<span style="text-decoration: none"><font color="#99CC00">
					Click me</font></span></a> to see the other User list view. </td>
				</tr>
			</table>
		</div>
<?php
		}
?>
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