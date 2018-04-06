<?php
if(!$applicationkey=="londonsdayout" && $corekey=="userverification")
{
die("Access not Granted.");
}

// my database connection file here we will change the host,password, username....
$conn =mysql_connect($host, $username, $password);
mysql_select_db($dbname,$conn); //or die ("Couldnot connect to the database");
?>