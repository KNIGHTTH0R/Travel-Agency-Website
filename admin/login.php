<?php
//This code is a work of Santosh K. Gurung
session_start(); 

$applicationkey="londonsdayout";
$uwname=$_POST['user'];
$pwd=md5(base64_encode($_POST['password']));

if($_SESSION['throughlogin']=="true")
{	
	$corekey="userverification";
	include("../core/dbmainsettings.php");
	include("../core/connect_database.php");
	include("../core/userfunctions.php");
	if(login($uwname,$pwd,"admininfo",$conn)==1)
	{	
		$_SESSION['adminstatus']="loggedin";
		$_SESSION['accessname']=$uwname;
		$_SESSION['err']="";
		$_SESSION['throughlogin']="";
?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Access Denied!</title>
</head>

<body>

<b><font size="4" face="Verdana" color="#003366">Access Granted!</font></b><hr color="#99CC00" size="1">
<a href="home.php"><span style="text-decoration: none">Click me </span> </a>to start.<br>
<br>
<font size="2">*Warning:: Please don't login to the system unless you are an 
employee of the company.</font>
</body>
</html>
<?Php
	}
	else
	{
		unl();
?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Access Denied!</title>
</head>

<body>

<b><font size="4" face="Verdana" color="#003366">Access denied!</font></b><hr color="#99CC00" size="1">
Please donot attempt to access protected pages.<br><a href="index.php"><br>
<br>
<font size="2">*Warning:: Please don't login to the system unless you are an 
employee of the company.</font>
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

<b><font size="4" face="Verdana" color="#003366">Access denied!</font></b><hr color="#99CC00" size="1">
The username or password is incorrect. Please try again,<br><a href="index.php"><span style="text-decoration: none">Click me </span> </a>to start.<br>
<br>
<font size="2">*Warning:: Please don't login to the system unless you are an 
employee of the company.</font>
</body>
</html>
<?php
}

function unl()
{
		unset($_SESSION['adminstatus']);
		unset($_SESSION['accessname']);
		unset($_SESSION['err']);
}
//header ("Location:".$_SERVER['HTTP_REFERER']);
?>