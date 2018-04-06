<?php
session_start(); 
$applicationkey="londonsdayout";
?>
<!-- This website is a dedicated course Work of Santosh Kumar Gurung :: Student id:101172 ::2008-->
<html>
 <head>
	<title>Register:: London's Day out:: Day Trips to exciting places of 
	London::UK</title>
	<meta name="keywords" content="London's Day out, London, UK, Travel, interesting places, place, interest, bath, cambridge, oxford, leeds castle, cansterbury, stonehenge, cotswold village, london eye, london bridge, Big ben, Buckingham, Buckingham palace, national gallery, trafalgar square, westminster abbey, globe theatre, stonehenge, globe theatre">	
	<meta name="description" content="London's Day Out:: This is a small travel company that organise short tours for tourist visiting london.Hurry up get booked and see the famous, interesting places of london.">
	<meta name="Coursework" content="Santosh Kumar Gurung :: 101172">
	<meta http-equiv="imagetoolbar" content="no">
<script  type="text/javascript">
<!--
function validateit()
{
var returntype;
var err,msg;
err="false";
msg="Please correctly fill the highlighted fields.";
	if(document.Register.firstname.value=="")
	  {
		  document.Register.firstname.style.backgroundColor="#DEE9F3";
		  err="true";
	  }
	if(document.Register.familyname.value=="")
	  {
	     document.Register.familyname.style.backgroundColor="#DEE9F3";
	     err="true";
	  }
	 if(document.Register.day.value=="Day")
	  {
	     document.Register.day.style.backgroundColor="#DEE9F3";
	     err="true";
	  } 
	 if(document.Register.month.value=="Month")
	  {
	  	document.Register.month.style.backgroundColor="#DEE9F3";
	  	err="true";	  
	  }
	 if(document.Register.year.value=="Year")
	  {
	    document.Register.year.style.backgroundColor="#DEE9F3";
		err="true";
	  }
	 if(document.Register.houseno.value=="")
	  {
	    document.Register.houseno.style.backgroundColor="#DEE9F3";
	    err="true";
	  }
	 if(document.Register.streetname.value=="")
	  {
	    document.Register.streetname.style.backgroundColor="#DEE9F3";
	    err="true";
	  }
	 if(document.Register.add1.value=="")
	 {
	   document.Register.add1.style.backgroundColor="#DEE9F3";
	   err="true";	 
	 }
	 if(document.Register.postcode.value=="")
	 {
	    document.Register.postcode.style.backgroundColor="#DEE9F3";
	    err="true";
	 }
	 if(document.Register.mobileno.value=="")
	 {
	   document.Register.mobileno.style.backgroundColor="#DEE9F3";
	   err="true";
	 }
	 if(document.Register.telephoneno.value=="")
	 {
	   document.Register.telephoneno.style.backgroundColor="#DEE9F3";
       err="true";
	 }
	 if(document.Register.email.value=="")
	 {
	   document.Register.email.style.backgroundColor="#DEE9F3";
	   err="true";
	 }
	 if(document.Register.uname.value=="")
	 {
	   document.Register.uname.style.backgroundColor="#DEE9F3";
       err="true";	 
	 }
	 if(document.Register.password.value=="")
	 {
	   document.Register.password.style.backgroundColor="#DEE9F3";
	   err="true";	 
	 }
	 if(document.Register.rpassword.value=="")
	 {
	   document.Register.rpassword.style.backgroundColor="#DEE9F3";
	   err="true";	 
	 } 
	 if(document.Register.password.value != document.Register.rpassword.value)
	 {
	   if(err=="true")
	    {
	     msg=msg + "\nPlease retype both password.(Same)";
	    }
	    else
	    {
	    msg="Please retype both password.(Same)";
	    }
	  err="true";	
	 }
     if(document.Register.tos.checked==false)
     {
        if(err=="true")
	     {
            msg=msg + "\nYou need to agree terms & conditions.";

         }
         else
         {
            msg="\nDo you agree terms & conditions.";
         }
       err="true";	
     }

if(err=="true")
{
alert(msg);
returntype=false;
}
else
{
returntype=true;
document.Register.action="register/send.php?user=" + document.Register.uname.value + "&account=new";
}
return returntype;
}
//-->

