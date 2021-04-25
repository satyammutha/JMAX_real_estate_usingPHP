
<?php
include("openconnection.php"); 
error_reporting(E_PARSE);
?>

<?php 

					/*listproperty.php
					Place code to connect to your DB here.
					*/
					// include your code to connect to DB.
					
					//$tbl_name="";		//your table name
					// How many adjacent pages should be shown on each side?
					$adjacents = 3;
					
					/* 
					First get total number of rows in data table. 
					If you have a WHERE clause in your query, make sure you mirror it here.
					
					
	 [radiobutton] => purchase [stype] => Commercial Plot [slocation] => Faridabad [budget] => rtrt [Submit] => Search 				
					
	*/
// buy search-------------------------------------  buy search-------------------------------------------------------------------------	
if($_POST['Submit'])
	{
$stype=$_POST['stype'];
$slocation= $_POST['slocation'];
$budget1= $_POST['budget1'];
$bedrom=$_POST['bedroom'];


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

$query="SELECT COUNT(*) as num FROM addeuro WHERE propertyCat='Sell'";
if($stype && $slocation && $budget1 && $bedrom )
{
  $query.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation' and bedroom ='$bedrom') and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";

}
else if($stype && $slocation && $budget1)
{

$query.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation')and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";

}
else if($stype && $slocation && $bedrom)
{

 $query.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation' and bedroom ='$bedrom')";

}

else if($slocation && $budget1 && $bedrom )
{
 $query.="and (FlatsLocation  LIKE '$slocation' and bedroom ='$bedrom') and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";

}

else if($stype && $budget1)
{

$query.="and (FlatsType  LIKE '$stype' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";

}	

else if($stype && $slocation)
{

 $query.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation')";

}	

else if($stype && $bedrom)
{

  $query.="and (FlatsType  LIKE '$stype' and bedroom ='$bedrom')";

}	

else if($slocation && $budget1)
{

 $query.="and (FlatsLocation  LIKE '$slocation' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";

}


else if($slocation && $bedrom)
{

 $query.="and (FlatsLocation  LIKE '$slocation' and FlatsLocation  LIKE '$slocation')";

}

else if($budget1 && $bedrom)
{
 $query.="and (bedroom='$bedrom' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";
}



else if($stype && !$slocation && !$budget1 && !$bedrom)
{

 $query.="and FlatsType  LIKE '$stype'";


}

else if(!$stype && $slocation && !$budget1 && !$bedrom)
{

 $query.="and FlatsLocation  LIKE '$slocation'";


}
else if(!$stype && !$slocation && $budget1 && !$bedrom)
{

 $query.="and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";


}

else if(!$stype && !$slocation && !$budget1 && $bedrom)
{

 $query.="and bedroom='$bedrom'";


}

else if(!$stype && !$slocation && !$budget1 && !$bedrom)
{

 $query;


}

}
//---------------------------------------------------------------------------------------------------------
else if($_POST['SellRent'])
	{
	

if($_POST['radiobutton']=='Sell')
	{
	
	$purchase='Sell';
	
	}
	if($_POST['radiobutton']=='Rent')
	{
	
	$purchase=$_POST['radiobutton'];
	}
	
$stype=$_POST['stype'];
$slocation= $_POST['slocation'];
$budget1= $_POST['budget1'];
$bedrom=$_POST['bedroom'];

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
 $query="SELECT COUNT(*) as num FROM addeuro WHERE propertyCat='$purchase'";

if($stype && $slocation && $budget1 && $bedrom )
{
 $query.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation' and bedroom ='$bedrom') and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";

}
else if($stype && $slocation && $budget1)
{

 $query.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation')and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";

}
else if($stype && $slocation && $bedrom)
{

 $query.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation' and bedroom ='$bedrom')";

}

else if($slocation && $budget1 && $bedrom )
{
 $query.="and (FlatsLocation  LIKE '$slocation' and bedroom='$bedrom') and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";

}

else if($stype && $budget1)
{

 $query.="and (FlatsType  LIKE '$stype' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";

}	

else if($stype && $slocation)
{

$query.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation')";

}	

else if($stype && $bedrom)
{

  $query.="and (FlatsType  LIKE '$stype' and bedroom ='$bedrom')";

}	

else if($slocation && $budget1)
{

 $query.="and (FlatsLocation  LIKE '$slocation' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";

}


else if($slocation && $bedrom)
{

 $query.="and (FlatsLocation  LIKE '$slocation' and FlatsLocation  LIKE '$slocation')";

}

else if($budget1 && $bedrom)
{
 $query.="and (bedroom='$bedrom' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";
}



else if($stype && !$slocation && !$budget1 && !$bedrom)
{

 $query.="and FlatsType  LIKE '$stype'";


}

else if(!$stype && $slocation && !$budget1 && !$bedrom)
{
 $query.="and FlatsLocation  LIKE '$slocation'";


}
else if(!$stype && !$slocation && $budget1 && !$bedrom)
{

$query.="and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";


}

else if(!$stype && !$slocation && !$budget1 && $bedrom)
{

 $query.="and bedroom='$bedrom'";


}

else if(!$stype && !$slocation && !$budget1 && !$bedrom)
{

 $query;


}


}
	


