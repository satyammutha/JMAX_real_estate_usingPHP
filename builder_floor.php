
<?php
include("openconnection.php"); 
error_reporting(E_PARSE);
?>

<?php 

		{				
					
					
$query = "SELECT count(*) as num FROM addeuro WHERE (propertyCat='Sell' and  FlatsType='Builder Floor')";
}
$total_pages = mysql_fetch_array(mysql_query($query));
 $total_pages = $total_pages[num];
					
					/* Setup vars for query. */
$targetpage = "commercial.php
"; 	//your file name  (the name of this file)
$limit =15; 								//how many items to show per page
$page = $_GET['page'];
if($page) 
$start = ($page - 1) * $limit; 			//first item to display on this page
else
$start = 0;								//if no page var is given, set start to 0


					/* Get data. */
if($_POST['Submit'])
{

/*
 $sql="SELECT * FROM addeuro WHERE  propertyCat='Sell' and (FlatsType  LIKE '$stype' or FlatsLocation  LIKE '$slocation' or FlatsCost  between '$budget1' and '$budget2'')  LIMIT $start, $limit";
*/


//$sql="SELECT * FROM addeuro WHERE (propertyCat='Sell' and  FlatsType='Society Flat')";

}

		
		


else
{
$sql = "SELECT * FROM addeuro WHERE (propertyCat='Sell' and  FlatsType='Builder Floor')  LIMIT $start, $limit";
}
$result = mysql_query($sql);

/* Setup page vars for display. */
if ($page == 0) $page = 1;					//if no page var is given, default to 1.
$prev = $page - 1;							//previous page is page - 1
$next = $page + 1;							//next page is page + 1
$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
$lpm1 = $lastpage - 1;						//last page minus 1
					
					/* 
					Now we apply our rules and draw the pagination object. 
					We're actually saving the code to a variable in case we want to draw it more than once.
					*/
