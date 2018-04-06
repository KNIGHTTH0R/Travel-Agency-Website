<?php 
session_start();
$_SESSION['throughlogin']="true";
$_SESSION['accessname']="";
echo $_SESSION['accessname'];
?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Login Page::.</title>
</head>

<body text="#EAEAEA" bgcolor="#000000">

<div align="center">

<table border="0" cellspacing="0" cellpadding="0" id="table1" width="100%" height="100%">
	<!-- MSTableType="layout" -->
	<tr>
	<td valign="top" height="100%" width="100%">&nbsp;</td>
	</tr>
	<tr>
		<td valign="top" height="194">
		<div align="center">
			<table border="0" cellspacing="0" cellpadding="0" id="table2" width="294" height="193">
				<!-- MSTableType="layout" -->
				<tr>
		<td height="193" width="294" background="image/bm.jpg">
<form action="login.php" method="post">
		<div align="center"><b>
			<br>
		<marquee behavior=alternate width="17" scrollamount="4">......:................:.................:......:................:.................:......:................:.................:......:................:.................:</marquee>|| 
			Login ||<marquee behavior=alternate width="16" scrollamount="4">......:................:.................:......:................:.................:......:................:.................:......:................:.................:</marquee><br>
		&nbsp;<br>
			<font size="2" face="Verdana">&nbsp;</font></b><font size="2" face="Verdana">User<b>:</b>
			</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="user" size="17" style="border: 1px solid #CCCCCC; background-color: #EEF3F9"><br>
			<font face="Verdana" size="2">Password:</font>
			<input type="password" name="password" size="17" style="border: 1px solid #C0C0C0; background-color: #F4FAFF">
            <br>
			<br>
			<input type="submit" value="Login" style="color: #FFFFFF; border: 1px solid #B0B0B0; background-color: #666666"><br>
			&nbsp;</div>
</form>
</td>
				</tr>
			</table>
		</div>
		</td>
	</tr>
	<tr>
		<td valign="top" height="181" width="100%">&nbsp;</td>
	</tr>
	<tr>
		<td height="1" width="963"></td>
	</tr>
</table>

</div>

</body>

</html>