else if($_POST['RentTarent'])
	{

$stype=$_POST['stype'];
$slocation= $_POST['slocation'];
$budget1= $_POST['budget1'];
$bedrom=$_POST['bedroom'];




	
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

$query="SELECT COUNT(*) as num FROM addeuro WHERE propertyCat='Rent'";

if($stype && $slocation && $budget1&& $bedrom)
{
 $query.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation' and bedroom='$bedrom') and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";

}
else if($stype && $slocation && $budget1)
{

 $query.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation' and bedroom='$bedrom')";

}

else if($stype && $budget1 && $bedrom)
{

 $query.="and (FlatsType  LIKE '$stype' and moneytype='$b3',nd bedroom='$bedrom' and FlatsCost  between '$pieces1' and '$b2')";

}	
	

else if($slocation && $budget1 && $bedrom)
{

 $query.="and (FlatsLocation LIKE '$slocation' and moneytype='$b3' and bedroom='$bedrom' and FlatsCost  between '$pieces1' and '$b2')";

}
	
else if($slocation && $budget1)
{

 $query.="and (FlatsLocation  LIKE '$slocation' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";

}

else if($stype && $budget1)
{

 $query.="and (FlatsType  LIKE '$stype' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";

}

else if($bedrom && $budget1)
{

 $query.="and (bedroom='$bedrom' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";

}

else if($stype && !$slocation && !$budget1&& !$bedrom)
{

$query.="and FlatsType  LIKE '$stype'";


}


else if(!$stype && $slocation && !$budget1&& !$bedrom)
{

$query.=" and FlatsLocation  LIKE '$slocation'";


}
else if(!$stype && !$slocation && $budget1&& !$bedrom)
{

$query.="and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')";


}

else if(!$stype && !$slocation && !$budget1&& $bedrom)
{

 $query.="and bedroom='$bedrom'";


}


else if(!$stype && !$slocation && !$budget1&& !$bedrom)
{

 $query;


}

	
	
	}

	
	
					
	else
	{				
					
					
$query = "SELECT COUNT(*) as num FROM addeuro";
}
$total_pages = mysql_fetch_array(mysql_query($query));
 $total_pages = $total_pages[num];
					
					/* Setup vars for query. */
$targetpage = "listproperty.php
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


$sql="SELECT * FROM addeuro WHERE propertyCat='Sell'";

if($stype && $slocation && $budget1 && $bedrom )
{
 $sql.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation' and bedroom ='$bedrom') and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2') LIMIT $start, $limit ";

}
else if($stype && $slocation && $budget1)
{

 $sql.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation')and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2') LIMIT $start, $limit ";

}
else if($stype && $slocation && $bedrom)
{

 $sql.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation' and bedroom ='$bedrom') LIMIT $start, $limit ";

}

else if($slocation && $budget1 && $bedrom )
{
 $sql.="and (FlatsLocation  LIKE '$slocation' and bedroom ='$bedrom') and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2') LIMIT $start, $limit";

}

else if($stype && $budget1)
{

$sql.="and (FlatsType  LIKE '$stype' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2') LIMIT $start, $limit";

}	

else if($stype && $slocation)
{

 $sql.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation') LIMIT $start, $limit";

}	

else if($stype && $bedrom)
{

 $sql.="and (FlatsType  LIKE '$stype' and bedroom ='$bedrom') LIMIT $start, $limit";

}	

else if($slocation && $budget1)
{

  $sql.="and (FlatsLocation  LIKE '$slocation' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2') LIMIT $start, $limit ";

}


else if($slocation && $bedrom)
{

 $sql.="and (FlatsLocation  LIKE '$slocation' and FlatsLocation  LIKE '$slocation') LIMIT $start, $limit";

}

else if($budget1 && $bedrom)
{
 $sql.="and (bedroom='$bedrom' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2') LIMIT $start, $limit";
}



else if($stype && !$slocation && !$budget1 && !$bedrom)
{

 $sql.="and FlatsType  LIKE '$stype' LIMIT $start, $limit";


}

else if(!$stype && $slocation && !$budget1 && !$bedrom)
{

 $sql.="and FlatsLocation  LIKE '$slocation' LIMIT $start, $limit";


}
else if(!$stype && !$slocation && $budget1 && !$bedrom)
{

 $sql.="and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2') LIMIT $start, $limit";


}

