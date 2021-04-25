<?php
ob_start();
session_start();
error_reporting(E_PARSE);
include("openconnection.php");
if($_SESSION['user'])
	{ 

if($_REQUEST['txtuser'])
{

	
		$uerid=$_REQUEST['txtuser'];
		$pwd=$_REQUEST['txtpass'];
		 $newuerid=$_REQUEST['newtxtuser'];
		 $newpwd=$_REQUEST['newtxtpass'];
		
		
$userrow="select* from user where userid='$uerid' and password='$pwd'";		
$userrow=mysql_query($userrow) or die(mysql_error());
$total_row=mysql_num_rows($userrow);
if($total_row>0)
{
$row="insert into user set userid='$newuerid',password='$newpwd'";
mysql_query($row) or die(mysql_error());
$row1="delete from user  where userid='$uerid' and password='$pwd'";
mysql_query($row1) or die(mysql_error());



$to = 'santoshkeshri2@gmail.com';


$subject = "Change Userid and Password  Details";

$message ="<html>
<head>
<title>Change Userid and Password</title>
</head>
<body>

<table width=100% border=0 cellpadding=0 cellspacing=0 bordercolor=#CC9900>
  <tr>
    <td>&nbsp;</td>
    <td width=25%>&nbsp;</td>
  </tr>
  <tr>
    <td width=12%>New User Name</td>
    <td >$newuerid</td>
  </tr>
  <tr>
    <td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td>New User Password
    <td > $newpwd</td>
  </tr>
 
</table>
</body>
</html>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$mail1=mail($to,$subject,$message,$headers);
header("location:index.php");
}
else
{

$msg="Old userid and Password Invalid";
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

<Script Language = "JavaScript">
function print_page()
{
window.print()
return true
}
function Check_Null()
	{
	//alert(document.frmAssInfo.txt_name.valu)
	 if (document.frmsignup.txtuser.value == "")  	
	   {
	     alert(" Old User Name")
	     document.frmsignup.txtuser.focus()
	     return false
	    
	    }
		
		
	 if (document.frmsignup.txtpass.value == "")  	
	   {
	     alert("Old Password")
	     document.frmsignup.txtpass.focus()
	     return false
	     
	    }
		
		
		 if (document.frmsignup.newtxtuser.value == "")  	
	   {
	     alert(" New User Name")
	     document.frmsignup.newtxtuser.focus()
	     return false
	    
	    }
		
		 if (document.frmsignup.newtxtpass.value == "")  	
	   {
	    alert("New Password")
	     document.frmsignup.newtxtpass.focus()
	     return false
	    
	    }
		
		
	  }
	 </Script>
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
  <form name=frmsignup method=post action="#" onsubmit = "return Check_Null();">

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
                                      <td width="72%" align="left" valign="top"><b><?php echo $msg;?></b></td>
                                    </tr>
                                    
                                    <tr>
                                      <td class="txt_add_rec">Old Username : </td>
                                      <td><input name="txtuser" type="text" class="txt_input"  autocomplete="off"  size="40" /></td>
                                    </tr>
                                    <tr>
<td class="txt_add_rec"> Old Password  :</td>
<td>  <input name="txtpass" type="password" class="txt_input" size="40" /> </td>
</tr>
                                    
                                   <!--- <tr>
                                      <td class="txt_add_rec">AirWayBillNo</td>
                                      <td><input name="AirBilNo" type="text" class="txt_input" id="AirBilNo" size="30" /></td>
                                    </tr>--->
                                    <tr>
                                      <td class="txt_add_rec">New Username:</td>
                                      <td> <input name="newtxtuser" type="text"  autocomplete="off"  class="txt_input" id="newtxtuser" size="40" />                    </td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec"> New Password: </td>
                                      <td><input name="newtxtpass" type="password" class="txt_input" id="newtxtpass" size="40" /></td>
                                    </tr>
                                    <tr>
                                      <td class="txt_add_rec">&nbsp;</td>
                                      <td>&nbsp;</td>
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
