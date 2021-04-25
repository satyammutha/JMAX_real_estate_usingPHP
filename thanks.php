<?php

error_reporting(E_PARSE);
include("openconnection.php"); 
if($_POST['Submit'])
{
$pRequarment=$_POST['pRequarment'];
$ptye=$_POST['PType'];
$cName=$_POST['cName'];
$cityName=$_POST['Location'];
$Desrpt=$_POST['PDesrpt'] ;
$wnerNmae=$_POST['OwnerNmae'];
$address=$_POST['address'];
$email=$_POST['emailId'];
$cellNo=$_POST['cellNo'];
$budget1=$_POST['budget1'];
$mobileNo=$_POST['mobileNo'];

$a=strpos($budget1,"to");
if($a)
{
$pieces= explode("to",$budget1);
$pieces1=$pieces[0];
$pieces2=$pieces[1];
$pieces3=explode(" ",$pieces2);
$b2=$pieces3[1];
$b3=$pieces3[2];
}
else
{
$pieces1=1;
$pieces3=explode(" ",$budget1);
$b2=$pieces3[0];
$b3=$pieces3[1];

}
 $y="insert into postrequiremen  set PostRequement ='$pRequarment',Property ='$ptye',Category='$cName',City='$cityName',PropertyDiscription='$Desrpt',ownerName='$wnerNmae',address='$address',email_id='$email',phoneNo='$cellNo',mobileNo='$mobileNo',moneytype='$b3',price='$pieces1',price2='$b2'";

$query=mysql_query($y)or die(mysql_error());
//header('location:thanks.php');
?>
<script language="javascript">

window.location="thanks.php";
</script>
<?php 
}

?>




