<?php
//This code is a work of Santosh K. Gurung
//key is 5c32dbc028feb879ce2902fcb6d38ef3
session_start(); 
unsetall();
$applicationkey="londonsdayout";
$uname=$_POST['username'];
$pwdword=md5(base64_encode($_POST['password']));

if(($_GET['request']=="login") && $_POST['key']="5c32dbc028feb879ce2902fcb6d38ef3")
{
  if($uname=="" || $pwdword=="")
  {

	 unsetall();
  }
}

if(($_GET['request']=="login") && $uname!="" && $pwdword!="" && $_POST['key']="5c32dbc028feb879ce2902fcb6d38ef3")
{	
	$corekey="userverification";
	include("../core/dbmainsettings.php");
	include("../core/connect_database.php");
	include("../core/userfunctions.php");
	if(login($uname,$pwdword,"memberinfo",$conn)==1)
	{	
		customerinfo($uname,"memberinfo",$conn);
		$_SESSION["status"]="loggedin";
		$_SESSION["username"]=$uname;
		$_SESSION["formerror"]="";
		$_SESSION["fullname"]=$cs_title . $cs_firstname . " " . $cs_familyname;
		$_SESSION["familyname"]=$cs_familyname;
		$_SESSION["customername"]=$cs_title . $cs_firstname;
		$_SESSION["email"]=$cs_email;

	}
	else
	{
		unsetall();
	}
}

function unsetall()
{
		unset($_SESSION["status"]);
		unset($_SESSION["username"]);
		unset($_SESSION["familyname"]);
		unset($_SESSION["customername"]);
		unset($_SESSION["fullname"]);
		unset($_SESSION["email"]);
		$_SESSION["formerror"]="usernamedoesnotexist";
}
header ("Location:".$_SERVER['HTTP_REFERER']);
?> 