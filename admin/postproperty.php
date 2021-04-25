<?php 
ob_start();
session_start();
error_reporting(E_PARSE);
include("openconnection.php"); 
?>
<?php 
if($_REQUEST[mode]=="DEL" && $_REQUEST[Id])
{

mysql_query("DELETE from postpropery  where postpropert_id='$_REQUEST[Id]'");
?>
<script language="javascript">
confirm ("Are you sure to delete record?")
window.location="postproperty.php";
</script>

<?php
}

?>
<?php 




	/*
		Place code to connect to your DB here.
	*/
		// include your code to connect to DB.

	//$tbl_name="";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
 $query = "SELECT COUNT(*) as num FROM postpropery  order by postpropert_id desc ";
	$total_pages = mysql_fetch_array(mysql_query($query));
	 $total_pages = $total_pages[num];
	
	/* Setup vars for query. */
	$targetpage = "postproperty.php"; 	//your file name  (the name of this file)
	$limit = 10; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT * FROM postpropery order by postpropert_id desc   LIMIT $start, $limit";
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
			$pagination.= "<a href=\"postproperty.php?page=$prev\">« previous</a>";
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
					$pagination.= "<a href=\"postproperty.php?page=$counter\">$counter</a>";					
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
						$pagination.= "<a href=\"postproperty.php?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"postproperty.php?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"postproperty.php?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"postproperty.php?page=1\">1</a>";
				$pagination.= "<a href=\"postproperty.php?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"postproperty.php?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"postproperty.php?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"postproperty.php?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"postproperty.php?page=1\">1</a>";
				$pagination.= "<a href=\"postproperty.php?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"postproperty.php?page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"postproperty.php?page=$next\">next »</a>";
		else
			$pagination.= "<span class=\"disabled\">next »</span>";
		$pagination.= "</div>\n";		
	}

	





 ?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Language" content="en-us">
<title>View Detail</title>

<link href="style.css" rel=stylesheet type=text/css>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<script language="javascript">
function check(str)

{
alert(str)



} 
</script>
</head>
<link href="pgstyle.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="AutoComplete.css" media="screen" type="text/css">
<script language="javascript" type="text/javascript" src="AutoComplete.js"></script>
<body bgcolor="#FFFFFF" topmargin="0" leftmargin="0" class="body">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
      </tr>
      <?php include "header.php" ?>
      <tr>
        <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
            <tr>
              <td width="14">&nbsp;</td>
              <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tr>
                    <td width="50"><img id="layoyt_5" src="images/layoyt_14.gif" width="416" height="41" alt="" /></td>
                    <td width="715" class="menubar">&nbsp;</td>
                    <td width="203" background="images/layoyt_20.gif" class="menubar2">
View
News                    </td>
                  </tr>
              </table></td>
              <td width="13">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          <tr>
              <td>&nbsp;</td>
            <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="24%" height="243" valign="middle"><?php include"menu.php";?></td>
                    <td width="0%">&nbsp;</td>
                    <td width="76%" align="left" valign="top">
<form name="frmform" method="POST" action="" onSubmit="return onSubmitForm();">
                    
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F6F6F6">
                        <tr>
                          <td width="2%"><img src="images/layoyt_32.gif" alt="Corner1" name="layoyt_12" width="14" height="12" id="layoyt_12" /></td>
                          <td width="96%" bgcolor="#F6F6F6"><img src="images/spacer.gif" width="1" height="1" /></td>
                          <td width="2%"><img id="layoyt_84" src="images/layoyt_34.gif" width="13" height="12" alt="Corner2" /></td>
                        </tr>
                        <tr>
                          <td bgcolor="#F6F6F6">&nbsp;</td>
                          <td bgcolor="#F6F6F6"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                              <tr>
                                <td width="2%"><img id="layoyt_87" src="images/layoyt_42.gif" width="19" height="16" alt="corner1" /></td>
                                <td width="96%" background="images/layoyt_44.gif"><img src="images/spacer.gif" width="1" height="1" /></td>
                                <td width="2%"><img id="layoyt_88" src="images/layoyt_47.gif" width="17" height="16" alt="Corner2" /></td>
                              </tr>
                              <tr>
                                <td background="images/layoyt_53.gif">&nbsp;</td>
                                <td valign="middle"><table width="100%" border="0">
                                    <tr>
                                      <td width="40%" height="9"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tr>
                                          <td width="20">&nbsp;</td>
                                          <td width="20">&nbsp;</td>
                                          <td width="24">&nbsp;</td>
                                          <td width="20">&nbsp;</td>
                                          <td width="59">&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                      </table></td>
                                      <td colspan="2">&nbsp;</td>
                                      <td width="49%" align="right">
