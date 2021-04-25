
var xmlHttp

function hid()
{
//alert(document.form.email.value);
str=document.form.email.value;
str1=document.form.sendmailmsg.value;

if (str.length==0)
  {
	alert("Please Enter email");
	document.form.email.focus();
  return;
  }
  
  if (str1.length==0)
  {
	alert("Please Enter Message");
		document.form.sendmailmsg.focus();
  return;
  }
  
  if (str1=="Write your Message Here")
  {
	alert("Please write your message");
	document.form.sendmailmsg.focus();
  return;
  }
  
  
  

xmlHttp=GetXmlHttpObject();
if (xmlHttp==null)
  {
  alert ("Your browser does not support AJAX!");
  return;
  } 
var url="sendmail.asp";
url=url+"?q="+str;
//alert(url)
url=url+"&q1="+str1;
xmlHttp.onreadystatechange=stateChanged;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
} 

function stateChanged() 
{ 
	if (xmlHttp.readyState==4)
	{ 
		//alert(xmlHttp.responseText);
		alert("Mail Sent");
	}
}

function GetXmlHttpObject()
{
var xmlHttp=null;
try
  {
  // Firefox, Opera 8.0+, Safari
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
return xmlHttp;
}
