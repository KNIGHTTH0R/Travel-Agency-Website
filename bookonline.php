<?php
session_start(); 
$applicationkey="londonsdayout";
?>
<!-- This website is a dedicated course Work of Santosh Kumar Gurung :: Student id:101172 ::2008-->
<html>
 <head>
	<meta http-equiv="Content-Language" content="en-gb">
	<title>London's Day out:: Book online different Trips to exciting places of 
	London::UK</title>

	<meta name="keywords" content="London's Day out, London, UK, Travel, interesting places, place, interest, bath, cambridge, oxford, leeds castle, cansterbury, stonehenge, cotswold village, london eye, london bridge, Big ben, Buckingham, Buckingham palace, national gallery, trafalgar square, westminster abbey, globe theatre, stonehenge, globe theatre">	
	<meta name="description" content="London's Day Out:: This is a small travel company that organise short tours for tourist visiting london.Hurry up get booked and see the famous, interesting places of london.">
	<meta name="Coursework" content="Santosh Kumar Gurung :: 101172">
	<meta http-equiv="imagetoolbar" content="no">

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
	
  <table border="0" cellpadding="0" cellspacing="0" width="784" height="1197">
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
				<li ><a title="Places" href="places.php">Places</a></li>
				<li><a title="Register" href="register.php">Register</a></li>
				<li id="pagein"><a title="Book online" href="bookonline.php">Book Online</a></li>
				<li><a href="aboutus.php" title="About">About us</a></li>
				<li><a href="contactus.php" title="Contact">Contact us</a></li>
				<li><a href="faq.php" title="FAQt">FAQ</a></li>
			</ul>
		</div>

      </td>
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
      <td valign="top" rowspan="2" colspan="9" bgcolor="#FFFFFF">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="610" height="190" id="myanimesantos">
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
            <td valign="top" height="155" bgcolor="#EDEDED" width="154"><?php include('login/connectalllogin.php');  ?></td>
          </tr>
        </table></td>
      	<td></td>
      	<td height="165"></td>
	</tr>
	<tr>
		<td valign="top" rowspan="12" style="background-image: url(images/fadegreydown.gif);
background-repeat: repeat-x">&nbsp;</td>
      <td valign="top" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x" rowspan="5">
		<p align="center">
		<img border="0" src="images/lft-page-curl-e1.jpg" width="140" height="147"></td>
      	<td valign="top" rowspan="12" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x">&nbsp;</td>
    	<td valign="top" bgcolor="#E8E8E8"></td>
      <td valign="top" style="background-image: url(images/fadegreydown.gif); background-repeat: repeat-x" colspan="8">
		</td>
      	<td></td>
      	<td height="9"></td>
	</tr>
	<tr>
		<td valign="top" bgcolor="#3B5998"></td>
      	<td align="center" rowspan="3" colspan="3">
		<font color="#4F4F4F" face="Verdana" style="font-size: 9pt">Places</font></td>
		<td valign="top" colspan="5"></td>
		<td></td>
		<td height="7"></td>
		</tr>
	<tr>
      <td valign="top" rowspan="13" bgcolor="#F3F3F3" style="border-bottom: 1px solid #C0C0C0">
	    <div align="center">
