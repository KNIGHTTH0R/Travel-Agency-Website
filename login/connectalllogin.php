<?php
if($applicationkey=="londonsdayout")
{

	if(($_SESSION["status"]=="loggedin") && ($_SESSION["username"]!=""))
	{
		include("commonconnectedmsg.php");
	}
	else
	{

		include("commonloginmsg.php");
	}
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