<?php
ob_start();
session_start();
error_reporting(E_PARSE);
include("openconnection.php"); 
?>
<?php 
if($_SESSION['user'])
	{
	
	
	 define ("MAX_SIZE","10000"); 

//This function reads the extension of the file. It is used to determine if the file  is an image by checking the extension.
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 		}

	
	
?>

<?php

if ($_SERVER['REQUEST_METHOD']=="POST")
	{

	$propertyCat=$_POST['propertyCat'];
	$SocietyFlats=$_POST['SocietyFlats'];	
	$FlatsSize=$_POST['FlatsSize'];
	$FlatsLocation=$_POST['FlatsLocation'];
  	$FlatsFloor=$_POST['FlatsFloor'];

	$uploadvedio=$_POST['uploadvedio'];
	$FlatsCost=$_POST['FlatsCost'];
	$budget=$_POST['budget2'];
	 $bedroom=$_POST['bedroom'];
	 $address=$_POST['address'];
	$ptitle=$_POST['Ptitle'];
	$image=$_FILES['image']['name'];
 	if($image) 
 	{
 	
 $filename = stripslashes($_FILES['image']['name']);
 $extension = getExtension($filename);
 $extension = strtolower($extension);
 $size=filesize($_FILES['image']['tmp_name']);
$image_name=time().'.'.$extension;
 $newname="upimages/".$image_name;
 $copied = copy($_FILES['image']['tmp_name'], $newname);
		if ($copied) 
		{
		


$query=mysql_query("insert into addeuro set FlatsType='$SocietyFlats', addres='$address',propertytitle='$ptitle',FlatsSize='$FlatsSize',FlatsLocation='$FlatsLocation',
FlatsCost=$FlatsCost,moneytype='$budget',bedroom=$bedroom,FlatsFloor='$FlatsFloor',FlatsImageName='$image_name',propertyCat='$propertyCat',vedio='$uploadvedio'")or die(mysql_eeror());

	$msg="Add Successfully";
		}
		else
		{
		
		$msg="Image Not Upload";
		}
}
else
{



$query=mysql_query("insert into addeuro set FlatsType='$SocietyFlats', addres='$address',propertytitle='$ptitle',FlatsSize='$FlatsSize',FlatsLocation='$FlatsLocation',
FlatsCost=$FlatsCost,moneytype='$budget',bedroom=$bedroom,FlatsFloor='$FlatsFloor',propertyCat='$propertyCat',vedio='$uploadvedio'")or die(mysql_eeror());

$msg="Add Successfully";
}
	

}

?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Language" content="en-us">
<title>New Company</title>


<link href="style.css" rel=stylesheet type=text/css>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

<script language="javascript">

function onSubmitForm() 
{

if(document.frmform.propertyCat.value==0)
{
 alert("Please Enter Category .");

 return false;
}





if(document.frmform.SocietyFlats.value=="")
{
 alert("Please Enter Flat Type.");
 document.frmform.SocietyFlats.focus();
 return false;
}

else if(document.frmform.FlatsSize.value=="")
 {
  alert("Please Enter Flat Size.");
 document.frmform.FlatsSize.focus();
 return false;
 }
 else if(document.frmform.FlatsLocation.value=="")
 {
  alert("Please Enter Flat Location.");
 document.frmform.FlatsLocation.focus();
 return false;
 }
 
 else if(document.frmform.FlatsCost.value=="")
 {
  alert("Please Enter  Flat Cost.");
 document.frmform.FlatsCost.focus();
 return false;
 }


if(document.frmform.FlatsFloor.value=="")
 {
  alert("Please Enter Flat Floor.");
 document.frmform.FlatsFloor.focus();
 return false;
 }

}
 

 </script>
</head>
<body bgcolor="#FFFFFF" topmargin="0" leftmargin="0" class="body">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
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
                    <td width="50"><img id="layoyt_5" src="images/layoyt_14.gif" width="50" height="41" alt="" /></td>
                    <td width="512" class="menubar">&nbsp;</td><td width="191" background="images/layoyt_20.gif" class="menubar2">
Add 
                    
                  </td></tr>
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
                    <td width="28%" valign="top"><?php include"menu.php";?></td>
                  
                    <td width="72%" align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F6F6F6">
                        <tr>
                          <td width="3%"><img src="images/layoyt_32.gif" alt="Corner1" name="layoyt_12" width="14" height="12" id="layoyt_12" /></td>
                          <td width="95%" bgcolor="#F6F6F6"><img src="images/spacer.gif" width="1" height="1" /></td>
                          <td width="2%"><img id="layoyt_84" src="images/layoyt_34.gif" width="13" height="12" alt="Corner2" /></td>
                        </tr>
                        <tr>
                          <td bgcolor="#F6F6F6">&nbsp;</td>
                          <td bgcolor="#F6F6F6">
<form name="frmform" id="frmform" method="POST" enctype="multipart/form-data"   action="#" onSubmit="return onSubmitForm(this);">

                          <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                              <tr>
                                <td width="2%"><img id="layoyt_87" src="images/layoyt_42.gif" width="19" height="16" alt="corner1" /></td>
                                <td width="96%" background="images/layoyt_44.gif"><img src="images/spacer.gif" width="1" height="1" /></td>
                                <td width="2%"><img id="layoyt_88" src="images/layoyt_47.gif" width="17" height="16" alt="Corner2" /></td>
                              </tr>
                              <tr>
                                <td background="images/layoyt_53.gif">&nbsp;</td>
                                <td valign="middle"><table width="100%" border="0">
                                    <tr>
                                      <td align="left" valign="top">&nbsp;</td>
                                      <td align="left" valign="top">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td width="28%" align="left" valign="top">&nbsp;</td>
                                      <td width="72%" align="left" valign="top"><b><?php echo $msg?></b></td>
                                    </tr>
                                    
                                    <tr>
                                      <td class="txt_add_rec">Property Category : </td>
                                      <td><label>
                                        <select name="propertyCat" id="propertyCat">
                                          <option value="0">Select Property</option>
										   <option value="Sell">Sell</option>
										    <option value="Rent">Rent</option>
                                        </select>
                                      </label></td>
                                    </tr>
                                    <tr>
<td class="txt_add_rec"> Flat Type  :</td>
<td>  <select name="SocietyFlats" class="text" id="SocietyFlats">
                  <option value="0">Select</option>
                  <option value="Residential flat">Residential flat</option>
                  <option value="Residential Plot">Residential Plot</option>
                  <option value="Residential Land">Residential Land</option>
                  <option value="Commercial Plot">Commercial Plot</option>
                  <option value="Industrial Plot">Industrial Plot</option>
                  <option value="Industrial Building">Industrial Building</option>
                  <option value="Independent House">Independent House</option>
                  <option value="Office Space">Office Space</option>
                  <option value="Shop">Shop</option>
                  <option value="Retail Space">Retail Space</option>
                  <option value="Hotel Space">Hotel Space</option>
                  <option value="School Space">School Space</option>
				  <option value="Society Flat">Society Flat  </option>
				  <option value="Builder Flat ">Builder Flat  </option>
				  <option value="Builder Floor">Builder Floor</option>	
				   <option value="DDA Flat" selected="selected">DDA Flat</option>			   
				  
                </select> </td>
</tr>
                                    
                                   <!--- <tr>
                                      <td class="txt_add_rec">AirWayBillNo</td>
                                      <td><input name="AirBilNo" type="text" class="txt_input" id="AirBilNo" size="30" /></td>
                                    </tr>--->
                                    <tr>
                                      <td class="txt_add_rec">&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec">Property Title: </td>
                                      <td><input type="text" name="Ptitle" id="Ptitle" size="40" class="txt_input"></td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec">&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec"> Flat Size : </td>
                                      <td><input type="text" name="FlatsSize" id="FlatsSize" size="40" class="txt_input" ></td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec">&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec">Address:</td>
                                      <td><textarea name="address" cols="30" id="address"></textarea></td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec">&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec"> Flat Location :</td>
                                      <td>
										<select name="FlatsLocation" class="text" id="FlatsLocation">
										<option value="0">Select</option>
										<option value="Delhi/NCR">Delhi/NCR</option>
										<option value="Dwarka">Dwarka</option>
										<option value="Noida">Noida</option>
										<option value="Faridabad">Faridabad</option>
										<option value="Ghaziabad">Ghaziabad</option>
										<option value="Gurgaon">Gurgaon</option>
										<option value="Greater Noida">Greater Noida</option>
									  </select>									  </td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec">&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec"> Flat Cost : </td>
                                      <td><input type="text" name="FlatsCost" id="FlatsCost" size="20" class="txt_input" />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="budget2" class="text" id="budget2" >
                         
						    <option value="Thousand">Thousand</option>
							<option value="Lacs">Lacs</option>
							<option value="Crores">Crores</option>
                                          </select></td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec">&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec">Bedroom:</td>
                                      <td><select name="bedroom" class="text" id="bedroom" >
                         <option value="0">BedRoom</option>
						    <option value="1">1 BHK</option>
							<option value="2">2 BHK</option>
							<option value="3">3 BHK</option>
							<option value="4">4 BHK</option>
							<option value="5">5 BHK</option>
							<option value="6">6 BHK</option>
							<option value="7">7 BHK</option>
							<option value="7">8 BHK</option>
							<option value="9">9+BHK</option>
						
                                          </select></td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec">&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec"> Flat Floor  : </td>
                                      <td><input type="text" name="FlatsFloor" id="FlatsFloor" size="40" class="txt_input" ></td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec">&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec"> Upload Flats Image: </td>
                                      <td><input type="file" name="image" id="image" size="40"   class="txt_input"   /></td>
                                    </tr>
                                    
                                    <tr>
                                      <td class="txt_add_rec">&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec">Video Upload Path : </td>
                                      <td><input type="file" name="uploadvedio" id="uploadvedio" size="40" class="txt_input"></td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec">&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec">&nbsp;</td>
                                      <td><input type="image" src="images/butt_submit.gif" alt="Submit" width="105" height="44" /></td>
                                    </tr>
                                    <tr>
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
                          </table>
                          </form>
                          </td>
                          <td bgcolor="#F6F6F6">&nbsp;</td>
                        </tr>
                        <tr>
                          <td bgcolor="#FFFFFF"><img id="layoyt_85" src="images/layoyt_76.gif" width="14" height="11" alt="Corner3" /></td>
                          <td><img src="images/spacer.gif" width="1" height="1" /></td>
                          <td><img id="layoyt_86" src="images/layoyt_77.gif" width="13" height="11" alt="Corner4" /></td>
                        </tr>
                    </table></td>
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


</html>
<?php 
}
else
{
header('Location:index.php');
}
?>
