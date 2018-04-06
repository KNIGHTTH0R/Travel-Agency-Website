<?php
//This code is a work of Santosh K. Gurung
session_start(); 
$applicationkey="londonsdayout";
$corekey="userverification";

$key =$_POST['key'];
$tripid =$_POST['tripid'];
$adult =$_POST['adult'];
$children =$_POST['children'];
$disabiltiy=$_POST['disability'];
$assistance=$_POST['assistance'];
$dotrip=$_POST['day'] . "/" . $_POST['month'];
$dated=date("d.m.y");
$err="false";

// Now checking if the field are blank or not
if($_POST['day'] == "" || $_POST['day'] == "0"  || $_POST['month']=="" || $_POST['month']=="0" || $key!="7sgdbc028feb879ce2902fcb6d38ef3" )
{
$_SESSION['errors']="fieldblank";
$err="true";
header ("Location:".$_SERVER['HTTP_REFERER']);
}

if(($err!="true") && ($_SESSION["status"]=="loggedin") && ($_SESSION["username"]!=""))
{
	$corekey="userverification";
	include("../core/dbmainsettings.php");
	include("../core/connect_database.php");
	include("../core/userfunctions.php");
if($disabiltiy=="")
{
  $disabiltiy="No";
}
else
{
  $disabiltiy="Yes";
}
if($assistance=="")
{
  $assistance="No";
}
else
{
  $assistance="Yes";
}
	if(bookonline($_SESSION["username"],$tripid, $adult,$children,$dotrip,$disabiltiy,$assistance,$dated,"bookingdetails",$conn)==true)
	{
		$_SESSION['booked']="done";
		$_SESSION['errors']=="";
		header ("Location:".$_SERVER['HTTP_REFERER']);
	}
	else
	{
	  die("Please refill your forms!");
	}
}
else
{
	die("Access Denied!");
}
?> 