<?php
if(($_SESSION["status"]=="loggedin") && ($_SESSION["username"]!=""))
{
		if($_SESSION['booked']=="done")
		{
		unset($_SESSION['booked']);
?>
<Table width="332" height="178" border="0" align="center" cellpadding="0" cellspacing="0" id="table2">
            <!-- MSTableType="layout" -->
            <tr>
		  <td height="62"><b>
			<font color="#335577" face="Times new Roman" size="6">Book Online </font></b>
			<font face="Tahoma" style="font-size: 8pt" color="#8C97A2">Now Book 
			a trip online.</font></td>
				</tr>
				<tr>
		  <td height="15"><hr color="#8C97A2" size="1"></td>
				</tr>
				<tr>
					<td valign="top" height="29">
					<font size="4" face="Verdana" color="#669900">Booking 
					successful...</font></td>
				</tr>
				<tr>
				<td bgcolor="#E7E7E7" valign="top" height="72" width="332">
				<font face="Arial" style="font-size: 10pt" color="#335577">
				Thank you for booking online, We will be sending you the details 
				of the trips &amp; total charge of the trip within&nbsp; 7 working 
				days.</font></td>
				</tr>
</Table>
<?php
		}
		else
		{
?>
<form method='post' action="bookonline\send.php">
	      <Table width="332" height="738" border="0" align="center" cellpadding="0" cellspacing="0" id="table2">
            <!-- MSTableType="layout" -->
            <tr>
		  <td height="62"><b>
			<font color="#335577" face="Times new Roman" size="6">Book Online </font></b>
			<font face="Tahoma" style="font-size: 8pt" color="#8C97A2">Now Book 
			a trip online.</font></td>
			</tr>
			<tr>
		  <td height="15"><hr color="#8C97A2" size="1"></td>
			</tr>
			<tr>
				<td bgcolor="#E7E7E7" valign="top" height="72">
<?php
if($_SESSION['errors']=="fieldblank")
{
      unset($_SESSION['errors']);
	  echo "<font face='verdana' size='2' color='red'> Please check the field.<br></font>";
}
?>
				<font face="Arial" style="font-size: 10pt" color="#335577">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<input type="hidden" name="key" value="7sgdbc028feb879ce2902fcb6d38ef3">
<input type="hidden" name="tripid" value="<?php  echo $_get['tripid'];  ?>">
Your account has been verified. Please ensure that you have given us genuine details or the mailing address as we will be mailing 
				you about the verification and details of the trip within 7 
				working days.</font></td>
				</tr>
			<tr>
		<td height="510" valign="top"><b><font size="2" face="Verdana">User 
		details</font></b><hr color="#8C97A2" size="1" width="50%" align="left"><font size="2" face="Verdana" color="#737373">&nbsp;&nbsp; 
		Details Verified::</font><hr color="#8C97A2" size="1" width="50%" align="left">
		<font size="2" face="Verdana"><b>Trip Charges</b></font><hr color="#8C97A2" size="1" width="50%" align="left">
		<table border="0" cellspacing="0" cellpadding="0" width="318" height="60">
			<!-- MSTableType="layout" -->
			<tr>
				<td valign="top" rowspan="3" width="25">&nbsp;</td>
				<td valign="top"><font size="2" face="Verdana" color="#737373">
				Trip </font></td>
				<td valign="top"><select size="1" name="tripid">
				<option <?php if($_GET['tripid']=="101"){ echo " selected "; } ?>value="101">Stonehenge-Day trip</option>
				<option <?php if($_GET['tripid']=="201"){ echo " selected "; } ?>value="201">Stonehenge-Weekend trip</option>
				<option <?php if($_GET['tripid']=="102"){ echo " selected "; } ?>value="102">Bath-Day trip</option>
				<option <?php if($_GET['tripid']=="202"){ echo " selected "; } ?>value="202">Bath-weekend trip</option>
				<option <?php if($_GET['tripid']=="103"){ echo " selected "; } ?>value="103">Cambridge-Day trip</option>
				<option <?php if($_GET['tripid']=="203"){ echo " selected "; } ?>value="203">Cambridge-Weekend trip</option>
				<option <?php if($_GET['tripid']=="104"){ echo " selected "; } ?>value="104">Canterbury & leeds castle-Day trip</option>
				<option <?php if($_GET['tripid']=="204"){ echo " selected "; } ?>value="204">Canterbury & leeds castle-Weekend trip
				</option>
				<option <?php if($_GET['tripid']=="105"){ echo " selected "; } ?>value="105">Oxford-Day trip</option>
				<option <?php if($_GET['tripid']=="205"){ echo " selected "; } ?>value="205">Oxford-weekend trip</option>
				<option <?php if($_GET['tripid']=="106"){ echo " selected "; } ?>value="106">Cotswold village-Day trip</option>
				<option <?php if($_GET['tripid']=="206"){ echo " selected "; } ?>value="206">Cotswold village-Weekend trip</option>
				<option <?php if($_GET['tripid']=="401"){ echo " selected "; } ?>value="401">Special Trip</option>
				<option <?php if($_GET['tripid']=="107"){ echo " selected "; } ?>value="107">Centra London-Day trip</option>
				<option <?php if($_GET['tripid']=="207"){ echo " selected "; } ?>value="207">Central London-weekend trip</option>
				</select></td>
				<td height="22"></td>
			</tr>
			<tr>
				<td valign="top"><font size="2" face="Verdana" color="#737373">
				Adult::</font></td>
				<td valign="top"><font color="#555555">Charges as mentioned.</font></td>
				<td height="19"></td>
			</tr>
			<tr>
				<td valign="top" width="90">
				<font size="2" face="Verdana" color="#737373">
				Children:</font></td>
				<td valign="top" width="201"><font color="#414141">&nbsp;</font><font color="#555555">30% 
				off of Adult charge.</font></td>
				<td height="19" width="2"></td>
			</tr>
		</table>
		<font size="2" face="Verdana"><b>Trip Details</b></font><hr color="#8C97A2" size="1" width="70%" align="left">
		<font color="#555555">Number of peopleto attend trip</font><table border="0" cellspacing="0" cellpadding="0" width="230" height="40">
			<!-- MSTableType="layout" -->
			<tr>
				<td valign="top" rowspan="2" width="25">&nbsp;</td>
				<td valign="top"><font color="#555555">Adults&nbsp; </font></td>
				<td height="20" valign="top"> <font face="Verdana" color="#000099" size="2"> 
                <select size="1" name="adult" class="mybox" onFocus="this.style.backgroundColor='#ffffff'">
                  <option selected value="0">0</option>
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
                </select></font></td>
			</tr>
			<tr>
				<td valign="top" width="72"><font color="#555555">Childrens</font></td>
				<td height="20" width="133" valign="top"> <font face="Verdana" color="#000099" size="2"> 
                <select size="1" name="children" class="mybox" onFocus="this.style.backgroundColor='#ffffff'">
                  <option selected value="0">0</option>
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
                </select></font></td>
			</tr>
		</table>
		<font size="1">&nbsp;</font><br>
		&nbsp;<font color="#555555">When you want to have trip.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; D.o.b&nbsp;&nbsp;&nbsp; </font> <font face="Verdana" color="#000099" size="2"> 
                <select size="1" name="day" class="mybox" onFocus="this.style.backgroundColor='#ffffff'">
                  <option value="" selected>Day</option>
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
                  <option selected value="">Month</option>
                  <option value="01">January</option>
                  <option value="02">February</option>
                  <option value="03">March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                </select><hr color="#8C97A2" size="1" width="70%" align="left">
		&nbsp;<font color="#555555">General Questions</font><table border="0" cellspacing="0" cellpadding="0" width="265" height="114">
			<!-- MSTableType="layout" -->
			<tr>
				<td valign="top"><font color="#555555">
				<input type="checkbox" name="disability" value="Yes" style="float: right"></font></td>
				<td valign="top" height="76"><font color="#555555">&nbsp;Anyone 
				coming in the trip has got disability or has got any kind of 
				serious health problems (like heart problem or are very old.</font></td>
			</tr>
			<tr>
				<td valign="top" width="29"><font color="#555555">
				<input type="checkbox" name="assistance" value="Yes" style="float: right"></font></td>
				<td valign="top" height="38" width="236"><font color="#555555">
				Anyone coming in the trip needs assistance you want to have trip.</font></td>
			</tr>
		</table>
			<hr color="#8C97A2" size="1">&nbsp;
		<input name="Confirm" type="submit" value="submit"> 
                <input name="reset" type="reset" value="Reset"></td>
			</tr>
			<tr>
			<td valign="top" height="15">
			<hr color="#8C97A2" size="1"></td>
			</tr>
			<tr>
			<td valign="top" height="64" width="332">
			<p align="justify"><font size="1" face="Verdana" color="#737373">&gt;&gt; 
			London's Day Out is offering a list of trips all over the UK and is 
			very soon offering other more trips in a very affordable price, so 
			hurry up register online or do contact us to know more details, 
			thank you.</font></td>
			</tr>
	    </Table>	
	    </form>	
<?php
		}
}
else
{
?>
<Table width="332" height="178" border="0" align="center" cellpadding="0" cellspacing="0" id="table2">
            <!-- MSTableType="layout" -->
            <tr>
		  <td height="62"><b>
			<font color="#335577" face="Times new Roman" size="6">Book Online </font></b>
			<font face="Tahoma" style="font-size: 8pt" color="#8C97A2">Now Book 
			a trip online.</font></td>
			</tr>
			<tr>
		  <td height="15"><hr color="#8C97A2" size="1"></td>
			</tr>
			<tr>
				<td valign="top" height="29">
				<font size="4" face="Verdana" color="#669900">Please login...</font></td>
			</tr>
			<tr>
				<td bgcolor="#E7E7E7" valign="top" height="72" width="332">
				<font face="Arial" style="font-size: 10pt" color="#335577">
				Please ensure that you have logged in or have been registered 
				and have got an account. If you don't have a account then
				<a href="register.php">click me</a> to register for a account 
				and enjoy the easiness of booking trips online .</font></td>
				</tr>
 </Table>

<?php 
}
?>
      	</div>

      </td>
      	<td valign="top" bgcolor="#2592B5" colspan="5"></td>
		<td></td>
		<td height="15"></td>
		</tr>
	<tr>
      	<td valign="top" colspan="5"></td>
		<td></td>
		<td height="8"></td>
		</tr>
	<tr>
      	<td valign="top" rowspan="3" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x" colspan="2">&nbsp;<p>&nbsp;</td>
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
		<td height="128"></td>
		</tr>
	<tr>
      	<td valign="top" background="images/fadegreydown.gif">
		<font size="2" color="#335577">&nbsp;Hurry up!, quickly register for the 
		new exciting travel packages.</font></td>
		<td></td>
      	<td height="67"></td>
		</tr>
	<tr>
		<td valign="top" rowspan="6">
		<p align="center">
		<img border="0" src="images/lft-photo-effect-sg.jpg" width="126" height="130"></td>
		<td></td>
		<td height="21"></td>
		</tr>
	<tr>
		<td valign="top" colspan="8">&nbsp;</td>
		<td></td>
		<td height="23"></td>
		</tr>
	<tr>
		<td rowspan="3" colspan="4" align="center">
		<font color="#4F4F4F" face="Verdana" style="font-size: 9pt">Reference</font></td>
		<td valign="top" colspan="4"></td>
		<td></td>
		<td height="9"></td>
		</tr>
	<tr>
		<td valign="top" bgcolor="#99CC00" colspan="4"></td>
		<td></td>
		<td height="10"></td>
	</tr>
	<tr>
      	<td valign="top" colspan="4"></td>
		<td></td>
		<td height="9"></td>
	</tr>
	<tr>
		<td valign="top" rowspan="3" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x">&nbsp;</td>
      	<td valign="top" rowspan="3" colspan="5" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x">
		<p align="justify"><font face="Verdana" style="font-size: 8pt">&nbsp;&nbsp;
		</font><font face="Verdana" color="#828282" style="font-size: 8pt">This 
		website has used some of the images of Great photographers, So we would 
		like to thank them all for their beautiful works that has helped us alot 
		in designing &amp; giving beautiful looks to the website. In this web site 
		there are images&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; .</font><font face="Verdana" style="font-size: 8pt" color="#3B5998">&nbsp;
		<a href="reference.php?tag=reference&paskey=<?php echo $passkey  ?>">
		Read more....</a></font></td>
		<td valign="top" rowspan="3" colspan="3" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x">&nbsp;</td>
		<td height="58"></td>
	</tr>
	<tr>
		<td valign="top">&nbsp;</td>
		<td valign="top"><font face="Tahoma" style="font-size: 8pt" color="#6600CC">* </font>
<font color="#616161" style="font-size: 8pt" face="Tahoma">Santosh k. Gurung, 
Croydon has been registered with london&#39;s day out, since Jan 2008.<br>
<img border="0" src="images/lft-syng-cmma.jpg" width="13" height="14"></font><div align="justify"><font color="#616161" face="Tahoma" style="font-size: 7pt">
			<b>Amazing</b>, 
travelling London with London&#39;s Day Out was very enjoying &amp; awesome.<br>
&nbsp; At first I was puzzled, I wanted to travel the different places of London 
but didn&#39;t knew most of the places of London. One of my friend suggested me to 
visit London&#39;s Day out website &amp; book online for the day out package &amp; I did it 
and now I&#39;m happy I have seen most of the places. Thank You,</font></div>
		<font color="#616161" face="Tahoma" size="1">&nbsp;<b>London&#39;s Day out.</b></font><font color="#616161" style="font-size: 8pt" face="Tahoma"><img border="0" src="images/rgt-syng-cmma.jpg" width="14" height="14"></font><br>
&nbsp;</td>
		<td valign="top">&nbsp;</td>
		<td height="255"></td>
		</tr>
	<tr>
		<td valign="top" rowspan="2" colspan="3">&nbsp;</td>
		<td height="12"></td>
		</tr>
	<tr>
		<td valign="top" colspan="10" height="143">&nbsp;</td>
		</tr>
	<tr>
		<td bgcolor="#494949" colspan="14" height="75">
		<p align="center"><font face="Arial Narrow" color="#FFFFFF">
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
&nbsp;<font size="2">Copyright &copy; 2008 London's Day Out Company, All Rights 
		Reserved.</font></font></td>
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
		<td height="1" width="1"></td>
	</tr>
  </table>
   	</div>
   </body>
</html>
