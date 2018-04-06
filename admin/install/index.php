<?php

$dbhost='localhost';
$dbusername='root';
$dbuserpass='';
$dbname='ldo_isystem';


if($conn=mysql_connect ($dbhost, $dbusername, $dbuserpass))
{
echo "successfully created database connection.<br><br><br>............................<br>";
}
else
{
die("Database connection unsuccessfull.");
}


if (mysql_query("CREATE DATABASE $dbname",$conn))
  {
  echo ">> Database created.<br>";
  }
else
  {
  die(">>Error creating database: " . mysql_error());
  }
mysql_select_db($dbname, $conn);

$sql=" CREATE TABLE `memberinfo` (`id` DOUBLE NOT NULL AUTO_INCREMENT ,`title` VARCHAR( 4 ) NOT NULL ,`firstname` VARCHAR( 30 ) NOT NULL ,`familyname` VARCHAR( 25 ) NOT NULL ,`dob` DATETIME NOT NULL ,`gender` VARCHAR( 3 ) NOT NULL ,`houseno` INT( 3 ) NULL ,`streetname` VARCHAR( 30 ) NULL ,`country` VARCHAR( 30 ) NULL ,`postcode` VARCHAR( 10 ) NULL ,`mobileno` INT NULL ,`telephone` INT NULL ,`email` VARCHAR( 50 ) NOT NULL ,`username` VARCHAR( 15 ) NOT NULL ,`password` VARCHAR( 50 ) NOT NULL ,PRIMARY KEY ( `id` , `username` ) ,UNIQUE (`email`)) ENGINE = InnoDB COMMENT = 'This table contains registration information of the customer or user';";


if(mysql_query($sql,$conn))
{
echo ">> Created Table 1.<br>";
}
else
{
echo "<< couldnot create Table 1.<br>";
}

$sql="CREATE TABLE `contactusinfo` (
`id` INT NOT NULL AUTO_INCREMENT ,
`Firstname` VARCHAR( 25 ) NOT NULL ,
`Lastname` VARCHAR( 25 ) NULL ,
`Email` VARCHAR( 30 ) NOT NULL ,
`Address` VARCHAR( 30 ) NULL ,
`Message` TEXT NULL ,
PRIMARY KEY ( `id` ) 
) ENGINE = InnoDB";



if(mysql_query($sql,$conn))
{
echo ">> Created Table 2.<br>";
}
else
{
echo "<< couldnot create Table 2.<br>";
}




$sql="CREATE TABLE `admininfo` (
`username` VARCHAR( 25 ) NOT NULL ,
`password` VARCHAR( 40 ) NULL ,
PRIMARY KEY ( `username` ) 
) ENGINE = InnoDB";



if(mysql_query($sql,$conn))
{
echo ">> Created Table 3.<br>";
}
else
{
echo "<< couldnot create Table 3.<br>";
}


$sql="CREATE TABLE `bookingdetails` (
`id` DOUBLE NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`tripid` INT NULL ,
`username` VARCHAR( 16 ) NULL ,
`adultsno` TINYINT NULL ,
`childno` TINYINT NULL ,
`tripdate` VARCHAR( 12 ) NULL ,
`disability` varchar( 4 ) NULL ,
`assistance` varchar( 4 ) NULL ,
`formdate` DATE NULL
) ENGINE = innodb;";



if(mysql_query($sql,$conn))
{
echo ">> Created Table 4.<br>";
}
else
{
echo "<< couldnot create Table 4.<br>";
}




$sql="INSERT INTO `admininfo` (`username` ,`password` ) VALUES ('admin', '6fd742a61bd034804c00c49b18045020');";

if(mysql_query($sql,$conn))
{
echo "<br>Created Admin account with Username: <b>admin</b> >>> Password : <b>123</b><br>";
?>
<a href="../index.php"><font color="#669900" style="text-decoration: none">Click me to start</font></a>
<?php
}
else
{
echo "<< couldnot create Admin account.<br>";
}





echo "<br>End of the installation.<br>";
mysql_close($conn);
?> 