<?php
if($applicationkey=="londonsdayout")
{
?>

                <div align="left"><font face="Tahoma" style="font-size: 9pt"> 
                  </font><font color="#003366" size="3" face="Verdana, Arial, Helvetica, sans-serif">Welcome,</font> 
                  <br>
                  <font color="#666666" size="3"><strong><?php echo $_SESSION["customername"]; ?></strong></font> 
                  <br>
                  Email: <br>
                  <font size="2"><?php echo $_SESSION["email"]; ?></font> 
                  <hr color="#BCBCBC" width="140" align="left" size="1">
                  <font color="#0066FF" size="2"><a href="login/logout.php?action=complete"><font color="#418420">Log-out</font></a> 
                  - <a href="viewdetails.php"><font color="#0099FF">View 
                  details</font></a></font> 
                  <hr color="#BCBCBC" width="140" align="left" size="1">
                </div>
<?php
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