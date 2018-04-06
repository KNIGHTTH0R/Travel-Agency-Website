<?php
//This code is a work of Santosh K. Gurung
//key is 7sgdbc028feb879ce2902fcb6d38ef3
session_start(); 
$applicationkey="londonsdayout";
$corekey="userverification";

$key =$_POST['key'];
$title =$_POST['title'];
$firstname =$_POST['firstname'];
$familyname=$_POST['familyname'];
$dob=$_POST['day'] . " " . $_POST['month'] . " " . $_POST['year'];
$gender=$_POST['sex'];
$houseno=$_POST['houseno'];
$streetname=$_POST['streetname'];
$country=$_POST['ad1'];
$postcode=$_POST['postcode'];
$mobileno=$_POST['mobileno'];
$telephoneno=$_POST['telephoneno'];
$email =$_POST['email'];
$uname =$_POST['uname'];
$password1 =$_POST['password'];
$password2 =$_POST['rpassword'];
$err="false";
// Now checking if the field are blank or not
if($key=="" || $title=="" || $firstname=="" || $familyname=="" || $dob=="" || $gender=="" || $email=="" || $uname=="" || $password1=="" || $password2=="" || $password1!=$password2)
{
$_SESSION['errors']="fieldblank";
$err="true";
}
// Simple validations 
//if(is_numeric($houseno)==true)
//{
//$location="?houseno="
//}

if($key=="7sgdbc028feb879ce2902fcb6d38ef3" && $_GET['account']=="new" && $uname==$_GET['user'] && $err!="true" )
{
	$corekey="userverification";
	include("../core/dbmainsettings.php");
	include("../core/connect_database.php");
	include("../core/userfunctions.php");
	$conm=$conn;
    $csmm_sql="SELECT * FROM  memberinfo where username='" . $uname . "';";
    $csmm_result=mysql_query($csmm_sql,$conm);
    $csmm_total=mysql_num_rows($csmm_result);

	if($csm_total==0)
	{
echo "test";
	if(register($title, $firstname,$familyname,$dob,$gender,$houseno,$streetname,$country,$postcode,$mobileno,$telephoneno,$email,$uname ,$password1  , "memberinfo",$conn)==true)
	{
		$_SESSION['registered']="done";
		$_SESSION['realname']= $firstname;
		//header ("Location:".$_SERVER['HTTP_REFERER']);
	}
	else
	{
	  die("Couldn't register!");
	}
	}
	else
	{
	   $_SESSION['userexist']="True";
       //header ("Location:".$_SERVER['HTTP_REFERER']);
	}
}
else
{
	die("Access Denied!");
}
?> 