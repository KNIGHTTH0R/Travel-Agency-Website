<?php
if(!$applicationkey=="londonsdayout" && $corekey=="userverification")
{
die("Access not Granted.");
}

//************************Functions Name**********************************************//
//login($username,$password,$tablename,$connection)
//countmember($tablename, $connection);
//customerinfo($username,$tablename,$connection);
//savecontactus($fstname,$lstname,$emailid,$address,$comments)
//changepassword($usrname,$pword,$tablename,$connection)
//************************Functions starts now**********************************************//

function login($username,$password,$tablename,$connection)
{
$lg_sql="SELECT * FROM `" . $tablename ."` WHERE ((`username`='" . $username . "') AND (`password`='". $password ."'))";
$lg_result=mysql_query($lg_sql,$connection);
$lg_total=mysql_num_rows($lg_result);
return $lg_total;
}







//************************************************************************************//
function changepassword($usrname,$pword,$tablename,$connection)
{
$encrpted_newpassword=md5(base64_encode($pword));
$cg_sql="UPDATE `" . $tablename . "` SET `password` = '" . $encrpted_newpassword ."' where `username` = '" . $usrname ."';";
$cg_result=mysql_query($cg_sql,$connection);
return $cg_result;

}






//************************************************************************************//
function countmember($tablename, $connection)
{
$cm_sql="SELECT * FROM '" . $tablename ."';";
$cm_result=mysql_query($cm_sql,$connection);
$cm_total=mysql_num_rows($cm_result);
return $cm_total;
}
//************************************************************************************//
function customerinfo($username1,$tablename,$connection)
{
global $cs_id,$cs_title,$cs_firstname,$cs_familyname,$cs_dob, $cs_gender;
global $cs_houseno,$cs_streetname,$cs_country,$cs_postcode,$cs_mobileno;
global $cs_telephone,$cs_email,$cs_username,$cs_password;
$cs_sql="SELECT * FROM `" . $tablename ."` WHERE `username`='" . $username1 . "'";
$cs_result=mysql_query($cs_sql,$connection);
$cs_showdata=mysql_fetch_array($cs_result);

 $cs_id=$cs_showdata['id'];
 $cs_title=$cs_showdata['title'];
 $cs_firstname=$cs_showdata['firstname'];
 $cs_familyname=$cs_showdata['familyname'];
 $cs_dob=$cs_showdata['dob'];
 $cs_gender=$cs_showdata['gender'];
 $cs_houseno=$cs_showdata['houseno'];
 $cs_streetname=$cs_showdata['streetname'];
 $cs_country=$cs_showdata['country'];
 $cs_postcode=$cs_showdata['postcode'];
 $cs_mobileno=$cs_showdata['mobileno'];
 $cs_telephone=$cs_showdata['telephone'];
 $cs_email=$cs_showdata['email'];
 $cs_username=$cs_showdata['username'];
}
//************************************************************************************//
function savecontactus($fstname,$lstname,$emailid,$address,$comments,$tablename,$connection)
{
$sc_sql="INSERT INTO ". $tablename . "(`Firstname` ,`Lastname` ,`Email` ,`Address` ,`Message` )VALUES ('" . $fstname . "','" . $lstname . "','" . $emailid . "','" . $address . "','" . $comments. "');";
return mysql_query($sc_sql,$connection);
}
//************************************************************************************//
function register($title, $firstname,$familyname,$dob,$gender,$houseno,$streetname,$country,$postcode,$mobileno,$telephoneno,$email,$uname ,$password1 ,$tablename,$connection)
{
$encrypted_password=md5(base64_encode($password1));
$rg_sql="INSERT INTO `" . $tablename ."` (`title` ,`firstname` ,`familyname` ,`dob` ,`gender` ,`houseno` ,`streetname` ,`country` ,`postcode` ,`mobileno` ,`telephone` ,`email` ,`username` ,`password`) VALUES (" . "'" . $title . "','" . $firstname . "','" . $familyname . "','" . $dob . "','" . $gender . "','" . $houseno . "','" . $streetname . "','" . $country . "','" . $postcode . "','" . $mobileno . "','" . $telephoneno . "','" . $email . "','" . $uname  . "','" . $encrypted_password ."');";
return mysql_query($rg_sql,$connection);
}






?>