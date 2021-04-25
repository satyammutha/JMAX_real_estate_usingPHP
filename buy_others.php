<?php
include("openconnection.php"); 
error_reporting(E_PARSE);
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
function getSelect(str)
{

var selbox = document.search.budget2;
 selbox.options.length = 0;
 if(str =="<10 Lacs" ||str=="0")
 {
selbox.options[selbox.options.length] = new Option('Max','0');

}
 
 if(str=="5000")
 {

selbox.options[selbox.options.length] = new Option('7000','7000');
selbox.options[selbox.options.length] = new Option('10000','10000');
selbox.options[selbox.options.length] = new Option('12000','12000');
selbox.options[selbox.options.length] = new Option('15000','15000');	
selbox.options[selbox.options.length] = new Option('20000','20000');	
selbox.options[selbox.options.length] = new Option('25000','25000');	
selbox.options[selbox.options.length] = new Option('30000','30000');	
selbox.options[selbox.options.length] = new Option('35000','35000');	
selbox.options[selbox.options.length] = new Option('40000','40000');	
selbox.options[selbox.options.length] = new Option('45000','45000');	
selbox.options[selbox.options.length] = new Option('50000','50000');	
selbox.options[selbox.options.length] = new Option('60000','60000');						    
selbox.options[selbox.options.length] = new Option('70000','70000');	
selbox.options[selbox.options.length] = new Option('75000','75000');	
selbox.options[selbox.options.length] = new Option('80000','80000');	
selbox.options[selbox.options.length] = new Option('85000','85000');	
selbox.options[selbox.options.length] = new Option('90000','90000');	
selbox.options[selbox.options.length] = new Option('95000','95000');	
selbox.options[selbox.options.length] = new Option('1 Lacs','1 Lacs');
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
							
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
 
 
if(str=="7000")
 {


selbox.options[selbox.options.length] = new Option('10000','10000');
selbox.options[selbox.options.length] = new Option('12000','12000');
selbox.options[selbox.options.length] = new Option('15000','15000');	
selbox.options[selbox.options.length] = new Option('20000','20000');	
selbox.options[selbox.options.length] = new Option('25000','25000');	
selbox.options[selbox.options.length] = new Option('30000','30000');	
selbox.options[selbox.options.length] = new Option('35000','35000');	
selbox.options[selbox.options.length] = new Option('40000','40000');	
selbox.options[selbox.options.length] = new Option('45000','45000');	
selbox.options[selbox.options.length] = new Option('50000','50000');	
selbox.options[selbox.options.length] = new Option('60000','60000');						    
selbox.options[selbox.options.length] = new Option('70000','70000');	
selbox.options[selbox.options.length] = new Option('75000','75000');	
selbox.options[selbox.options.length] = new Option('80000','80000');	
selbox.options[selbox.options.length] = new Option('85000','85000');	
selbox.options[selbox.options.length] = new Option('90000','90000');	
selbox.options[selbox.options.length] = new Option('95000','95000');	
selbox.options[selbox.options.length] = new Option('1 Lacs','1 Lacs');
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
							
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
  
 if(str=="10000")
 {


selbox.options[selbox.options.length] = new Option('12000','12000');
selbox.options[selbox.options.length] = new Option('15000','15000');	
selbox.options[selbox.options.length] = new Option('20000','20000');	
selbox.options[selbox.options.length] = new Option('25000','25000');	
selbox.options[selbox.options.length] = new Option('30000','30000');	
selbox.options[selbox.options.length] = new Option('35000','35000');	
selbox.options[selbox.options.length] = new Option('40000','40000');	
selbox.options[selbox.options.length] = new Option('45000','45000');	
selbox.options[selbox.options.length] = new Option('50000','50000');	
selbox.options[selbox.options.length] = new Option('60000','60000');						    
selbox.options[selbox.options.length] = new Option('70000','70000');	
selbox.options[selbox.options.length] = new Option('75000','75000');	
selbox.options[selbox.options.length] = new Option('80000','80000');	
selbox.options[selbox.options.length] = new Option('85000','85000');	
selbox.options[selbox.options.length] = new Option('90000','90000');	
selbox.options[selbox.options.length] = new Option('95000','95000');	
selbox.options[selbox.options.length] = new Option('1 Lacs','1 Lacs');	
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
						
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
  
 if(str=="12000")
 {

selbox.options[selbox.options.length] = new Option('15000','15000');	
selbox.options[selbox.options.length] = new Option('20000','20000');	
selbox.options[selbox.options.length] = new Option('25000','25000');	
selbox.options[selbox.options.length] = new Option('30000','30000');	
selbox.options[selbox.options.length] = new Option('35000','35000');	
selbox.options[selbox.options.length] = new Option('40000','40000');	
selbox.options[selbox.options.length] = new Option('45000','45000');	
selbox.options[selbox.options.length] = new Option('50000','50000');	
selbox.options[selbox.options.length] = new Option('60000','60000');						    
selbox.options[selbox.options.length] = new Option('70000','70000');	
selbox.options[selbox.options.length] = new Option('75000','75000');	
selbox.options[selbox.options.length] = new Option('80000','80000');	
selbox.options[selbox.options.length] = new Option('85000','85000');	
selbox.options[selbox.options.length] = new Option('90000','90000');	
selbox.options[selbox.options.length] = new Option('95000','95000');	
selbox.options[selbox.options.length] = new Option('1 Lacs','1 Lacs');	
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
						
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
   
 
   
 if(str=="15000")
 {

	
selbox.options[selbox.options.length] = new Option('20000','20000');	
selbox.options[selbox.options.length] = new Option('25000','25000');	
selbox.options[selbox.options.length] = new Option('30000','30000');	
selbox.options[selbox.options.length] = new Option('35000','35000');	
selbox.options[selbox.options.length] = new Option('40000','40000');	
selbox.options[selbox.options.length] = new Option('45000','45000');	
selbox.options[selbox.options.length] = new Option('50000','50000');	
selbox.options[selbox.options.length] = new Option('60000','60000');						    
selbox.options[selbox.options.length] = new Option('70000','70000');	
selbox.options[selbox.options.length] = new Option('75000','75000');
selbox.options[selbox.options.length] = new Option('80000','80000');	
selbox.options[selbox.options.length] = new Option('85000','85000');	
selbox.options[selbox.options.length] = new Option('90000','90000');	
selbox.options[selbox.options.length] = new Option('95000','95000');	
selbox.options[selbox.options.length] = new Option('1 Lacs','1 Lacs');	
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
						
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
   
  if(str=="20000")
 {

	
selbox.options[selbox.options.length] = new Option('25000','25000');	
selbox.options[selbox.options.length] = new Option('30000','30000');	
selbox.options[selbox.options.length] = new Option('35000','35000');	
selbox.options[selbox.options.length] = new Option('40000','40000');	
selbox.options[selbox.options.length] = new Option('45000','45000');	
selbox.options[selbox.options.length] = new Option('50000','50000');	
selbox.options[selbox.options.length] = new Option('60000','60000');						    
selbox.options[selbox.options.length] = new Option('70000','70000');	
selbox.options[selbox.options.length] = new Option('75000','75000');
selbox.options[selbox.options.length] = new Option('80000','80000');	
selbox.options[selbox.options.length] = new Option('85000','85000');	
selbox.options[selbox.options.length] = new Option('90000','90000');	
selbox.options[selbox.options.length] = new Option('95000','95000');	
selbox.options[selbox.options.length] = new Option('1 Lacs','1 Lacs');
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
							
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
 if(str=="25000")
 {
selbox.options[selbox.options.length] = new Option('30000','30000');	
selbox.options[selbox.options.length] = new Option('35000','35000');	
selbox.options[selbox.options.length] = new Option('40000','40000');	
selbox.options[selbox.options.length] = new Option('45000','45000');	
selbox.options[selbox.options.length] = new Option('50000','50000');	
selbox.options[selbox.options.length] = new Option('60000','60000');						    
selbox.options[selbox.options.length] = new Option('70000','70000');	
selbox.options[selbox.options.length] = new Option('75000','75000');	
selbox.options[selbox.options.length] = new Option('80000','80000');	
selbox.options[selbox.options.length] = new Option('85000','85000');	
selbox.options[selbox.options.length] = new Option('90000','90000');	
selbox.options[selbox.options.length] = new Option('95000','95000');	
selbox.options[selbox.options.length] = new Option('1 Lacs','1 Lacs');	
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
						
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
 
 
 if(str=="30000")
 {
	
selbox.options[selbox.options.length] = new Option('35000','35000');	
selbox.options[selbox.options.length] = new Option('40000','40000');	
selbox.options[selbox.options.length] = new Option('45000','45000');	
selbox.options[selbox.options.length] = new Option('50000','50000');	
selbox.options[selbox.options.length] = new Option('60000','60000');						    
selbox.options[selbox.options.length] = new Option('70000','70000');	
selbox.options[selbox.options.length] = new Option('75000','75000');
selbox.options[selbox.options.length] = new Option('80000','80000');	
selbox.options[selbox.options.length] = new Option('85000','85000');	
selbox.options[selbox.options.length] = new Option('90000','90000');	
selbox.options[selbox.options.length] = new Option('95000','95000');	
selbox.options[selbox.options.length] = new Option('1 Lacs','1 Lacs');
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
							
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
 
  if(str=="40000")
 {
	
selbox.options[selbox.options.length] = new Option('45000','45000');	
selbox.options[selbox.options.length] = new Option('50000','50000');	
selbox.options[selbox.options.length] = new Option('60000','60000');						    
selbox.options[selbox.options.length] = new Option('70000','70000');	
selbox.options[selbox.options.length] = new Option('75000','75000');
selbox.options[selbox.options.length] = new Option('80000','80000');	
selbox.options[selbox.options.length] = new Option('85000','85000');	
selbox.options[selbox.options.length] = new Option('90000','90000');	
selbox.options[selbox.options.length] = new Option('95000','95000');	
selbox.options[selbox.options.length] = new Option('1 Lacs','1 Lacs');
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
							
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
 
 if(str=="45000")
 {
selbox.options[selbox.options.length] = new Option('50000','50000');	
selbox.options[selbox.options.length] = new Option('60000','60000');						    
selbox.options[selbox.options.length] = new Option('70000','70000');	
selbox.options[selbox.options.length] = new Option('75000','75000');
selbox.options[selbox.options.length] = new Option('80000','80000');	
selbox.options[selbox.options.length] = new Option('85000','85000');	
selbox.options[selbox.options.length] = new Option('90000','90000');	
selbox.options[selbox.options.length] = new Option('95000','95000');	
selbox.options[selbox.options.length] = new Option('1 Lacs','1 Lacs');
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
							
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}









 if(str=="50000")
 {
	
	
	
selbox.options[selbox.options.length] = new Option('60000','60000');						    
selbox.options[selbox.options.length] = new Option('70000','70000');	
selbox.options[selbox.options.length] = new Option('75000','75000');	
selbox.options[selbox.options.length] = new Option('80000','80000');	
selbox.options[selbox.options.length] = new Option('85000','85000');	
selbox.options[selbox.options.length] = new Option('90000','90000');	
selbox.options[selbox.options.length] = new Option('95000','95000');	
selbox.options[selbox.options.length] = new Option('1 Lacs','1 Lacs');
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
							
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
  
  
  if(str=="70000")
 {
	
	
						    
selbox.options[selbox.options.length] = new Option('70000','70000');	
selbox.options[selbox.options.length] = new Option('75000','75000');	
selbox.options[selbox.options.length] = new Option('80000','80000');	
selbox.options[selbox.options.length] = new Option('85000','85000');	
selbox.options[selbox.options.length] = new Option('90000','90000');	
selbox.options[selbox.options.length] = new Option('95000','95000');	
selbox.options[selbox.options.length] = new Option('1 Lacs','1 Lacs');
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
							
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
  
 if(str=="75000")
 {
	
	
selbox.options[selbox.options.length] = new Option('80000','80000');	
selbox.options[selbox.options.length] = new Option('85000','85000');	
selbox.options[selbox.options.length] = new Option('90000','90000');	
selbox.options[selbox.options.length] = new Option('95000','95000');	
selbox.options[selbox.options.length] = new Option('1 Lacs','1 Lacs');
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
							
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
   
 
 if(str=="80000")
 {
	

	
selbox.options[selbox.options.length] = new Option('85000','85000');	
selbox.options[selbox.options.length] = new Option('90000','90000');	
selbox.options[selbox.options.length] = new Option('95000','95000');	
selbox.options[selbox.options.length] = new Option('1 Lacs','1 Lacs');
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
							
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');

selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
   
 if(str=="85000")
 {
selbox.options[selbox.options.length] = new Option('90000','90000');	
selbox.options[selbox.options.length] = new Option('95000','95000');	
selbox.options[selbox.options.length] = new Option('1 Lacs','1 Lacs');
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
							
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
   
 
 if(str=="90000")
 {
	
selbox.options[selbox.options.length] = new Option('95000','95000');	
selbox.options[selbox.options.length] = new Option('1 Lacs','1 Lacs');
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
   
  
 if(str=="95000")
 {
	
	
selbox.options[selbox.options.length] = new Option('1 Lacs','1 Lacs');	
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
    
 if(str=="1 Lacs")
 {
selbox.options[selbox.options.length] = new Option('5 Lacs','5 Lacs');
selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
     
  if(str=="5 Lacs")
 {


selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
} 
  
  if(str=="7 Lacs")
 {


selbox.options[selbox.options.length] = new Option('7 Lacs','7 Lacs')	
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}  
  
 
 if(str =="10 Lacs")
 {
selbox.options[selbox.options.length] = new Option('10 Lacs','10 Lacs');
selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}
 

 
 

if (str =="20 Lacs")
 {

selbox.options[selbox.options.length] = new Option('20 Lacs','20 Lacs');
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}


if (str =="30 Lacs")
 {
selbox.options[selbox.options.length] = new Option('30 Lacs','30 Lacs');
selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}


if (str =="35 Lacs")
 {

selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}


if (str =="40 Lacs")
 {

selbox.options[selbox.options.length] = new Option('40 Lacs','40 Lacs');
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}

if (str =="50 Lacs")
 {
selbox.options[selbox.options.length] = new Option('50 Lacs','50 Lacs');
selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}


if (str =="60 Lacs")
 {

selbox.options[selbox.options.length] = new Option('60 Lacs','60 Lacs');
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}

if (str =="70 Lacs")
 {
selbox.options[selbox.options.length] = new Option('70 Lacs','70 Lacs');
selbox.options[selbox.options.length] = new Option('80 Lacs','80 Lacs');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}


if (str =="80 Lacs")
 {

selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.2 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}

if (str=="1 Crore")
 {
 alert(str)
 selbox.options[selbox.options.length] = new Option('1.2 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1 Crore','1 Crore');
selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}

if (str== "1.2 Crores")
 {

selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}





if (str =="1.4 Crores")
 {

selbox.options[selbox.options.length] = new Option('1.4 Crores','1.4 Crores');
selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}

if (str =="1.6 Crores")
 {

selbox.options[selbox.options.length] = new Option('1.6 Crores','1.6 Crores');
selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');

selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}

if (str =="1.8 Crores")
 {


selbox.options[selbox.options.length] = new Option('1.8 Crores','1.8 Crores');
selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}

if (str =="2 Crores")
 {

selbox.options[selbox.options.length] = new Option('2 Crores','2 Crores');
selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}

if (str =="2.3 Crores")
 {


selbox.options[selbox.options.length] = new Option('2.3 Crores','2.3 Crores');
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
}


if (str =="2.6 Crores")
 {
selbox.options[selbox.options.length] = new Option('2.6 Crores','2.6 Crores');
selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
 }


if (str =="3 Crores")
 {

selbox.options[selbox.options.length] = new Option('3 Crores','3 Crores');
selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
 }

if (str =="3.5 Crores")
 {


selbox.options[selbox.options.length] = new Option('3.5 Crores','3.5 Crores');
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
 }

if (str =="4 Crores")
 {
selbox.options[selbox.options.length] = new Option('4 Crores','4 Crores');
selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
 }


if (str =="4.5 Crores")
 {

selbox.options[selbox.options.length] = new Option('4.5 Crores','4.5 Crores');
selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
 }

if (str =="5 Crores")
 {

selbox.options[selbox.options.length] = new Option('5 Crores','5 Crores');
selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
 }


if (str ==">5 Crores")
 {


selbox.options[selbox.options.length] = new Option('<5 Crore','<5 Crore');
 }


}

</script>


</head>

<body>
<script language="JavaScript1.2">mmLoadMenus();</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30" align="center" background="images/bar_bg.gif"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
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
        <td height="5" colspan="2" bgcolor="#d26f36"></td>
      </tr>
      <tr>
        <td height="8" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2"><table width="1001" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="711" height="200" valign="top"><table width="711" border="0" cellspacing="0" cellpadding="0">
              <tr align="left" valign="top">
                <td width="1409" height="46" colspan="3" background="images/welcome.gif">&nbsp;</td>
              </tr>
              
              <tr>
                <td colspan="3">
				
				
				<form name="search" id="search" method="post" action="listproperty.php" >
							<table width="87%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="1"></td>
              <td width="70" valign="top" class="text_bold"> Category :</td>
              <td width="196" height="19" valign="buttom" class="text"><label>
                <input name="radiobutton" type="radio" value="Sell" checked="checked" />
                Purchase</label>
                      <label>
                      <input name="radiobutton" type="radio" value="Rent" />
                        Rent</label></td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td></td>
              <td valign="top" class="text_bold"> Type : </td>
              <td height="11" valign="top"><label>
                <select name="stype" class="text" id="stype">
                  <option value="0">Select</option>
                  <option value="Society Flat">Society Flat </option>
                  <option value="Builder Flat ">Builder Flat </option>
                  <option value="Builder Floor">Builder Floor</option>
                  <option value="DDA Flat">DDA Flat</option>
                  <option value="Commercial">Commercial</option>
                  <option value="Residential flat">Residential flat</option>
                  <option value="Residential Plot">Residential Plot</option>
                  <option value="Residential Land">Residential Land</option>
                  <option value="Industrial Plot">Industrial Plot</option>
                  <option value="Industrial Building">Industrial Building</option>
                  <option value="Independent House">Independent House</option>
                  <option value="Office Space">Office Space</option>
                  <option value="Shop">Shop</option>
                  <option value="Retail Space">Retail Space</option>
                  <option value="Hotel Space">Hotel Space</option>
                  <option value="School Space">School Space</option>
                  <option value="School Space">Kothi</option>
                </select>
              </label>              </td>
            </tr>
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td></td>
              <td valign="top" class="text_bold"> Location : </td>
              <td height="19" valign="top"><label><select name="slocation" class="text" id="slocation">
                <option value="0">Select</option>
                <option value="Delhi/NCR">Delhi/NCR</option>
                <option value="Dwarka">Dwarka</option>
				<option value="Rohini">Rohini</option>
				<option value="Pachim Vihar">Pachim Vihar</option>
				<option value="JanakPuri">JanakPuri</option>
				<option value="Noida">Noida</option>
                <option value="Faridabad">Faridabad</option>
                <option value="Ghaziabad">Ghaziabad</option>
                <option value="Gurgaon">Gurgaon</option>
                <option value="Greater Noida">Greater Noida</option>
				
				
				
              </select></label></td>
            </tr>
			<tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
			<td></td>
                      <td valign="top" class="text_bold">Budget </td>
                      <td height="11" valign="top"><label><select name="budget1" class="text" id="budget1"  >
                        <option value="0">INR</option>
                        <option value="10 Thousand">Below 10 Thousand</option>
                        <option value="10 to 20 Thousand ">10 to 20 Thousand</option>
                        <option value="20 to 30 Thousand">20 to 30 Thousand</option>
                        <option value="30 to 40 Thousand">30 to 40 Thousand</option>
                        <option value="40 to 50 Thousand">40 to 50 Thousand </option>
                        <option value="50 to 60 Thousand">50 to 60 Thousand</option>
                        <option value="60 to 70 Thousand">60 to 70 Thousand</option>
                        <option value="70 to 80 Thousand">70 to 80 Thousand</option>
                        <option value="80 to 90 Thousand">80 to 90 Thousand</option>
                        <option value="90 to 95 Thousand">90 to 95 Thousand </option>
                        <option value="1 to 5 Lacs">1 to 5 Lacs </option>
                        <option value="5 to 10 Lacs ">5 to 10 Lacs</option>
                        <option value="10  to 15 Lacs">10  to 15 Lacs</option>
                        <option value="15 to 20 Lacs">15 to 20 Lacs</option>
                        <option value="20 to 25 Lacs">20 to 25 Lacs</option>
                        <option value="25 to 30 Lacs">25 to 30 Lacs</option>
                        <option value="30 to 35 Lacs">30 to 35 Lacs</option>
                        <option value="35 to 40 Lacs">35 to 40 Lacs</option>
                        <option value="40 to 45 Lacs">40 to 45 Lacs</option>
                        <option value="50 to 55 Lacs">50 to 55 Lacs</option>
                        <option value="55 to 60 Lacs">55 to 60 Lacs</option>
                        <option value="60 to 65 Lacs">60 to 65 Lacs</option>
                        <option value="65 to 70 Lacs">65 to 70 Lacs</option>
                        <option value="70 to 75 Lacs">70 to 75 Lacs</option>
                        <option value="75 to 80 Lacs">75 to 80 Lacs</option>
                        <option value="80 to 85 Lacs">80 to 85 Lacs</option>
                        <option value="85 to 90 Lacs">85 to 90 Lacs</option>
                        <option value="90 to 95 Lacs">90 to 95 Lacs</option>
                        <option value="2 to 4 Crore">1 to 2 Crore</option>
                        <option value="2 to 4 Crore">2 to 4 Crores</option>
                        <option value="4 to 6 Crore">4 to 6 Crores</option>
                        <option value="&gt;5 Crores">&gt;6 Crores</option>
                      </select></label></td>
			</tr>
					
					<tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
					<tr>
                    <td></td>
                    <td class="text_bold">Bedroom </td>
                    <td valign="top"><label>
                      <select name="bedroom" class="text" id="bedroom">
                        <option value="0">Select</option>
                        <option value="1">1 BHK</option>
                        <option value="2">2 BHK</option>
                        <option value="3">3 BHK</option>
                        <option value="4">4 BHK</option>
                        <option value="5">5 BHK</option>
                        <option value="6">6 BHK</option>
                        <option value="7">7 BHK</option>
                        <option value="8">8 BHK</option>
                        <option value="9">9+BHK</option>
                      </select>
                    </label></td>
                  </tr>
			
			
            <tr>
              <td height="5" colspan="3"></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td valign="top"><label>
                <input name="SellRent" type="submit" class="text" value="Search" />
                </label><input name="reset" type="reset" class="text" value="Clear" />              </td>
            </tr>
          </table>
		</form>				</td>
              </tr>
            </table></td>
            <td width="290" valign="top"><?php  include('right.php')?></td>
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