$pagination = "";
if($lastpage > 1)
{	
$pagination .= "<div class=\"pagination\">";
//previous button
if ($page > 1) 
	$pagination.= "<a href=\"builder_floor.php?page=$prev\">« previous</a>";
else
	$pagination.= "<span class=\"disabled\">« previous</span>";	

//pages	
if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
{	
	for ($counter = 1; $counter <= $lastpage; $counter++)
	{
		if ($counter == $page)
			$pagination.= "<span class=\"current\">$counter</span>";
		else
			$pagination.= "<a href=\"builder_floor.php?page=$counter\">$counter</a>";					
	}
}
elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
{
	//close to beginning; only hide later pages
	if($page < 1 + ($adjacents * 2))		
	{
		for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
		{
			if ($counter == $page)
				$pagination.= "<span class=\"current\">$counter</span>";
			else
				$pagination.= "<a href=\"builder_floor.php?page=$counter\">$counter</a>";					
		}
		$pagination.= "...";
		$pagination.= "<a href=\"builder_floor.php
?page=$lpm1\">$lpm1</a>";
		$pagination.= "<a href=\"builder_floor.php?page=$lastpage\">$lastpage</a>";		
	}
	//in middle; hide some front and some back
	elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
	{
		$pagination.= "<a href=\"builder_floor.php
?page=1\">1</a>";
		$pagination.= "<a href=\"builder_floor.php
?page=2\">2</a>";
		$pagination.= "...";
		for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
		{
			if ($counter == $page)
				$pagination.= "<span class=\"current\">$counter</span>";
			else
				$pagination.= "<a href=\"builder_floor.php
?page=$counter\">$counter</a>";					
		}
		$pagination.= "...";
		$pagination.= "<a href=\"builder_floor.php
?page=$lpm1\">$lpm1</a>";
		$pagination.= "<a href=\"builder_floor.php
?page=$lastpage\">$lastpage</a>";		
	}
	//close to end; only hide early pages
	else
	{
	$pagination.= "<a href=\"builder_floor.php
?page=1\">1</a>";
		$pagination.= "<a href=\"builder_floor.php
?page=2\">2</a>";
		$pagination.= "...";
		for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
		{
			if ($counter == $page)
				$pagination.= "<span class=\"current\">$counter</span>";
			else
				$pagination.= "<a href=\"builder_floor.php
?page=$counter\">$counter</a>";					
		}
	}
}

//next button
if ($page < $counter - 1) 
$pagination.= "<a href=\"builder_floor.php
?page=$next\">next »</a>";
else
	$pagination.= "<span class=\"disabled\">next »</span>";
$pagination.= "</div>\n";		
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
<link href="admin/pgstyle.css" rel="stylesheet" type="text/css" />
<link href="pgstyle.css" rel="stylesheet" type="text/css" />
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
  mm_menu_1021181416_0.addMenuItem("List&nbsp;all&nbsp;Property","location='list_all_property.php'");
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
    <td height="30" align="center" background="images/bar_bg.gif">
	
	
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
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
</table>
	
	
	</td>
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
            <td width="711" valign="top"><table width="1001" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="left" valign="top"><table width="712" height="46" border="0" cellpadding="0" cellspacing="0" background="images/builder_floor.gif">
                  <tr>
                    <th width="369" height="25" scope="row">&nbsp;</th>
                    <td width="343" align="left" valign="bottom" class="quastion">Mob. 08149490225, 09403747957</td>
                  </tr>
                  <tr>
                    <th height="21" colspan="2" scope="row"></th>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
            </tr>
        </table></td>
      </tr>
      
      <tr>
        <td align="center"><table width="900" border="1" cellpadding="0" cellspacing="1"  bordercolor="#CCCCCC">
                            <tr bgcolor="#0066CC">
                              <td width="33" height="28" bgcolor="#D26F36" class="tab">S.No</td>
							   <td width="100" bgcolor="#D26F36" class="tab">Society Name </td>
                              <td width="74" bgcolor="#D26F36" class="tab">Porperty Type </td>
                              <td width="74" bgcolor="#D26F36" class="tab">Property size</td>
                              <td width="62" bgcolor="#D26F36" class="tab">Bedroom</td>
                              <td width="82" bgcolor="#D26F36" class="tab">Location</td>
							  <td width="88" bgcolor="#D26F36" class="tab">Address</td>
                              <td width="69" bgcolor="#D26F36" class="tab">property Price</td>
                              <td width="176" bgcolor="#D26F36" class="tab">Description</td>
                              <td width="48" bgcolor="#D26F36" class="tab">Categ.</td>
                              <td width="58" bgcolor="#D26F36" class="tab"><p>View<br /> 
                                Details</p>                              </td>
                            </tr>
                            <?php
				if($total_pages>0)
				{
					 $i=1;
				while($row = mysql_fetch_array($result))
				{
			
				
				?>
                           
                            <tr class="current">
                              <td align="center" class="text"><?php echo $i;?></td>
							    <td align="left" class="text"><?php echo $row['propertytitle'];?></td>
                              <td align="left" class="text"><?php echo $row['FlatsType'];?></td>
                              <td align="justify" class="text"><?php echo $row['FlatsSize'];?> </td>
                              <td align="justify" class="text"><?php echo $row['bedroom']."BHK";?> </td>
                              <td align="justify" class="text"><?php echo $row['FlatsLocation']; ?></td>
							   <td align="justify" class="text"><?php echo $row['addres']; ?></td>
                              <td align="justify" class="text"><?php echo $row['FlatsCost']." ".$row['moneytype'];?></td>
                              <td align="justify" class="text"><div align="justify"><?php echo $row['prop_desc']; ?></div></td>
                              <td align="justify" class="text"><?php echo $row['propertyCat'];?></td>
                              <td height="25" align="center" class="more"><a href="project_details.php?Id=<?php print $row[id]; ?>"class="more">View</a></td>
                            </tr>
                            
                            <?php $i++;} } else {?>
                             <tr class="current">
                              <td class="text">&nbsp;</td>
                              <td class="text">&nbsp;</td>
                              <td colspan="3" class="text" align="center"><h3>Records Not Found</h3></td>
                              <td  class="text">&nbsp;</td>
                              <td class="text">&nbsp;</td>
                              <td height="25" align="center">&nbsp;</td>
                              <td align="center">&nbsp;</td>
                            </tr>
                            <?php  }?>
							
							 <tr class="current">
                              <td class="text">&nbsp;</td>
                              <td class="text">&nbsp;</td>
                              <td colspan="5" class="text" align="center"><?php echo $pagination;?></td>
                              <td height="25" align="center">&nbsp;</td>
                              <td align="center">&nbsp;</td>
                            </tr>
							
							
          </table></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="38" align="center" bgcolor="#d26f36"><?php  include('footer.php')?></td>
  </tr>
</table>
</body>
</html>
