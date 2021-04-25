
<?php
include("openconnection.php"); 
error_reporting(E_PARSE);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
<table width="290" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/left.gif" width="289" height="3" /></td>
              </tr>
              <tr>
                <td background="images/left_bg.gif"><table width="290" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="2" colspan="3"></td>
                  </tr>
                  <tr>
                    <td width="25">&nbsp;</td>
                    <td width="243"><img src="images/letest.gif" width="233" height="38" /></td>
                    <td width="22">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
				  
				    <?php
					

			 $row= mysql_query("SELECT * FROM addeuro where propertyCat='Sell' ORDER BY Id DESC limit 0,3");
			while($totalrows=mysql_fetch_array($row))
			{
			
			  ?>
				  
                  <tr>
                    <td>&nbsp;</td>
                    <td><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="left"><span class="pro"><?php print $totalrows['FlatsType']; ?><br />
                          <?php print $totalrows['FlatsLocation']; ?></span><br />
                          <span class="pro1"> <?php print $totalrows['FlatsSize']; ?></span></span><br />
                          <span class="more"><a href="project_details.php?Id=<?php echo $totalrows['id']; ?>"  class="more">More Info.</a></span><br />
						  
						  
						  
						  
                          <span class="more_info"><a href="project_details.php" class="more_info"></a></span></td>
                        <td align="center"><img src="admin/upimages/<?php echo $totalrows['FlatsImageName']; ?>" width="71" height="66" /></td>
                      </tr>
                    </table></td>
                    <td>&nbsp;</td>
                  </tr>
				 
                  <tr>
                    <td>&nbsp;</td>
                    <td align="left"><img src="images/line.gif" width="229" height="6" /></td>
                    <td>&nbsp;</td>
                  </tr>
				   <?php } ?>
                </table></td>
              </tr>
              <tr>
                <td><img src="images/left_bottom.gif" width="289" height="3" /></td>
              </tr>
            </table>
</body>
</html>
