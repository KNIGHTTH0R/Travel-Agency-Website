<?php 
session_start(); 
$pid=$_GET["id"];
$applicationkey="londonsdayout";
?>
<!-- This website is a dedicated course Work of Santosh Kumar Gurung :: Student id:101172 ::2008-->
<html>
 <head>
	<meta http-equiv="Content-Language" content="en-gb">
	<title>Places:: London's Day out:: Day Trips to exciting places of 
	London::UK</title>

	<meta name="keywords" content="London's Day out, London, UK, Travel, interesting places, place, interest, bath, cambridge, oxford, leeds castle, cansterbury, stonehenge, cotswold village, london eye, london bridge, Big ben, Buckingham, Buckingham palace, national gallery, trafalgar square, westminster abbey, globe theatre, stonehenge, globe theatre">	
	<meta name="description" content="London's Day Out:: This is a small travel company that organise short tours for tourist visiting london.Hurry up get booked and see the famous, interesting places of london.">
	<meta name="Coursework" content="Santosh Kumar Gurung :: 101172">
	<meta http-equiv="imagetoolbar" content="no">

 	<link rel="stylesheet" type="text/css" href="css/navcss.css">

 	<style>
<!--
.varybgnormal      { font-size: 10pt; color: #737373; background-color: #E7E7E7}
.borderimage { border: 1px solid #C0C0C0 }
.varybgover  { color: #FFFFFF; font-size: 10pt; font-weight: bold; background-color: #77C12C }
-->
</style>
 </head>
   <body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
	<div align="center">
	
  <table border="0" cellpadding="0" cellspacing="0" width="784" height="1125">
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
				<li id="pagein"><a title="Places" href="places.php">Places</a></li>
				<li><a title="Register" href="register.php">Register</a></li>
				<li><a title="Book online" href="bookonline.php">Book Online</a></li>
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
      <td bgcolor="#D8D8D8" background="images/fadegrey.JPG" style="border: 1px solid #8C97A2" colspan="3" height="25"> 
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
      <td valign="top" bgcolor="#ECECEC" style="border: 1px solid #C9CED3" colspan="3" height="165"> 
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
background-repeat: repeat-x" height="341">&nbsp;</td>
      <td valign="top" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x" rowspan="5" height="150">
		<p align="center">
		<img border="0" src="images/lft-page-curl-e1.jpg" width="140" height="147"></td>
      	<td valign="top" rowspan="12" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x" height="341">&nbsp;</td>
    	<td valign="top" bgcolor="#E8E8E8" height="9"></td>
      <td valign="top" style="background-image: url(images/fadegreydown.gif); background-repeat: repeat-x" colspan="8" height="9">
		</td>
      	<td></td>
      	<td height="9"></td>
	</tr>
	<tr>
		<td valign="top" bgcolor="#3B5998" height="7"></td>
      	<td align="center" rowspan="3" colspan="3" height="25">
		<font color="#4F4F4F" face="Verdana" style="font-size: 9pt">Places</font></td>
		<td valign="top" colspan="5" height="7"></td>
		<td></td>
		<td height="7"></td>
		</tr>
	<tr>
      <td valign="top" rowspan="13" bgcolor="#F3F3F3" style="border-bottom: 1px solid #C0C0C0">
<?PHP
include("listedtours.php");
?>
</td>
      	<td valign="top" bgcolor="#2592B5" colspan="5" height="12"></td>
		<td></td>
		<td height="12"></td>
		</tr>
	<tr>
      	<td valign="top" colspan="5" height="6"></td>
		<td></td>
		<td height="6"></td>
		</tr>
	<tr>
      	<td valign="top" rowspan="3" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x" colspan="2" height="195">&nbsp;<p>&nbsp;</td>
      	<td valign="top" colspan="3" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x" rowspan="3" height="195">
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
      	<td valign="top" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x" rowspan="3" colspan="3" height="195">&nbsp;</td>
		<td></td>
		<td height="116"></td>
		</tr>
	<tr>
      	<td valign="top" background="images/fadegreydown.gif" height="60">
		<font size="2" color="#335577">&nbsp;Hurry up!, quickly register for the 
		new exciting travel packages.</font></td>
		<td></td>
      	<td height="60"></td>
		</tr>
	<tr>
		<td valign="top" rowspan="6" height="131">
		<p align="center">
		<img border="0" src="images/lft-photo-effect-sg.jpg" width="126" height="130"></td>
		<td></td>
		<td height="19"></td>
		</tr>
	<tr>
		<td valign="top" colspan="8" height="21">&nbsp;</td>
		<td></td>
		<td height="21"></td>
		</tr>
	<tr>
		<td rowspan="3" colspan="4" align="center" height="27">
		<font color="#4F4F4F" face="Verdana" style="font-size: 9pt">Reference</font></td>
		<td valign="top" colspan="4" height="8"></td>
		<td></td>
		<td height="8"></td>
		</tr>
	<tr>
		<td valign="top" bgcolor="#99CC00" colspan="4" height="10"></td>
		<td></td>
		<td height="10"></td>
	</tr>
	<tr>
      	<td valign="top" colspan="4" height="9"></td>
		<td></td>
		<td height="9"></td>
	</tr>
	<tr>
		<td valign="top" rowspan="2" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x" height="298">&nbsp;</td>
      	<td valign="top" rowspan="2" colspan="5" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x" height="298">
		<p align="justify"><font face="Verdana" style="font-size: 8pt">&nbsp;
		</font><font face="Verdana" color="#828282" style="font-size: 8pt">This 
		website has used some of the images of Great photographers, So we would 
		like to thank them all for their beautiful works that has helped us alot 
		in designing &amp; giving beautiful looks to the website. In this web site 
		there are images&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; .</font><font face="Verdana" style="font-size: 8pt" color="#3B5998">&nbsp;
		<a href="reference.php?tag=reference&paskey=<?php echo $passkey  ?>">
		Read more....</a></font></td>
		<td valign="top" rowspan="2" colspan="3" style="background-image: url(images/fadegreydown.gif);background-repeat: repeat-x" height="298">&nbsp;</td>
		<td height="64"></td>
	</tr>
	<tr>
		<td valign="top" height="234">&nbsp;</td>
		<td valign="top" height="234"><font face="Tahoma" style="font-size: 8pt" color="#6600CC">* </font>
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
		<td valign="top" height="234">&nbsp;</td>
		<td height="234"></td>
		</tr>
	<tr>
		<td valign="top" colspan="3">&nbsp;</td>
		<td valign="top" colspan="10" height="28">&nbsp;</td>
		</tr>
	<tr>
		<td valign="top" colspan="3" background="images/fadegrey_s.jpg"  style="background-repeat:repeat-x;background-position: bottom left" height="99" >
		&nbsp;</td>
		<td valign="top" colspan="10" height="99"    style="background-repeat:repeat-x;background-position: bottom left" background="images/fadegrey_s.jpg" >&nbsp;</td>
		</tr>
	<tr>
		<td bgcolor="#494949" colspan="14" height="74">
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
		<td width="1" height="1"></td>
		</tr>
  </table>
   	</div>
   </body>
</html>