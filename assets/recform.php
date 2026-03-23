<html>
<head>
<title>Recommendation form</title>
<script language="javascript">
<!--

function reset() {
document.tellafriend.name.value="";
document.tellafriend.email.value="";
document.tellafriend.fmail1.value="";
document.tellafriend.fmail2.value="";
document.tellafriend.fmail3.value="";
}

function validate() {


if (document.tellafriend.fmail1.value.length==0) {
alert("Oops! you'll need to enter a friend's email address");
return false;
}

if (document.tellafriend.email.value.length==0) {
alert("Oops! you forget to enter your email address");
return false;
}
if (document.tellafriend.name.value.length==0) {
alert("Oops! you forgot to enter your name");
return false;
}

document.tellafriend.submit()
return true;
}

//-->
</script>
</head>
<body onload="reset()" topmargin="0" leftmargin="0"> 
<p> 
<center>
</center>
<div align="center">
<table width="623" cellpadding="0" cellspacing="0" border="1" bordercolor="#000000">
<tr valign="top">
<td valign="middle" align="center">
<a href="http://www.ampercent.com/">
<img border="0" src="http://img.ampercent.com/assets/img/logo.png" width="270" height="80"></a><br>&nbsp;<p align="left">&nbsp;&nbsp;&nbsp;&nbsp;
<font face="Calibri"><? $refurl = $_SERVER['HTTP_REFERER']; ?>
<? print $refurl;?>
</font>&nbsp;</p>
<h2 align="left">&nbsp; <font face="Calibri">&nbsp;Email this page To Someone You Know</font><br>
&nbsp;&nbsp; <font face="Calibri" size="2"><font color="#403F3F">We will send a 
link of this web page to an email address you provide. No spam, promise!</font> </font></h2>
<form name="tellafriend" action="tellafriend.php" method="post" onsubmit="return checkfields()">
<div align="center">
<center>
<table border="0" cellpadding="10" cellspacing="0">
<tr>
<td> <font face="Calibri">Your name:</font></td>
<td>
<input size="30" name="name" maxlength="45">
</td>
</tr>
<tr>
<td><font face="Calibri">Your email:</font></td>
<td>
<input size="30" name="email" maxlength="45">
</td>
</tr>
<tr>
<td colspan="2">
<p align="center"><font face="Calibri">Enter Recipient's email addresses:</font></td>
</tr>
<tr>
<td><font face="Calibri">Email 1:</font></td>
<td>
<input size="30" name="fmail1" maxlength="50">
</td>
</tr>
<tr>
<td><font face="Calibri">Email 2:</font></td>
<td>
<input size="30" name="fmail2" maxlength="50">
</td>
</tr>
<tr>
<td colspan="2">
<p align="center">
<input onclick="validate();" type="button" value="Send Message">
<input type=hidden name=refurl value="<? print $refurl;?>"> 

<br>
<font face="Calibri" size="2"><br>
The information you provide on this form will not 
be used for anything other than sending the email to your friend. This feature 
is not to be used for advertising or excessive self-promotion.<br>
<p align="center">
<a href="javascript: self.close()">Close [x]</a>
</p></font></td>
</tr>
</table>
</center>
</div>
</form>
</td>
</tr>
</table>
</div>
</body>
</html>