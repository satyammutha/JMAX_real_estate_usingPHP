<?php
error_reporting(E_PARSE);
include("openconnection.php"); 
$recordid=$_REQUEST['Id'];
$row=mysql_query("select * from addeuro where id='$recordid'");
$rowRs=mysql_fetch_array($row);

if($_POST['Submit'])
{

    
  $Name=$_POST['name'];            
  $Address=$_POST['address'];         
  $CellNo=$_POST['cellNo'] ;            
  $EmailId=$_POST['emailid'];            
  $Descraption=$_POST['descrap'];  
  $dt_tim= date("y/m/d");

$query=mysql_query("insert into contactus  set Name='$Name',Address='$Address',CellNo='$CellNo',EmailId='$EmailId',Descraption='$Descraption',dt_tim='$dt_tim'")or die(mysql_error());

header('location:thanks.php');
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

<script language="JavaScript" src="mm_menu.js"></script>
<style type="text/css">
<!--
.style1 {color: #D56246}
.style2 {font-size: 11px; font-style: normal; line-height: normal; color: #1f5b9e; text-decoration: none; font-family: Verdana;}
-->
</style>
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
    <td height="30" align="center" background="images/bar_bg.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30" align="center" background="images/bar_bg.gif">
	
	<table width="1001" border="0" cellpadding="0" cellspacing="0" bordercolor="#D7664A" bgcolor="#D7664A">
      <tr>
        <td width="2">&nbsp;</td>
        <td width="70" align="center" class="tab"><a href="index.php" class="tab">Home</a></td>
        <td width="1"><img src="images/tab_line.gif" width="1" height="30" /></td>
        <td width="90" align="center" class="tab"><a href="about_us.php" class="tab">About Us</a> </td>
        <td width="1"><img src="images/tab_line.gif" width="1" height="30" /></td>
        <td width="120" align="center" class="tab"><a href="#" name="link2" class="tab" id="link1" onmouseover="MM_showMenu(window.mm_menu_0906233956_0,-15,22,null,'link2')" onmouseout="MM_startTimeout();">Buy Property </a></td>
        <td width="1"><img src="images/tab_line.gif" width="1" height="30" /></td>
        <td width="143" align="center" class="tab"><a href="sell_property.php" class="tab">Sell &amp;&nbsp;Rent&nbsp;Property</a> </td>
        <td width="1"><img src="images/tab_line.gif" width="1" height="30" /></td>
        
		
		<td width="115" align="center" class="tab">
		<a href="#" name="link5" class="tab" id="link3" onmouseover="MM_showMenu(window.mm_menu_0907000335_0,-15,22,null,'link5')" onmouseout="MM_startTimeout();">Rent Property</a> </a>		</td>
		
		
		
        <td width="1"><img src="images/tab_line.gif" width="1" height="30" /></td>
        <td width="125" align="center" class="tab"><a href="list_all_property.php" name="link4" class="tab" id="link3" onmouseover="MM_showMenu(window.mm_menu_1021181416_0,-15,22,null,'link4')" onmouseout="MM_startTimeout();">List All Property</a></td>
        <td width="1"><img src="images/tab_line.gif" width="1" height="30" /></td>
        <td width="90" align="center" class="tab"><a href="feedback.php" class="tab">Feedback</a></td>
        <td width="1"><img src="images/tab_line.gif" width="1" height="30" /></td>
        <td width="105" align="center" class="tab"><a href="contact_us.php" class="tab">Contact Us</a></td>
      </tr>
</table>	</td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td align="center"><table width="1001" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><?php  include('header.php')?></td>
        </tr>
      <tr>
        <td height="5" bgcolor="#d26f36"></td>
      </tr>
      <tr>
        <td height="8"></td>
      </tr>
      <tr>
        <td><table width="1001" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="711" valign="top"><table width="711" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="46" colspan="3" align="left" valign="top" background="images/project_details.gif"><table width="711" height="35" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <th width="331" height="35" scope="row">&nbsp;</th>
                    <td width="380" class="quastion">Mob. 08149490225, 09403747957</td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="center" valign="top" class="text">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="center" valign="top" class="text" ><div align="center"><span class="pro">Product Name :- </span><span class="style1"><?php echo $rowRs['propertytitle']; ?></span></div></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="center" valign="top" class="text" >&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="center" valign="top" class="text">
				
				<table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
                <?php  if($rowRs['FlatsImageName']){ ?>
				  <tr>
                    <td align="center"><img src="admin/upimages/<?php print $rowRs['FlatsImageName']; ?>" width="432" height="239" border="1" /></td>
                  </tr>
				  <?php }?>
                  <tr>
                    <td height="10" class="pro_bold"></td>
                  </tr>
                  <tr>
                    <td align="center" class="pro_bold"><?php print $rowRs['FlatsType'];  ?></td>
                  </tr>
                  <tr>
                    <td height="10" align="center"></td>
                  </tr>
                  <tr>
                    <td align="center" valign="top"><table width="75%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="6" colspan="2" align="left"></td>
                      </tr>
                      <tr>
                        <td width="40%" align="left" class="text_bold""> Type   :</td>
                        <td width="60%" align="left" class="text"><?php echo $rowRs['FlatsType']; ?> </td>
                      </tr>
                      <tr>
                        <td height="6" colspan="2" align="left" ></td>
                      </tr>
                      <tr>
                        <td align="left" class="text_bold"> Size   :</td>
                        <td align="left" class="text"><?php echo $rowRs['FlatsSize']; ?></td>
                      </tr>
                      <tr>
                        <td height="6" colspan="2" align="left" ></td>
                      </tr>
                      <tr>
                        <td align="left" class="text_bold"> Location :</td>
                        <td align="left" class="text"><?php echo $rowRs['FlatsLocation']; ?></td>
                      </tr>
                      <tr>
                        <td height="6" colspan="2" align="left" ></td>
                      </tr>
                      <tr>
                        <td align="left" class="text_bold"> Address :</td>
                        <td align="left" class="text"><?php echo $rowRs['addres']; ?></td>
                      </tr>
                      <tr>
                        <td height="6" colspan="2" align="left" ></td>
                      </tr>
                      <tr>
                        <td align="left" class="text_bold"> Cost &nbsp; :</td>
                        <td align="left" class="text"><?php echo $rowRs['FlatsCost']." ".$rowRs['moneytype']; ?></td>
                      </tr>
                      <tr>
                        <td height="6" colspan="2" align="left" ></td>
                      </tr>
                      <tr>
                        <td align="left" class="text_bold">Description ; </td>
                        <td align="left" class="text"><?php echo $rowRs['prop_desc']; ?></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="left" class="text_bold">&nbsp;</td>
                        </tr>
                      <tr>
                        <td align="left" class="text_bold"> Floor &nbsp; :</td>
                        <td align="left" class="text"><?php echo $rowRs['FlatsFloor']; ?> </td>
                      </tr>
                      <?php if($rowRs['bedroom']){ ?>
                      <tr>
                        <td height="6" colspan="2" align="left" ></td>
                      </tr>
                      <tr>
                        <td align="left" class="text_bold">Bed Room &nbsp; :</td>
                        <td align="left" class="text"><?php echo $rowRs['bedroom']." "."BHK"; ?> </td>
                      </tr>
                     
                      
                      <?php }?>
                      <tr>
                        <td height="6" colspan="2" align="left" ></td>
                      </tr>
                      <?php   if($rowRs['vedio']){  ?>
                      <tr>
                        <td colspan="2" align="left" class="text_bold">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="left" class="text_bold"><span class="pro_bold">Flats Video Clip</span> <img src="images/video.gif" width="23" height="17" />&nbsp; :</td>
                        <td align="left" class="text"><a href="vedio.php?Id=<?php echo $rowRs[id]; ?>" target="_blank">Click here view Video Clip </a></td>
                      </tr>
                      <?php }?>
                      <tr>
                        <td height="3" colspan="2" align="left" ></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                </table>				</td>
                <td>&nbsp;</td>
              </tr>
              
              <tr>
                <td width="15">&nbsp;</td>
                <td width="688" align="center" valign="top" class="text"><p>&nbsp;</p>
                  <p><br />
                  </p></td>
                <td width="9">&nbsp;</td>
              </tr>
              
            </table></td>
            <td width="290" valign="top"><table width="290" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/left.gif" width="289" height="3" /></td>
              </tr>
              <tr>
                <td valign="top" background="images/left_bg.gif"><table width="290" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="2" colspan="3"></td>
                  </tr>
                  <tr>
                    <td width="25">&nbsp;</td>
                    <td width="243"><img src="images/contact_us_for_enquiry.gif" width="224" height="31" /></td>
                    <td width="22">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><form name="contact_us" id="contact_us" method="post" action="#" onSubmit="return vailid();">
					
					<table width="100%" border="0" cellspacing="0" cellpadding="0">			
                        <tr>
                          <td width="4%">&nbsp;</td>
                          <td width="26%" class="text">Name</td>
                          <td width="3%" class="text">:</td>
                          <td width="67%"><input name="name" type="text" class="text" id="name" size="25"/></td>
                        </tr>
                        <tr>
                          <td height="2" colspan="4"></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td class="text">Email Id </td>
                          <td class="text">:</td>
                          <td><input name="emailid" type="text" class="text" id="emailid" size="25" /></td>
                        </tr>
                        <tr>
                          <td height="2" colspan="4"></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td class="text">Contact no</td>
                          <td class="text">:</td>
                          <td><input name="cellNo" type="text" class="text" id="cellNo" size="25" /></td>
                        </tr>
                        <tr>
                          <td height="2" colspan="4"></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td class="text">Address</td>
                          <td class="text">:</td>
                          <td><textarea name="address" cols="25" rows="3" class="text" id="address"></textarea></td>
                        </tr>
                        <tr>
                          <td height="2" colspan="4"></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td class="text">Description</td>
                          <td class="text">:</td>
                          <td><textarea name="descrap" cols="25" rows="3" class="text" id="descrap"></textarea></td>
                        </tr>
                        <tr>
                          <td height="3" colspan="4"></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td class="textbold">&nbsp;</td>
                          <td>&nbsp;</td>
                          <td><input name="Submit" type="submit" class="text" value="Submit" />                          </td>
                        </tr>
                     </table>	
					 
					 
					 
					 
		</form>
		</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align="left">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align="left">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align="left" class="pro">JMAX Real Estate </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align="left"><img src="images/line.gif" width="229" height="6" /></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align="left" class="text"><p>Shop No. :- 111, </p>                      </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align="left"><span class="text">First Floor ,
Vardhman Mall , </span></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align="left"><span class="text">Bandra (west),</span></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align="left"><span class="text">MUMBAI-410019</span></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align="left">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align="left"><span class="text_bold">Mobile:-</span><span class="text">+91-8149490225, 9403747957 </span></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align="left"><span class="text_bold">Email:-</span><a href="mailto:satyammutha@gmail.com">satyammutha@gmail.com</a></td>
                    <td>&nbsp;</td>
                  </tr>
                  
                  <tr>
                    <td>&nbsp;</td>
                    <td align="left">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><img src="images/left_bottom.gif" width="289" height="3" /></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="38" align="center" bgcolor="#d26f36"><?php  include('footer.php')?></td>
  </tr>
</table>
</body>
</html>
