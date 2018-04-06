<?php
if($applicationkey=="londonsdayout")
{
?>

	      <form action="login\index.php?request=login" method="post" name="login">
<?php  
if($_SESSION["formerror"]=="usernamedoesnotexist")
{ 
$_SESSION["formerror"]="";
?>
 		<font color="#FF0000" size="2">* Username or password is incorrect. &nbsp;&nbsp;&nbsp;Please try again.</font><br>
<?php  } ?>
                <font face="Tahoma" style="font-size: 9pt"><label for="textbox">Username</label></font><br>
                <input name="key" type="hidden" value="5c32dbc028feb879ce2902fcb6d38ef3">
				<input type="text" name="username" size="15" class="mybox" id="textbox">
                <br>
                <font face="Tahoma" style="font-size: 9pt"><label for="passwordbox">Password</label></font><br>
                <input type="password" name="password" size="15" class="mybox" id="passwordbox">
                <br>
                <font size="2" color="#3367AB">Forgot password?</font><hr color="#BCBCBC" width="130" align="left" size="1">
				<input name="submit" type="submit" value="Login">
				<input value="New User!" type="button" onClick="javascript: window.location='register.php'">
              </form>

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