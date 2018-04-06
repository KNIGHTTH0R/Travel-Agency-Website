<?php
session_start(); 
//This code is a work of Santosh K. Gurung
$action=$_GET['action'];
if($action=="complete")
{
		unset($_SESSION["adminstatus"]);
		unset($_SESSION["accessname"]);
		unset($_SESSION["err"]);
?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>

<body>

<b><font size="4" face="Verdana" color="#003366">Successfully Logged out!</font></b><hr color="#99CC00" size="1">
<a href="index.php"><span style="text-decoration: none">Click me </span> </a>to login.<br>
<br>
<font size="2">*Warning:: Please don't login to the system unless you are an 
employee of the company.</font>
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
<title>New Page 1</title>
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