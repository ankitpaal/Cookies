<?php
if(isset($_POST['ff']))
{
	include("connect.php");
	$fn=$_POST['fn'];
	$cont=$_POST['cn'];
	$add=$_POST['ad'];
	$ct=$_POST['ct'];
	$uid=$_POST['ui'];
	$ut="Customer";
	$pass=rand(1000,10000);
	$query="insert into login(user_id,password,user_type) values('$uid','$pass','$ut');";
	$query.="insert into sign_up(F_Name,Contact,Address,city,User_id) values('$fn','$cont','$add','$ct','$uid');";
	mysqli_multi_query($con,$query) or die("<script>alert('Resistration Failed');</script>");
	echo"<script>alert('Resistration Successfully Done');</script>";
	$msg="Dear ".$fn.",You Have Successfully Resister In BCA Cookies. Your User id=".$uid." and Password=".$pass;
	
	$ch = curl_init();
$user="rocksuchindrakumar@gmail.com:johnrandy";
 
$senderID="TEST SMS"; 
 
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$cont&msgtxt=$msg");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{  } 
curl_close($ch);

	
}
?>
<html>
<head> 
<style>
#a{width:150px;}
	#b{width:400px;height:350px;margin-top:100px;box-shadow:10px 10px 10px black;margin-left:470px}
	.c{width:250px;height:30px;}
	#d{color:white;background-color:green;height:50px;width:90px;border-radius:20px 20px}
	#l{height:100px}
</style>
</head>
<body>
<?php include("header.php");
?>
<form method="POST">
<table id="b" border="1"= align="center">
<tr>
<td colspan="2" align="center">
<h1>Sign up</h1>
</td>
</tr>

<tr>
<td>Full name/<br>Company name</td>
<td><input type="text"class="c"name="fn"/></td>

</tr>
<tr>
<td>Contact</td>
<td><input type="text"class="c"name="cn"/></td>
<tr>
<td>Address</td>
<td><input type="text"class="c"name="ad"/></td>
</tr>
<tr>
<td>City</td>
<td>
<select class="c"name="ct">
<option>City</option>
<option value="Kanpur">Kannauj</option>
<option value="Kanpur">Kanpur</option>
<option value="Kanpur">Lucknow</option>
<option value="Kanpur">Farrukhabad</option>
<option value="Kanpur">Kanpur Dehat</option>
<option value="Kanpur">Unnao</option>
<option value="Jhasi">Jhasi</option>
<option value="Delhi">Delhi</option>
<option value="Mumbai">Mumbai</option>
<option value="Chennai">Chennai</option>
<option value="Jaipur">Jaipur</option>
<option value="Surat">Surat</option>
<option value="Nagpur">Nagpur</option>
</select>
</td>

<tr>
<td>User id</td>
<td><input type="text" laceholder="user id"class="c"name="ui"/></td>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Signup" id="d"name="ff"/>
</td>

</tr>


</table></form>
<div id="l"></div>
<?php
include("footer.php");
?>
</body>


</html>