<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to JMAX Real Estate</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script language="JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_0906233956_0) return;
    window.mm_menu_0906233956_0 = new Menu("root",110,20,"Verdana, Arial, Helvetica, sans-serif",11,"#FFFFFF","#FFFF00","#D56145","#1B3783","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0906233956_0.addMenuItem("Society&nbsp;Flat","location='society_flat.php'");
  mm_menu_0906233956_0.addMenuItem("DDA&nbsp;Flat","location='dda_flat.php'");
  mm_menu_0906233956_0.addMenuItem("Builder&nbsp;Flat","location='builder_flat.php'");
  mm_menu_0906233956_0.addMenuItem("Builder&nbsp;Floor","location='builder_floor.php'");
  mm_menu_0906233956_0.addMenuItem("Commercial","location='commercial.php'");
   mm_menu_0906233956_0.addMenuItem("Other Properties ","location='buy_others.php'");
   mm_menu_0906233956_0.hideOnMouseOut=true;
   mm_menu_0906233956_0.menuBorder=1;
   mm_menu_0906233956_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0906233956_0.menuBorderBgColor='#000000';

        window.mm_menu_0907000335_0 = new Menu("root",123,17,"Verdana, Arial, Helvetica, sans-serif",11,"#FFFFFF","#FFFF00","#D56145","#1B3783","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0907000335_0.addMenuItem("Society&nbsp;Flat","location='society_flat_rent.php'");
  mm_menu_0907000335_0.addMenuItem("DDA&nbsp;Flat","location='dda_flat_rent.php'");
  mm_menu_0907000335_0.addMenuItem("Builder&nbsp;Flat","location='builder_flat_rent.php'");
  mm_menu_0907000335_0.addMenuItem("Builder&nbsp;Floor","location='builder_floor_rent.php'");
  mm_menu_0907000335_0.addMenuItem("Commercial","location='commercial_rent.php'");
  mm_menu_0907000335_0.addMenuItem("Other&nbsp;Properties","location='buy_others.php'");
   mm_menu_0907000335_0.hideOnMouseOut=true;
   mm_menu_0907000335_0.bgColor='#555555';
   mm_menu_0907000335_0.menuBorder=1;
   mm_menu_0907000335_0.menuLiteBgColor='#FFFFFF';
   mm_menu_0907000335_0.menuBorderBgColor='#000000';

  window.mm_menu_1021181416_0 = new Menu("root",154,17,"Verdana, Arial, Helvetica, sans-serif",11,"#FFFFFF","#FFFF00","#D56145","#1B3783","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_1021181416_0.addMenuItem("List&nbsp;All&nbsp;Sell&nbsp;Property","location='list_all_property_sell.php'");
  mm_menu_1021181416_0.addMenuItem("List&nbsp;All&nbsp;Rent&nbsp;Property","location='list_all_property_rent.php'");
  mm_menu_1021181416_0.addMenuItem("List&nbsp;all&nbsp;Property","location='listproperty.php'");
   mm_menu_1021181416_0.hideOnMouseOut=true;
   mm_menu_1021181416_0.bgColor='#555555';
   mm_menu_1021181416_0.menuBorder=1;
   mm_menu_1021181416_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1021181416_0.menuBorderBgColor='#777777';

mm_menu_1021181416_0.writeMenus();
} // mmLoadMenus()

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<script language="JavaScript" src="mm_menu.js"></script>


<script language="javascript">

function vailid()
{
		
		
		if(document.PostRequrment.PType.value=="0") 
			{		
				alert("Please Enter Property type ");
				//document.PostRequrment.sName.focus();
				return false;
						
			}	
		
	
		
			if(document.PostRequrment.cName.value=="0") 
			{		
				alert("Please Enter Property Category ");
				//document.PostRequrment.sName.focus();
				return false;
						
			}	
		
		
		if(document.PostRequrment.State.value=="") 
			{		
				alert("Please Enter State Name");
				document.PostRequrment.State.focus();
				return false;
						
			}	
			
			
			if(document.PostRequrment.cityName.value=="") 
			{		
				alert("Please Enter City Name");
				document.PostRequrment.cityName.focus();
				return false;
						
			}	
			
		
		if(document.PostRequrment.emailId.value=="") 
			{		
				
		alert("Please Enter the Email.");
		document.PostRequrment.emailId.focus();
		return false;
						
			}
			else
			{
			
	
				var str=document.PostRequrment.emailId.value
				var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
				if (filter.test(str)==false)
				{
					//alert("Please input a valid email address!")
					
					alert("Please enter vailid  Email id");
					
					document.PostRequrment.emailId.value=""
					document.PostRequrment.emailId.focus()
					return false
				}

			}	
		
}

</script>




<script language="JavaScript" src="mm_menu.js"></script>
</head>

<body>
<script language="JavaScript1.2">mmLoadMenus();</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30" align="center" background="images/bar_bg.gif"><table width="1001" border="0" cellpadding="0" cellspacing="0" bordercolor="#D7664A" bgcolor="#D7664A">
      <tr>
        <td width="2">&nbsp;</td>
        <td width="70" align="center" class="tab"><a href="index.php" class="tab">Home</a></td>
        <td width="1"><img src="images/tab_line.gif" width="1" height="30" /></td>
        <td width="90" align="center" class="tab"><a href="about_us.php" class="tab">About Us</a> </td>
        <td width="1"><img src="images/tab_line.gif" width="1" height="30" /></td>
        <td width="120" align="center" class="tab"><a href="#" name="link2" class="tab" id="link1" onMouseOver="MM_showMenu(window.mm_menu_0906233956_0,-15,22,null,'link2')" onMouseOut="MM_startTimeout();">Buy Property </a></td>
        <td width="1"><img src="images/tab_line.gif" width="1" height="30" /></td>
        <td width="143" align="center" class="tab"><a href="sell_property.php" class="tab">Sell &amp;&nbsp;Rent&nbsp;Property</a> </td>
        <td width="1"><img src="images/tab_line.gif" width="1" height="30" /></td>
        
		
		<td width="115" align="center" class="tab">
		<a href="#" name="link5" class="tab" id="link3" onMouseOver="MM_showMenu(window.mm_menu_0907000335_0,-15,22,null,'link5')" onMouseOut="MM_startTimeout();">Rent Property</a> </a>		</td>
		
		
		
        <td width="1"><img src="images/tab_line.gif" width="1" height="30" /></td>
        <td width="125" align="center" class="tab"><a href="list_all_property.php" name="link4" class="tab" id="link3" onMouseOver="MM_showMenu(window.mm_menu_1021181416_0,-15,22,null,'link4')" onMouseOut="MM_startTimeout();">List All Property</a></td>
        <td width="1"><img src="images/tab_line.gif" width="1" height="30" /></td>
        <td width="90" align="center" class="tab"><a href="feedback.php" class="tab">Feedback</a></td>
        <td width="1"><img src="images/tab_line.gif" width="1" height="30" /></td>
        <td width="105" align="center" class="tab"><a href="contact_us.php" class="tab">Contact Us</a></td>
      </tr>
</table></td>
  </tr>
  <tr>
    <td align="center"><table width="1001" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><?php  include('header.php')?></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="5" colspan="2" bgcolor="#d26f36"></td>
      </tr>
      <tr>
        <td height="8" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2"><table width="100%" border="0">
          <tr>
            <td class="quastion"><div align="center">Thanks ! </div></td>
          </tr>
          <tr>
            <td class="about_botom"><div align="center"><img src="images/thanks.jpg" width="600" height="300"></div></td>
          </tr>
          <tr>
            <td class="about_botom"><div align="center">Your data has been sent successfully. I Contact you as soon as posssiable. </div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="38" align="center" bgcolor="#d26f36"><?php  include('footer.php')?></td>
  </tr>
</table>
</body>
</html>
