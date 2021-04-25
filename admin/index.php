<?php
ob_start();
session_start();
error_reporting(E_PARSE);
include("openconnection.php"); 
if($_REQUEST['txtuser'])
{
		$uerid=$_REQUEST['txtuser'];
		$pwd=$_REQUEST['txtpass'];
$userrow="select* from user where userid='$uerid' and password='$pwd'";		
$userrow=mysql_query($userrow) or die(mysql_error());
$total_row=mysql_num_rows($userrow);
if($total_row>0)
{

$_SESSION['user']=$uerid;
header("location:view_dtls.php");
}
else
{

$msg="userid and Password Invalid";
}



}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	
<head>
<meta http-equiv="Content-Language" content="en-us">
<title>JMAX REAL ESTATE |ADMINISTRATOR LOGIN</title>
<link href="style.css" rel=stylesheet type=text/css>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<style type="text/css">
<!--
.style1 {
	font-size: 16px;
	color: #0000FF;
}
-->
</style>
</head>
<body bgcolor="#FFFFFF" topmargin="0" leftmargin="0" class="body">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
      </tr>
      <tr>
        <th><img src="images/spacer.gif" width="1" height="1" />
            <table width="100%" border="0"cellpadding="0" cellspacing="0">
              <tr>
                <td width="15"><img id="layoyt_2" src="images/layoyt_03.gif" width="15" height="14" alt="" /></td>
                <td width="730" bgcolor="#FFFFFF"><img src="images/spacer.gif" width="1" height="1" /></td>
                <td width="15"><img id="layoyt_" src="images/layoyt_05.gif" width="15" height="14" alt="" /></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td>&nbsp;</td>
                <td valign="middle"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="2%"><img src="images/layoyt_08.gif" alt="" width="16" height="16" class="hedrback" id="layoyt_3" /></td>
                      <td colspan="2" class="hedrback"><img src="images/spacer.gif" width="1" height="1" /></td>
                      <td width="2%"><img src="images/layoyt_10.gif" alt="" width="16" height="16" class="hedrback" id="layoyt_4" /></td>
                    </tr>
                    <tr>
                      <td bgcolor="#98C332" class="hedrback">&nbsp;</td>
                      <td width="71%" align="left" class="hedrback">JMAX Real Estate </td>
                      <td width="25%" class="hedrback style1">ADMINISTRATOR PANEL </td>
                      <td class="hedrback">&nbsp;</td>
                    </tr>
                </table></td>
                <td>&nbsp;</td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td colspan="3"><img src="images/spacer.gif" width="1" height="1" /></td>
              </tr>
          </table></th>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
            <tr>
              <td width="14">&nbsp;</td>
              <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tr>
                    <td width="50"><img id="layoyt_5" src="images/layoyt_14.gif" width="50" height="41" alt="" /></td>
                    <td width="737" class="menubar">&nbsp;</td>
                    <td width="268" background="images/layoyt_20.gif" class="menubar2">
					Login</td>
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
                    <td width="28%" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="93%" background="images/layoyt_28.gif" bgcolor="#B5E3EF"><img src="images/spacer.gif" width="1" height="1" /></td>
                        </tr>
                        <tr>
                          <td bgcolor="#B5E3EF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td class="leftmenu" width="24%" bgcolor="#FFFFFF" height="28">&nbsp;</td>
                              <td class="leftmenu" width="100" bgcolor="#FFFFFF" height="28">&nbsp;</td>
                              <td class="leftmenu" width="227" align="center" bgcolor="#FFFFFF" height="28">&nbsp;</td>
                              <td class="leftmenu" width="30%" bgcolor="#FFFFFF" height="28">&nbsp;</td>
                            </tr>
                            <form name=frmsignup method=post action="#" onsubmit = "return Check_Null();">
								
                            <tr>
                              <td class="leftmenu" bgcolor="#FFFFFF" style="height: 27px">&nbsp;</td>
                              <td class="leftmenu" bgcolor="#FFFFFF" style="height: 27px">&nbsp;</td>
                              <td class="leftmenu" align="left" bgcolor="#FFFFFF" style="height: 27px"><?php echo $msg; ?></td>
                              <td class="leftmenu" bgcolor="#FFFFFF" style="height: 27px">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="leftmenu" width="24%" bgcolor="#FFFFFF" style="height: 27px">&nbsp;</td>
                              <td class="leftmenu" width="100" bgcolor="#FFFFFF" style="height: 27px">
								Username</td>
                              <td class="leftmenu" width="227" align="left" bgcolor="#FFFFFF" style="height: 27px">
							<input name="txtuser" type="text" class="txt_input" size="30" /></td>
                              <td class="leftmenu" width="30%" bgcolor="#FFFFFF" style="height: 27px">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="leftmenu" width="24%" bgcolor="#FFFFFF" style="height: 30px">&nbsp;</td>
                              <td class="leftmenu" width="100" bgcolor="#FFFFFF" style="height: 30px">
								Password</td>
                              <td class="leftmenu" width="227" align="left" bgcolor="#FFFFFF" style="height: 30px">
							<input name="txtpass" type="password" class="txt_input" size="30" /></td>
                              <td class="leftmenu" width="30%" bgcolor="#FFFFFF" style="height: 30px">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="leftmenu" width="24%" bgcolor="#FFFFFF">&nbsp;</td>
                              <td class="leftmenu" width="100" bgcolor="#FFFFFF">&nbsp;</td>
                              <td class="leftmenu" width="227" align="center" bgcolor="#FFFFFF">
								<input type="image" src="images/butt_submit.gif" alt="Submit" width="105" height="44"  name="I1" align="left"></td>
                              <td class="leftmenu" width="30%" bgcolor="#FFFFFF">&nbsp;</td>
                            </tr>
                            </form>
                            <tr>
                              <td colspan="4" bgcolor="#FFFFFF">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="4" bgcolor="#FFFFFF">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="4" bgcolor="#FFFFFF">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="4" bgcolor="#FFFFFF" height="20">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="4" bgcolor="#FFFFFF">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="4" bgcolor="#FFFFFF">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="4" bgcolor="#FFFFFF">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="4" bgcolor="#FFFFFF">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="4" bgcolor="#FFFFFF">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="4" bgcolor="#FFFFFF">&nbsp;</td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td background="images/layoyt_62.gif"><img src="images/spacer.gif" width="1" height="1" /></td>
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
	     alert("User Name")
	     document.frmsignup.txtuser.focus()
	     return false
	      document.location.href="default.asp"
	    }
	 if (document.frmsignup.txtpass.value == "")  	
	   {
	     alert("Password")
	     document.frmsignup.txtpass.focus()
	     return false
	      document.location.href="default.asp"
	    }
	  }
	 </Script>

</html>