else if(!$stype && !$slocation && !$budget1 && $bedrom)
{

$sql.="and bedroom='$bedrom' LIMIT $start, $limit";


}

else if(!$stype && !$slocation && !$budget1 && !$bedrom)
{

 $sql."LIMIT $start, $limit";


}



}


else if($_POST['RentTarent'])
	{

	
 $sql="SELECT * FROM addeuro WHERE propertyCat='Rent'";

if($stype && $slocation && $budget1&& $bedrom)
{
$sql.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation' and bedroom='$bedrom') and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2') LIMIT $start, $limit";

}
else if($stype && $slocation && $budget1)
{

$sql.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation' and bedroom='$bedrom') LIMIT $start, $limit";

}

else if($stype && $budget1 && $bedrom)
{

$sql.="and (FlatsType  LIKE '$stype' and moneytype='$b3',nd bedroom='$bedrom' and FlatsCost  between '$pieces1' and '$b2') limit $start, $limit";

}	
	

else if($slocation && $budget1 && $bedrom)
{

 $sql.="and (FlatsLocation LIKE '$slocation' and moneytype='$b3',nd bedroom='$bedrom' and FlatsCost  between '$pieces1' and '$b2')limit $start, $limit";;

}
	
else if($slocation && $budget1)
{

 $sql.="and (FlatsLocation  LIKE '$slocation' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')limit $start, $limit";

}

else if($stype && $budget1)
{

 $sql.="and (FlatsType  LIKE '$stype' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')limit $start, $limit";

}

else if($bedrom && $budget1)
{

 $sql.="and (bedroom='$bedrom' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')$start, $limit";

}

else if($stype && !$slocation && !$budget1&& !$bedrom)
{

$sql.="and FlatsType  LIKE '$stype' limit $start, $limit";


}


else if(!$stype && $slocation && !$budget1&& !$bedrom)
{

$sql.=" and FlatsLocation  LIKE '$slocation'limit $start, $limit";


}
else if(!$stype && !$slocation && $budget1&& !$bedrom)
{

$sql.="and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2')$start, $limit";


}

else if(!$stype && !$slocation && !$budget1&& $bedrom)
{

 $sql.="and bedroom='$bedrom' limit $start, $limit";


}



else if(!$stype && !$slocation && !$budget1&& !$bedrom)
{ 
 $sql."LIMIT $start, $limit" ;
}


	
	}
	
else if($_POST['SellRent'])
	{
	
 $sql="SELECT * FROM addeuro WHERE propertyCat='$purchase'";




if($stype && $slocation && $budget1 && $bedrom )
{
  $sql.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation' and bedroom ='$bedrom') and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2') LIMIT $start, $limit";

}
else if($stype && $slocation && $budget1)
{

  $sql.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation')and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2') LIMIT $start, $limit";

}
else if($stype && $slocation && $bedrom)
{

  $sql.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation' and bedroom ='$bedrom')";

}

else if($slocation && $budget1 && $bedrom )
{
  $sql.="and (FlatsLocation  LIKE '$slocation' and bedroom ='$bedrom') and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2') LIMIT $start, $limit";

}

else if($stype && $budget1)
{

 $sql.="and (FlatsType  LIKE '$stype' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2') LIMIT $start, $limit";

}	

else if($stype && $slocation)
{

  $sql.="and (FlatsType  LIKE '$stype' and FlatsLocation  LIKE '$slocation') LIMIT $start, $limit";

}	

else if($stype && $bedrom)
{

   $sql.="and (FlatsType  LIKE '$stype' and bedroom ='$bedrom') LIMIT $start, $limit";

}	

else if($slocation && $budget1)
{

  $sql.="and (FlatsLocation  LIKE '$slocation' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2') LIMIT $start, $limit";

}


else if($slocation && $bedrom)
{

  $sql.="and (FlatsLocation  LIKE '$slocation' and FlatsLocation  LIKE '$slocation') LIMIT $start, $limit";

}

else if($budget1 && $bedrom)
{
  $sql.="and (bedroom='$bedrom' and moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2') LIMIT $start, $limit";
}



else if($stype && !$slocation && !$budget1 && !$bedrom)
{

  $sql.="and FlatsType  LIKE '$stype' LIMIT $start, $limit";


}

else if(!$stype && $slocation && !$budget1 && !$bedrom)
{

 $sql.="and FlatsLocation  LIKE '$slocation' LIMIT $start, $limit";


}
else if(!$stype && !$slocation && $budget1 && !$bedrom)
{

 $sql.="and (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2') LIMIT $start, $limit";


}

else if(!$stype && !$slocation && !$budget1 && $bedrom)
{

 $sql.="and bedroom='$bedrom' LIMIT $start, $limit";


}

else if(!$stype && !$slocation && !$budget1 && !$bedrom)
{

 $sql."LIMIT $start, $limit" ;


}

}
	
