<?php
session_start();
$em=$_SESSION['em'];
include("../connect.php");
$sele="select F_Name,Contact,Address,city from sign_up where User_id='$em'";
$res=mysqli_query($con,$sele);
if(mysqli_num_rows($res)>0)
{
	while($row=mysqli_fetch_assoc($res))
	{
		$nm=$row['F_Name'];
		$cn=$row['Contact'];
		$ad=$row['Address'];
		$ci=$row['city'];
		
		
	}
	
	
}
if(isset($_POST['ff']))
{
	include("../connect.php");
	$fn=$_POST['fn'];
	$cont=$_POST['cn'];
	$add=$_POST['ad'];
	$ct=$_POST['ct'];
	
	$query="update sign_up set F_Name='$fn', Contact='$cont',Address='$add',city='$ct' where User_id='$em'";
	mysqli_query($con,$query) or die("<script>alert('Updation Failed');</script>");
	echo"<script>alert('You have Successfully Updated Your Profile');</script>";
	

	
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
<h1>Profile Update</h1>
</td>
</tr>

<tr>
<td>Full name/<br>Company name</td>
<td><input type="text"class="c"name="fn" value="<?php if(isset($nm)) echo $nm;?>"/></td>

</tr>
<tr>
<td>Contact</td>
<td><input type="text"class="c"name="cn" value="<?php if(isset($cn)) echo $cn;?>"/></td>
<tr>
<td>Address</td>
<td><input type="text"class="c"name="ad" value="<?php if(isset($ad)) echo $ad;?>"/></td>
</tr>
<tr>
<td>City</td>
<td>
<input type="text"class="c"name="ct" value="<?php if(isset($ci)) echo $ci;?>"/>
</td>


<tr>
<td colspan="2" align="center">
<input type="submit" value="Update" id="d"name="ff"/>
</td>

</tr>


</table></form>
<div id="l"></div>
<?php
include("footer.php");
?>
</body>


</html>