</script>
 	<link rel="stylesheet" type="text/css" href="css/navcss.css">

 	<style>
<!--
.varybgnormal      { font-size: 10pt; color: #737373; background-color: #E7E7E7}
.varybgover  { color: #FFFFFF; font-size: 10pt; font-weight: bold; background-color: #77C12C }
-->
</style>
 </head>
   <body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
	
<div align="center"> 
  <table border="0" cellpadding="0" cellspacing="0" width="784" height="1380">
    <!-- MSTableType="layout" -->
    <tr>
      <th bgcolor="#000000" colspan="12" valign="bottom"> <img border="0" src="images/index-banner.jpg" width="760" height="115"></th>
      <td></td>
      <td height="123"></td>
    </tr>
	<tr>
      <td colspan="12" bgcolor="#504F4F" style="border-left: 1px solid #504F4F; border-right: 1px solid #504F4F; border-top-width: 1px; border-bottom-width: 1px"> 
        <div id="navigation" style="width: 100%; height: 29px"> 
          <ul>
            <li><a href="index.php" title="Home">Home</a></li>
            <li><a title="Places" href="places.php">Places</a></li>
            <li  id="pagein"><a title="Register" href="register.php">Register</a></li>
            <li><a title="Book online" href="bookonline.php">Book Online</a></li>
            <li><a href="aboutus.php" title="About">About us</a></li>
            <li><a href="contactus.php" title="Contact">Contact us</a></li>
            <li><a href="faq.php" title="FAQ">FAQ</a></li>
          </ul>
        </div></td>
      <td></td>
      <td height="29"></td>
    </tr>
	<tr>
      <td valign="top" colspan="11" bgcolor="#79BF1B"></td>
      <td></td>
      <td></td>
      <td height="3"></td>
    </tr>
	<tr>
      <td valign="top" colspan="11" bgcolor="#C0C0C0"></td>
      <td></td>
      <td></td>
      <td height="3"></td>
    </tr>
	<tr>
      <td bgcolor="#D8D8D8" background="images/fadegrey.JPG" style="border: 1px solid #8C97A2" colspan="3"> 
        <p align="left"><font face="Times New Roman">&nbsp; Login ::.</font></td>
      <td valign="top" rowspan="2" colspan="9" bgcolor="#FFFFFF"> <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="610" height="190" id="myanimesantos">
          <param name="movie" value="anime/myanime.swf">
          <param name="quality" value="High">
          <param name="scale" value="ExactFit">
          <embed src="anime/myanime.swf" quality="High" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="610" height="190" scale="ExactFit" name="myanimesantos"></embed></object> 
      </td>
      <td></td>
      <td height="25"></td>
    </tr>
	<tr>
      <td valign="top" bgcolor="#ECECEC" style="border: 1px solid #C9CED3" colspan="3"> 
        <table border="0" cellspacing="0" cellpadding="0" id="table1" width="170" height="155">
          <!-- MSTableType="layout" -->
          <tr> 
            <td valign="top" width="16">&nbsp;</td>
            <td valign="top" height="155" bgcolor="#EDEDED" width="154">
              <?php include('login/connectalllogin.php');  ?>
            </td>
          </tr>
        </table></td>
      <td></td>
      <td height="165"></td>
    </tr>
	<tr>
      <td valign="top" rowspan="12" style="background-image: url(images/fadegreydown.gif);
background-repeat: repeat-x">&nbsp;</td>
      <td valign="top" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x" rowspan="5"> 
        <p align="center"> <img border="0" src="images/lft-page-curl-e1.jpg" width="140" height="147"></td>
      <td valign="top" rowspan="12" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x">&nbsp;</td>
      <td valign="top" bgcolor="#E8E8E8"></td>
      <td valign="top" style="background-image: url(images/fadegreydown.gif); background-repeat: repeat-x" colspan="8"> 
      </td>
      <td></td>
      <td height="9"></td>
    </tr>
	<tr>
      <td valign="top" bgcolor="#3B5998"></td>
      <td align="center" rowspan="3" colspan="3"> <font color="#4F4F4F" face="Verdana" style="font-size: 9pt">Places</font></td>
      <td valign="top" colspan="5"></td>
      <td></td>
      <td height="7"></td>
    </tr>
	<tr>
      <td valign="top" rowspan="14" bgcolor="#F3F3F3" style="border-bottom: 1px solid #C0C0C0">
<?php  if($_SESSION['registered']=="done")
{
$_SESSION['registered']="";
 ?>
<table width="388" height="80" border="0" align="center" >
    <tr> 
      <td width="382" height="76"><b><font face="Times new Roman" size="4">
		Registration::.<br>
        &nbsp; </font></b><font face="Times new Roman" size="2" color="#676767">Now 
        register with us online to know about our latest travel package.<br>
        ,discounts and many more...</font><hr color="#669900" size="1">
        <div align="justify"><b><font face="Times new Roman" size="4"> </font></b><font face="Tahoma" size="2">
			<b>Thank 
          you</b>,<br>
          &nbsp;&nbsp;&nbsp;&nbsp;<font color="#336699" size="3"><strong><?php echo $_SESSION['realname'];?></strong></font>, 
          for registering with us online. your details have been saved &amp; preserved 
          for future reference. We ensure you that your any details will not be 
          shared with any third party.<font color="#676767"> </font></font><font face="Tahoma" size="3"><font color="#676767"><br>
          <font size="2">&nbsp;&nbsp;&nbsp;Now you can login to our system and 
          enjoy trips by booking online.</font><br>
          	<br>
			Managing Director<br>
          <font color="#000033">London's Day Out</font></b></font></font></div></td>
    </tr>
  </table>
 <?php 
 }
 else
 {
 ?>
	  <form name="Register" method="post" action="register/send.php" onSubmit="return validateit();">
          <table width="399" height="673" border="0" align="center" >
            <!-- MSTableType="layout" -->
            <tr>
              <td colspan="2" height="76"><b><font face="Times new Roman" size="4">Register<br>
                &nbsp; </font></b><font face="Times new Roman" size="2" color="#676767">Now 
                register with us online to know about our latest travel package.<br>
                ,discounts and many more...</font><b><font face="Times new Roman" size="4"><br>
                </font>
<?php
if($_SESSION['userexist']=="True")
{
$_SESSION['userexist']="";
?>
<hr color="#669900" size="1">
        <div align="justify"><b><font face="Tahoma" size="2">Sorry couldn't 
			register you</font></b><font face="Tahoma" size="2">,<br>
          &nbsp;&nbsp;&nbsp;&nbsp;Username 
			exist -(<font color="#336699" size="2"><strong><?php echo $_SESSION['realname'];?></strong></font>)- and is in use by the other user, please try using other unique 
			username.</font></div>
<hr color="#669900" size="1">
<?php 
}
?>
<font face="Tahoma" size="3">1. Personal <font color="#676767"> 
                information's 
                <input name="key" type="hidden" id="key" value="7sgdbc028feb879ce2902fcb6d38ef3">
                </font></font></b></td>
            </tr>
			<tr>
              <td colspan="2" height="18"><hr color="#D9D9D9" size="1"></td>
            </tr>
			<tr>
              <td><font face="Tahoma" size="2">Title:</font></td>
              <td height="24"> <select name="title" size="1" class="mybox">
                  <option value="Mr.">Mr.</option>
                  <option value="Ms.">Ms.</option>
                  <option value="Miss">Miss</option>
                  <option value="Mrs.">Mrs.</option>
                </select></td>
            </tr>
			<tr>
              <td><font face="Tahoma" size="2">First Name:</font></td>
              <td height="24"><input type="text" name="firstname" class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td><font size="2" face="Tahoma">Family Name:</font></td>
              <td height="24"><input type="text" name="familyname" class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td><font face="Tahoma" size="2">DOB</font></td>
              <td height="25"> <font face="Verdana" color="#000099" size="2"> 
                <select size="1" name="day" class="mybox" onFocus="this.style.backgroundColor='#ffffff'">
                  <option selected value="Day">Day</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
                </font> <select name="month" size="1" class="mybox" onFocus="this.style.backgroundColor='#ffffff'">
                  <option selected value="Month">Month</option>
                  <option value="January">January</option>
                  <option value="February">February</option>
                  <option value="March">March</option>
                  <option value="April">April</option>
                  <option value="May">May</option>
                  <option value="June">June</option>
                  <option value="July">July</option>
                  <option value="August">August</option>
                  <option value="September">September</option>
                  <option value="October">October</option>
                  <option value="November">November</option>
                  <option value="December">December</option>
                </select> <select name="year" size="1" class="mybox" onFocus="this.style.backgroundColor='#ffffff'">
                  <option selected value="Year">Year</option>
                  <option value="2008">2008</option>
                  <option value="2007">2007</option>
                  <option value="2006">2006</option>
                  <option value="2005">2005</option>
                  <option value="2004">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>
                  <option value="1995">1995</option>
                  <option value="1994">1994</option>
                  <option value="1993">1993</option>
                  <option value="1992">1992</option>
                  <option value="1991">1991</option>
                  <option value="1990">1990</option>
                  <option value="1989">1989</option>
                  <option value="1988">1988</option>
                  <option value="1987">1987</option>
                  <option value="1986">1986</option>
                  <option value="1985">1985</option>
                  <option value="1984">1984</option>
                  <option value="1983">1983</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                  <option value="1979">1979</option>
                  <option value="1978">1978</option>
                  <option value="1977">1977</option>
                  <option value="1976">1976</option>
                  <option value="1975">1975</option>
                  <option value="1974">1974</option>
                  <option value="1973">1973</option>
                  <option value="1972">1972</option>
                  <option value="1971">1971</option>
                  <option value="1970">1970</option>
                  <option value="1969">1969</option>
                  <option value="1968">1968</option>
                  <option value="1967">1967</option>
                  <option value="1966">1966</option>
                  <option value="1965">1965</option>
                  <option value="1964">1964</option>
                  <option value="1963">1963</option>
                  <option value="1962">1962</option>
                  <option value="1961">1961</option>
                  <option value="1960">1960</option>
                  <option value="1959">1959</option>
                  <option value="1958">1958</option>
                  <option value="1957">1957</option>
                  <option value="1956">1956</option>
                  <option value="1955">1955</option>
                  <option value="1954">1954</option>
                  <option value="1953">1953</option>
                  <option value="1952">1952</option>
                  <option value="1951">1951</option>
                  <option value="1950">1950</option>
                  <option value="1949">1949</option>
                  <option value="1948">1948</option>
                  <option value="1947">1947</option>
                  <option value="1946">1946</option>
                  <option value="1945">1945</option>
                  <option value="1944">1944</option>
                  <option value="1943">1943</option>
                  <option value="1942">1942</option>
                  <option value="1941">1941</option>
                  <option value="1940">1940</option>
                  <option value="1939">1939</option>
                  <option value="1938">1938</option>
                  <option value="1937">1937</option>
                  <option value="1936">1936</option>
                  <option value="1935">1935</option>
                  <option value="1934">1934</option>
                  <option value="1933">1933</option>
                  <option value="1932">1932</option>
                  <option value="1931">1931</option>
                  <option value="1930">1930</option>
                  <option value="1929">1929</option>
                  <option value="1928">1928</option>
                  <option value="1927">1927</option>
                  <option value="1926">1926</option>
                  <option value="1925">1925</option>
                  <option value="1924">1924</option>
                  <option value="1923">1923</option>
                  <option value="1922">1922</option>
                  <option value="1921">1921</option>
                  <option value="1920">1920</option>
                  <option value="1919">1919</option>
                  <option value="1918">1918</option>
                  <option value="1917">1917</option>
                  <option value="1916">1916</option>
                  <option value="1915">1915</option>
                  <option value="1914">1914</option>
                  <option value="1913">1913</option>
                  <option value="1912">1912</option>
                  <option value="1911">1911</option>
                  <option value="1910">1910</option>
                  <option value="1909">1909</option>
                  <option value="1908">1908</option>
                  <option value="1907">1907</option>
                  <option value="1906">1906</option>
                  <option value="1905">1905</option>
                  <option value="1904">1904</option>
                  <option value="1903">1903</option>
                  <option value="1902">1902</option>
                  <option value="1901">1901</option>
                  <option value="1900">1900</option>
                </select></td>
            </tr>
			<tr>
              <td><font size="2" face="Tahoma">Gender:</font></td>
              <td height="23">Male 
                <input type="radio" name="sex" value="male" check checked>
                Female 
                <input type="radio" name="sex" value="female"></td>
            </tr>
			<tr>
              <td colspan="2" height="18"><hr color="#D9D9D9" size="1"></td>
            </tr>
			<tr>
              <td><font face="Tahoma" size="2">House no.</font></td>
              <td height="24"><input type="text" name="houseno" maxlength="3" class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td><font size="2" face="Tahoma">Street Name.</font></td>
              <td height="24"><input type="text" name="streetname" class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td><font face="Tahoma" size="2">City/Country</font></td>
              <td height="24"><input type="text" name="add1" class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td><font size="2" face="Tahoma">Post code:</font></td>
              <td height="24"><input type="text" name="postcode" maxlength="8"  class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td colspan="2" height="18"><hr color="#D9D9D9" size="1"></td>
            </tr>
			<tr>
              <td><font size="2" face="Tahoma">Mobile no:</font></td>
              <td height="24"><input type="text" name="mobileno"  class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td><font size="2" face="Tahoma">Telephone no:</font></td>
              <td height="24"><input type="text" name="telephoneno"  class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td><font size="2" face="Tahoma">Email:</font></td>
              <td height="24"><input type="text" name="email"  class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td colspan="2" height="18"><hr color="#C0C0C0" size="1"></td>
            </tr>
			<tr>
              <td colspan="2" height="21"><b><font face="Tahoma" size="3">2. Registration 
                <font color="#676767">information's</font></font></b></td>
            </tr>
			<tr>
              <td colspan="2" height="18"><hr color="#C0C0C0" size="1"></td>
            </tr>
			<tr>
              <td><font face="Tahoma" size="2">Username:</font></td>
              <td height="24"><input type="text" name="uname" class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td><font face="Tahoma" size="2">Password:</font></td>
              <td height="24"><input type="password" name="password" class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td width="130"><font face="Tahoma" size="2">Retype Password:</font></td>
              <td height="25" width="259"><input type="password" name="rpassword" class="mybox" onFocus="this.style.backgroundColor='#ffffff'"></td>
            </tr>
			<tr>
              <td colspan="2" height="24">
			  <input type="checkbox" name="tos" id="rg">
			  <label for="rg"><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">I 
                agree the terms & conditions</font></label> </td>
            </tr>
			<tr>
              <td colspan="2" height="30"><input name="submit" type="submit" value="submit"> 
                <input name="reset" type="reset" value="Reset"></td>
            </tr>
			<tr>
              <td colspan="2" height="19"><hr color="#C0C0C0" size="1"></td>
            </tr>
          </table>
        </form> 
<?php } ?>
		</td>
      <td valign="top" bgcolor="#2592B5" colspan="5"></td>
      <td></td>
      <td height="17"></td>
    </tr>
	<tr>
      <td valign="top" colspan="5"></td>
      <td></td>
      <td height="9"></td>
    </tr>
	<tr>
      <td valign="top" rowspan="3" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x" colspan="2">&nbsp;
        <p>&nbsp;</td>
      <td valign="top" colspan="3" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x" rowspan="3"> 
        <a href="places.php?id=102">
		<font color="#3B5998" face="Verdana" size="2">Bath</font></a> 
		, <font face="Verdana" color="#7AC11C">
		<a href="places.php?place=107">
		<font color="#7AC11C">Westminster</font></a></font> , 
		<a href="places.php?id=107">
		<font color="#3B5998" face="Verdana" size="2">Cambridge</font></a>, 
		<font color="#3B5998">
		<a href="places.php?id=101">
		<font color="#7AC11C" size="4">Stonehenge</font></a></font> , 
		<a href="places.php?id=105">
		<font color="#6600CC" face="Verdana">Oxford</font></a> , 
		<a href="places.php?id=107">
		<font color="#8C97A2">London Eye</font></a> , 
		<font face="Verdana" size="2">
		<a href="places.php?id=107">
		<font color="#99CC00">Globe theatre</font></a></font> , 
		<a href="places.php?id=107">
		<font color="#8C97A0" size="2">Tower Bridge</font></a><font color="#335577">&nbsp;
		</font>, 
		<a href="places.php?id=104">
		<font color="#3B5998" face="Verdana" size="2">Leeds castle</font></a>, 
		<a href="places.php?id=104">
		<font color="#7AC11C" face="Verdana" size="2">Cantsbury</font></a> , 
		<a href="places.php?id=106">
		<font color="#3B5998">Cotswold 
		villages</font></a></td>
      <td valign="top" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x" rowspan="3" colspan="3">&nbsp;</td>
      <td></td>
      <td height="147"></td>
    </tr>
	<tr>
      <td valign="top" background="images/fadegreydown.gif"> <font size="2" color="#335577">&nbsp;Hurry 
        up!, quickly register for the new exciting travel packages. </font></td>
      <td></td>
      <td height="94"></td>
    </tr>
	<tr>
      <td valign="top" rowspan="6"> <p align="center"> <img border="0" src="images/lft-photo-effect-sg.jpg" width="126" height="130"></td>
      <td></td>
      <td height="26"></td>
    </tr>
	<tr>
      <td valign="top" colspan="8">&nbsp;</td>
      <td></td>
      <td height="29"></td>
    </tr>
	<tr>
      <td rowspan="3" colspan="4" align="center"> <font color="#4F4F4F" face="Verdana" style="font-size: 9pt">Reference</font></td>
      <td valign="top" colspan="4"></td>
      <td></td>
      <td height="10"></td>
    </tr>
	<tr>
      <td valign="top" bgcolor="#99CC00" colspan="4"></td>
      <td></td>
      <td height="13"></td>
    </tr>
	<tr>
      <td valign="top" colspan="4"></td>
      <td></td>
      <td height="12"></td>
    </tr>
	<tr>
      <td valign="top" rowspan="3" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x">&nbsp;</td>
      <td valign="top" rowspan="3" colspan="5" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x"> 
        <p align="justify"><font face="Verdana" style="font-size: 8pt">&nbsp;
		</font><font face="Verdana" color="#828282" style="font-size: 8pt">This 
		website has used some of the images of Great photographers, So we would 
		like to thank them all for their beautiful works that has helped us alot 
		in designing &amp; giving beautiful looks to the website. In this web site 
		there are images&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; .</font><font face="Verdana" style="font-size: 8pt" color="#3B5998">&nbsp;
		<a href="reference.php?tag=reference&paskey=<?php echo $passkey  ?>">
		Read more....</a></font></td>
      <td valign="top" rowspan="3" colspan="3" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x">&nbsp;</td>
      <td height="42"></td>
    </tr>
	<tr>
      <td valign="top">&nbsp;</td>
      <td valign="top"><font face="Tahoma" style="font-size: 8pt" color="#6600CC">* 
        </font> <font color="#616161" style="font-size: 8pt" face="Tahoma">Santosh 
        k. Gurung, Croydon has been registered with london&#39;s day out, since 
        Jan 2008.<br>
        <img border="0" src="images/lft-syng-cmma.jpg" width="13" height="14"></font>
        <div align="justify"><font color="#616161" face="Tahoma" style="font-size: 7pt"> 
          <b>Amazing</b>, travelling London with London&#39;s Day Out was very 
          enjoying &amp; awesome.<br>
          &nbsp; At first I was puzzled, I wanted to travel the different places 
          of London but didn&#39;t knew most of the places of London. One of my 
          friend suggested me to visit London&#39;s Day out website &amp; book 
          online for the day out package &amp; I did it and now I&#39;m happy 
          I have seen most of the places. Thank You,</font></div>
        <font color="#616161" face="Tahoma" size="1">&nbsp;<b>London&#39;s Day 
        out.</b></font><font color="#616161" style="font-size: 8pt" face="Tahoma"><img border="0" src="images/rgt-syng-cmma.jpg" width="14" height="14"></font><br> 
        &nbsp;</td>
      <td valign="top">&nbsp;</td>
      <td height="320"></td>
    </tr>
	<tr>
      <td valign="top" rowspan="2" colspan="3">&nbsp;</td>
      <td height="45"></td>
      </tr>
	<tr>
		<td valign="top" colspan="10" height="38">&nbsp;</td>
	</tr>
	<tr>
      <td valign="top" colspan="3" background="images/fadegreyshortm.jpg" style="background-repeat: repeat-x">&nbsp;</td>
      <td valign="top" colspan="10" height="139" background="images/fadegreyshortm.jpg"  style="background-repeat: repeat-x">&nbsp;</td>
    </tr>
	<tr>
      <td bgcolor="#494949" colspan="14" height="74"> <p align="center"><font face="Arial Narrow" color="#FFFFFF">
		<a href="index.php"><font color="#F7FBFD">Home</font></a></font>&nbsp;
		<font color="#C9CED3">|</font>&nbsp;
		<font face="Arial Narrow" color="#FFFFFF"><a href="places.php">
		<font color="#F7FBFD">Places</font></a></font>&nbsp;
		<font color="#C9CED3">|</font>&nbsp;
		<font face="Arial Narrow" color="#FFFFFF"><a href="register.php">
		<font color="#F7FBFD">Register</font></a>&nbsp; |&nbsp; 
		<a href="tos.php"><font color="#F7FBFD">Terms and Conditions</font></a></font>&nbsp;
		<font color="#C9CED3">|</font>&nbsp;
		<font face="Arial Narrow" color="#FFFFFF"><a href="aboutus.php">
		<font color="#F7FBFD">About us</font></a></font>&nbsp;
		<font color="#C9CED3">|</font>&nbsp;
		<font face="Arial Narrow" color="#FFFFFF"><a href="contactus.php">
		<font color="#F7FBFD">Contact us</font></a><font color="#F7FBFD"> |&nbsp;
		<a href="faq.php"><font color="#FFFFFF">Faq</font></a></font><br>
          &nbsp;<font size="2">Copyright &copy; 2008 London's Day Out Company, 
          All Rights Reserved.</font></font></td>
      </tr>
	<tr>
      <td width="15"></td>
      <td width="146"></td>
      <td width="11"></td>
      <td width="453"></td>
      <td width="10"></td>
      <td width="5"></td>
      <td width="35"></td>
      <td width="19"></td>
      <td width="73"></td>
      <td width="6"></td>
      <td width="8"></td>
      <td width="1"></td>
      <td width="1"></td>
      <td width="1" height="1"></td>
    </tr>
  </table>
</div>
   </body>
</html>