<a href="addEuro.php"></a></td>
                                    </tr>
                                    <tr>
                                      <td colspan="4" align="left" valign="top"><img src="images/spacer.gif" alt="Spacer" width="1" height="1" />
                                        <table  width="100%" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="1%" class="txtb1"><!--<input type="checkbox" name="chkAll" value="checkall" onclick="check(document.frmform.list)"/>--></td>
                                            <td width="9%" class="txtb1"><div align="center">Property Type </div></td>
											 <td width="11%" class="txtb1"><div align="center">property Desc </div></td>
                                            <td width="9%" class="txtb1"><div align="center">Property Address </div></td>
                                            <td width="9%" class="txtb1"> <div align="center">Location </div></td>
                                            <td width="7%" class="txtb1"><div align="center">Cost </div></td>
                                            <td width="9%" class="txtb1"><div align="center">Category</div></td>
                                            <td width="9%" class="txtb1"><div align="center">Name</div></td>
											 <td width="10%" class="txtb1"><div align="center">contact<br />
											   no</div></td>
											 <td width="10%" class="txtb1"><div align="center">Email Id </div></td>
											 <td width="9%" class="txtb1"><div align="center">Date Posted </div></td>
											 <td width="7%" class="txtb1">&nbsp;</td>
                                          </tr>
										  
										 <?php 
										 $i=1;
										 while($row = mysql_fetch_array($result))
														{
	 												?> 
                                          <tr>
     <td class="txt-tb1"></td>
                                            <td class="txt-tb1"><?php echo $row[PropertyType];?> </td>
											 <td class="txt-tb1"><?php echo $row[PropertyDescription];?></td>
											 <td class="txt-tb1"><?php echo $row[PropertyAddress];?></td>
											 
											  <td class="txt-tb1"><?php echo $row[City];?></td>
							<td class="txt-tb1"><?php echo $row[price]." "."to".$row[price2]." ".$row[moneytype];?></td>
							
							<td class="txt-tb1"><?php echo $row[propertcategory];?></td>
							<td class="txt-tb1"><?php echo $row[Name];?></td>
												<td class="txt-tb1"><?php echo $row[PhoneNo];?></td>
												<td class="txt-tb1"><?php echo $row[emaiId];?></td>
												<td class="txt-tb1"><?php echo $row[dt_tim];?></td>
												<td class="txt-tb1"><a href="postproperty.php?mode=DEL&Id=<?php print $row[postpropert_id]; ?>"><img src="layoyt_butt_white_delete.gif" alt="DElET" border="0" width="18" height="22" /></a></td>
                                            <td width="0%" class="txt-tb1"></td>
                                          </tr>
										  
										  <?php $i++; }?>
                                        </table></td>
                                    </tr>
                                    
                                    <tr>
                                      <td colspan="4">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td colspan="2">&nbsp;</td>
                                      <td align="left"><?php echo $pagination; ?>                                      </td>
                                    </tr>
                                    
                                    <tr>
                                      <td colspan="4"></td>
                                    </tr>
                                    <tr>
                                      <td colspan="2">&nbsp;</td>
                                      <td colspan="2">&nbsp;</td>
                                    </tr>
                                  </table>
                                  </td>
                                <td background="images/layoyt_55.gif">&nbsp;</td>
                              </tr>
                              <tr>
                                <td><img id="layoyt_89" src="images/layoyt_68.gif" width="19" height="16" alt="Corner3" /></td>
                                <td background="images/layoyt_69.gif"><img src="images/spacer.gif" width="1" height="1" /></td>
                                <td><img id="layoyt_90" src="images/layoyt_72.gif" width="17" height="16" alt="Corner4" /></td>
                              </tr>
                          </table></td>
                          <td bgcolor="#F6F6F6">&nbsp;</td>
                        </tr>
                        <tr>
                          <td bgcolor="#FFFFFF"><img id="layoyt_85" src="images/layoyt_76.gif" width="14" height="11" alt="Corner3" /></td>
                          <td><img src="images/spacer.gif" width="1" height="1" /></td>
                          <td><img id="layoyt_86" src="images/layoyt_77.gif" width="13" height="11" alt="Corner4" /></td>
                        </tr>
                    </table>
                    </form>
                    </td>
                  </tr>
              </table></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="1%"><img src="images/layoyt_78.gif" width="13" height="15" /></td>
            <td width="98%"><img src="images/spacer.gif" width="1" height="1" /></td>
            <td width="1%"><img src="images/layoyt_81.gif" width="15" height="15" /></td>
          </tr>

        </table></td>
      </tr>
    </table></td>
</tr>
    </table>
</td>
  </tr>
</table>

</body>
<SCRIPT LANGUAGE="JavaScript">

function check(field)
{
if (document.frmform.chkAll.checked == true)
	checkAll(field);
else
	uncheckAll(field);
}


function checkAll(field)
{
for (i = 0; i < field.length; i++)
	field[i].checked = true ;
}

function uncheckAll(field)
{
for (i = 0; i < field.length; i++)
	field[i].checked = false ;
}

</script>
<script language=javascript>

function onSubmitForm() {
 var formObj = document.frmform;
 udd=false;

 if (formObj.list.length>1)
 {
 	for(i=0;i<=formObj.list.length-1;i++)
 	{

	 	if (formObj.list(i).checked==true)
	 		udd=true;
	 }
}
 else
{
	if (formObj.list.checked==true)
	udd=true;
 }

 if (udd==true)
 	{
 	var answer = confirm ("Are you sure to delete record?")
	if (answer)
	return true;
	else
		return false;
  	} 
 else
 {
 	alert('You have not selected any record');
 	return false;
 }
 
}
</script>
<script language="javascript" type="text/javascript">
</script>
</html>

