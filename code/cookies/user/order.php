<?php
session_start();
$pid=$_REQUEST['id'];
$em=$_SESSION['em'];
include("../connect.php");
$sql="select P_Name,P_Price from product where P_id='$pid';";

$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0)
{
	
	while($ro=mysqli_fetch_assoc($res))
	{
			$pn=$ro['P_Name'];
			$pp=$ro['P_Price'];

			
			
		
	}
	
	$sql1="select F_Name,Address  FROM sign_up where User_id='$em';";
$res1=mysqli_query($con,$sql1);
	if(mysqli_num_rows($res1)>0)
	{
		while($ro1=mysqli_fetch_assoc($res1))
		{
			$cn=$ro1['F_Name'];
			$ad=$ro1['Address'];
		
			
			
		}
		
	}
	
	
}

if(isset($_POST['sub']))
{
	include("../connect.php");
	$date=date('Y/m/d');
		$pname=$_POST['pname'];
		$pprice=$_POST['pprice'];
		$pq=$_POST['pq'];
		$cid=$_POST['cid'];
		$cnm=$_POST['cnm'];
		$ad=$_POST['add'];
	$tp=$pprice*$pq;
	$sql12="insert into orderrr(Order_date,P_Name,P_price,P_Quantity,C_id,C_Name,C_Address) values('$date','$pname','$tp','$pq','$cid','$cnm','$ad')";
	mysqli_query($con,$sql12) or die('<script>alert("order details is not submitted ")</script>');
	$_SESSION['em']=$_POST['cid'];
	header("location:view_o.php");
	
	
}
?>
<html>
<head>
<style>

.a{height:30px;width:230px}
#b{margin-top:100px;box-shadow:10px 10px 10px black;margin-left:470px}
#c{height:50px;width:90px;background-color:blue;color:white;border-radius:10px 10px}
.m{color:red;text-decoration:none}
	#l{height:100px}
</style>

</head>
<body>
<?php
include("header.php");
?>
<form method="POST">
<table id="b" border="1" height="350px" width="400px" align="center">
<tr>
<td colspan="2" align="center">
<h1>Order
 
 </h1>
</td>
</tr>
<tr>
<td align="center">
<h4>
Product Name
</h4>
</td>

<td align="center">
<input type="text" class="a" placeholder" name="pname" value="<?php if(isset($pn)) echo $pn;?>"/ >
</td>
</tr>
<tr>
<td align="center">
<h4> Product Quantity</h4>
</td>
<td align="center">
<input type="text" class="a" name="pq" placeholder"/ >
</td>
</tr>

<tr>
<td align="center">
<h4>
Product Price
</h4>
</td>

<td align="center">
<input type="text" class="a" placeholder" name="pprice" value="<?php if(isset($pp)) echo $pp;?>" / >
</td>
</tr>
<tr>
<td align="center">
<h4>
Customer Id
</h4>
</td>

<td align="center">
<input type="text" class="a" name="cid" value="<?php if(isset($em)) echo $em; ?>" placeholder"/ >
</td>
</tr>
<tr>
<td align="center">
<h4>
Customer Name
</h>
</td>

<td align="center">
<input type="text" class="a" name="cnm" value="<?php if(isset($cn)) echo $cn; ?>" placeholder"/ >
</td>
</tr>
<tr>
<td align="center">
<h4>
Customer Address
</h4>
</td>
<td align="center">
<input type="text" class="a" name="add" value="<?php if(isset($ad)) echo $ad; ?>" placeholder"/ >
</td>
</tr>
</td>
<tr>
<td colspan="2"align="center" >
<input type="submit" value="submit" name="sub" id="c"/>
</td>
</tr>

</table>
<div id="l"></div>
<?php
include("footer.php");?>
</form>
</body>
</html>