// end sell rent	
	
	
	
	
	
	
	
	
	
	
/*if($_POST['radiobutton']=='Sell')
	{
	
	$purchase=$_POST['radiobutton'];
	
	}
	if($_POST['radiobutton']=='Rent')
	{
	
	$purchase=$_POST['radiobutton'];
	}
		
	$stype=$_POST['stype'];
	$slocation= $_POST['slocation'];
	$budget1= $_POST['budget1'];
	$budget2= $_POST['budget2'];
	
	 $sql="SELECT * FROM addeuro WHERE propertyCat='$purchase'  and
(FlatsType  LIKE '$stype' or FlatsLocation  LIKE '$slocation') or (moneytype='$b3' and FlatsCost  between '$pieces1' and '$b2') LIMIT $start, $limit";

 /*
 $sql="SELECT * FROM addeuro WHERE propertyCat='$purchase' and(
 FlatsType  LIKE '$stype' or FlatsLocation  LIKE '$slocation' or FlatsCost  between '$budget1' and '$budget2') LIMIT $start, $limit";
*/		
		
		


else
{
$sql = "SELECT * FROM addeuro  LIMIT $start, $limit";
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
	$pagination.= "<a href=\"listproperty.php?page=$prev\">« previous</a>";
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
			$pagination.= "<a href=\"listproperty.php?page=$counter\">$counter</a>";					
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
				$pagination.= "<a href=\"listproperty.php?page=$counter\">$counter</a>";					
		}
		$pagination.= "...";
		$pagination.= "<a href=\"listproperty.php
?page=$lpm1\">$lpm1</a>";
		$pagination.= "<a href=\"listproperty.php?page=$lastpage\">$lastpage</a>";		
	}
	//in middle; hide some front and some back
	elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
	{
		$pagination.= "<a href=\"listproperty.php
?page=1\">1</a>";
		$pagination.= "<a href=\"listproperty.php
?page=2\">2</a>";
		$pagination.= "...";
		for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
		{
			if ($counter == $page)
				$pagination.= "<span class=\"current\">$counter</span>";
			else
				$pagination.= "<a href=\"listproperty.php
?page=$counter\">$counter</a>";					
		}
		$pagination.= "...";
		$pagination.= "<a href=\"listproperty.php
?page=$lpm1\">$lpm1</a>";
		$pagination.= "<a href=\"listproperty.php
?page=$lastpage\">$lastpage</a>";		
	}
	//close to end; only hide early pages
	else
	{
	$pagination.= "<a href=\"listproperty.php
?page=1\">1</a>";
		$pagination.= "<a href=\"listproperty.php
?page=2\">2</a>";
		$pagination.= "...";
		for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
		{
			if ($counter == $page)
				$pagination.= "<span class=\"current\">$counter</span>";
			else
				$pagination.= "<a href=\"listproperty.php
?page=$counter\">$counter</a>";					
		}
	}
}

//next button
if ($page < $counter - 1) 
$pagination.= "<a href=\"listproperty.php
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
<title>Welcome to Dwarka Real Estate</title>
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
</head>

<body>
<script language="JavaScript1.2">mmLoadMenus();</script>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
</table>
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
                <td align="left"><table width="712" height="46" border="0" cellpadding="0" cellspacing="0" background="images/list_all_property.gif">
                  <tr>
                    <th width="300" scope="row">&nbsp;</th>
                    <td width="412" align="left" valign="middle" class="quastion"><table width="350" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <th height="21" align="left" valign="middle" class="quastion" scope="row">Mob. 09899320481, 08826303700</th>
                        </tr>
                        <tr>
                          <th height="12" scope="row"></th>
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
        </table></td>
      </tr>
      
      <tr>
        <td align="center"><table width="900" border="1" cellpadding="0" cellspacing="1"  bordercolor="#CCCCCC">
                            <tr bgcolor="#0066CC">
                              <td width="37" height="28" bgcolor="#D26F36" class="tab">S.No</td>
							   <td width="120" bgcolor="#D26F36" class="tab">Society Name </td>
                              <td width="120" bgcolor="#D26F36" class="tab">Porperty Type </td>
                              <td width="99" bgcolor="#D26F36" class="tab">Property size</td>
                              <td width="77" bgcolor="#D26F36" class="tab">Bedroom</td>
                              <td width="125" bgcolor="#D26F36" class="tab">Location</td>
							  <td width="170" bgcolor="#D26F36" class="tab">Address</td>
                              <td width="90" bgcolor="#D26F36" class="tab">property Price</td>
                              <td width="59" bgcolor="#D26F36" class="tab">Category</td>
                              <td width="93" bgcolor="#D26F36" class="tab">View Details</td>
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
                            </tr>
                            <?php  }?>
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
