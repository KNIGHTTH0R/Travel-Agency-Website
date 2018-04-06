<?php
session_start(); 
//This code is a work of Santosh K. Gurung
$action=$_GET['action'];
if($action=="complete")
{
		$_SESSION["status"]="";
		$_SESSION["username"]="";
		$_SESSION["formerror"]="";
		$_SESSION["fullname"]="";
		$_SESSION["email"]="";
header ("Location:".$_SERVER['HTTP_REFERER']);
}
else
{
?>
<html>
<head>
<title>Access Denied!</title>
</head>
<body>
<font color="#336699" size="4" face="Verdana, Arial, Helvetica, sans-serif">Access 
  Denied!</font>
<hr color="#003333">
<font color="#336699" size="2" face="Verdana, Arial, Helvetica, sans-serif">If this problem occurs again please tell your administrator. </font><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
</font> 
</body>
</html>
<?php
}
?>