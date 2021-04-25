<?php 
include("openconnection.php"); 
error_reporting(E_PARSE);
if($_POST['Submit'])
  {   
     
  $Name=$_POST['name'];            
  $Address=$_POST['address'] ;      
 $cellNo=$_POST['contactno'];            
  $EmailId =$_POST['emailid'];               
  $Feedtype=$_POST['feedtype'];             
  $Massage =$_POST['mssage'];
  $dt_tim= date("y/m/d");

$query=mysql_query("insert into feedback  set   Name='$Name',Address='$Address',cellNo='$cellNo',EmailId='$EmailId',Feedtype='  $Feedtype',Massage='$Massage',dt_tim='$dt_tim'")or die(mysql_error());
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

<script language="javascript">

function vailid()
{
		
		
		
		
		
		if(document.Ffeedback.name.value=="") 
			{		
				alert("Please Enter Name");
				document.Ffeedback.name.focus();
				return false;
						
			}	
		
		if(document.Ffeedback.emailid.value=="") 
			{		
				
		alert("Please Enter the Email.");
		document.Ffeedback.emailid.focus();
		return false;
						
			}
			else
			{
			
	
				var str=document.Ffeedback.emailid.value
				var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
				if (filter.test(str)==false)
				{
					//alert("Please input a valid email address!")
					
					alert("Please enter vailid  Email id");
					
					document.Ffeedback.emailid.value=""
					document.Ffeedback.emailid.focus()
					return false
				}

			}	
			
			
		if(document.Ffeedback.feedtype.value=="0") 
			{		
				alert("Please select Feddbac type.");
				
				return false;
						
			}	
}

</script>
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
        <td><img src="images/logo.gif" width="289" height="219" /></td>
        <td><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="712" height="219">
          <param name="movie" value="images/banner.swf" />
          <param name="quality" value="high" />
          <param name="wmode" value="transparent" />
          <embed src="images/banner.swf" width="712" height="219" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent"></embed>
        </object></td>
      </tr>
      <tr>
        <td height="5" colspan="2" bgcolor="#d26f36"></td>
      </tr>
      <tr>
        <td height="8" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2"><table width="1001" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="711" valign="top"><table width="711" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="49" colspan="4" align="left" valign="top" background="images/feedback.gif"><table width="711" height="38" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <th width="341" scope="row">&nbsp;</th>
                    <td width="370" class="quastion">Mob. 08149490225, 09403747957</td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td width="15">&nbsp;</td>
                <td width="426" valign="top" class="text">
				
				
				<form name="Ffeedback" id="Ffeedback" action="#" method="post" onSubmit="return vailid();" >
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="10" colspan="5"></td>
                    </tr>
                  
                  <tr>
                    <td></td>
                    <td width="77" valign="top">&nbsp;</td>
                    <td width="150" class="text"> Name * </td>
                    <td width="9" valign="middle" class="text">:</td>
                    <td width="249" height="11"><label>
                      <input name="name" type="text" class="text" id="name" size="30" />
                    </label> </td>
                  </tr>
                  <tr>
                    <td width="4"></td>
                    <td height="3" colspan="4" valign="top"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td valign="top">&nbsp;</td>
                    <td class="text">Address</td>
                    <td valign="middle" class="text">:</td>
                    <td height="19"><textarea name="address" cols="35" rows="3" class="text" id="address"></textarea></td>
                  </tr>
                  <tr>
                    <td width="4"></td>
                    <td height="3" colspan="4" valign="top"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td valign="top">&nbsp;</td>
                    <td class="text">Contact Number *</td>
                    <td valign="middle" class="text">:</td>
                    <td height="11"><input name="contactno" type="text" class="text" id="contactno" size="30" /></td>
                  </tr>
                  <tr>
                    <td width="4"></td>
                    <td height="3" colspan="4" valign="top"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td valign="top">&nbsp;</td>
                    <td class="text"> Email Id * </td>
                    <td class="text">:</td>
                    <td><input name="emailid" type="text" class="text" id="emailid" size="30" /></td>
                  </tr>
                  <tr>
                    <td width="4"></td>
                    <td height="3" colspan="4" valign="top"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td valign="top">&nbsp;</td>
                    <td class="text">Feedback Type * </td>
                    <td class="text">:</td>
                    <td><select name="feedtype" class="text" id="feedtype">
                      <option value="0">--Select--</option>
					  <option>General</option>
					  <option>Suggestions</option>
					  <option>Appreciation</option>
					  <option>Bug / Error Report</option>
					  <option>Purchase Requirement</option>
					  <option>Complaint</option>
					  <option>Interested in Services</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td width="4"></td>
                    <td height="3" colspan="4" valign="top"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td valign="top">&nbsp;</td>
                    <td class="text"> Massage * </td>
                    <td class="text">:</td>
                    <td><textarea name="mssage" cols="35" rows="5" class="text" id="mssage"></textarea></td>
                  </tr>
                  <tr>
                    <td width="4"></td>
                    <td height="2" colspan="4" valign="top"></td>
                  </tr>
                  
                  <tr>
                    <td width="4"></td>
                    <td valign="top">&nbsp;</td>
                    <td colspan="2"></td>
                    <td valign="top"><label>
                      <input name="Submit" type="submit" class="text" value="Submit" />
                      </label>                    <input name="reset" type="reset" class="text" id="reset" value="Reset" /></td>
                  </tr>
                  <tr>
                    <td width="4"></td>
                    <td colspan="4" valign="top">&nbsp;</td>
                  </tr>
                </table>
				</form>				</td>
                <td width="262" align="center" class="text"><img src="images/feed.gif" width="210" height="266" /></td>
                <td width="9">&nbsp;</td>
              </tr>
            </table></td>
            <td width="290" valign="top"><table width="290" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/left.gif" width="289" height="3" /></td>
              </tr>
              <tr>
                <td background="images/left_bg.gif"><?php  include('right.php')?></td>
              </tr>
              <tr>
                <td><img src="images/left_bottom.gif" width="289" height="3" /></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="38" align="center" bgcolor="#d26f36"><table width="1001" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" class="bottom_tab"><a href="index.php" class="bottom_tab">Home</a> : <a href="about_us.php" class="bottom_tab">About Us</a> : <a href="buy_property.php" class="bottom_tab">Buy Property</a> : <a href="sell_property.php" class="bottom_tab">Sell Property</a> : <a href="rent_property.php" class="bottom_tab">Rent Property</a> : <a href="feedback.php" class="bottom_tab">Feedback</a> : <a href="contact_us.php" class="bottom_tab">Contact Us</a><br />
          Copyright &copy; 2010 jmassociates.com. Inc. All rights reserved. Powered By : <a href="http://www.software-development.us/" class="bottom_tab">Satibha Net Technology</a></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
