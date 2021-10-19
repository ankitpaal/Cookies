<?php
session_start();
$oid=$_REQUEST['id'];

include("../connect.php");
$sql="select C_id,C_Name,P_Name,P_Quantity,P_Price from orderrr where Order_id='$oid';";

$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0)
{
	
	while($ro=mysqli_fetch_assoc($res))
	{
			$cid=$ro['C_id'];
			$cnm=$ro['C_Name'];
			$pnm=$ro['P_Name'];
			$pq=$ro['P_Quantity'];
			$pp=$ro['P_Price'];
			

			
			
		
	}
	
	
	
}

if(isset($_POST['sub']))
{
	include("../connect.php");
	
		$pname=$_POST['pname'];
		$pprice=$_POST['pprice'];
		$pq=$_POST['pq'];
		$cid=$_POST['cid'];
		$cnm=$_POST['cnm'];
		
		$date=date('Y/m/d');
		$ps="paid";

	$sql12="insert into payment(C_id,C_Name,P_Name,P_Quantity,P_price,Payment_Status,Payment_Date) values('$cid','$cnm','$pname','$pq','$pprice','$ps','$date')";
	mysqli_query($con,$sql12) or die('<script>alert("Payment details is not submitted ")</script>');
	echo"<script>alert('Payment Details Submited Successfully');</script>";
	
	
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
<h1>Payment Details
 
 </h1>
</td>
</tr>
<tr>
<td align="center">
<h4>
Customer Id
</h4>
</td>

<td align="center">
<input type="text" class="a" name="cid" value="<?php if(isset($cid)) echo $cid; ?>" placeholder"/ >
</td>
</tr>
<tr>
<td align="center">
<h4>
Customer Name
</h>
</td>

<td align="center">
<input type="text" class="a" name="cnm" value="<?php if(isset($cnm)) echo $cnm; ?>" placeholder"/ >
</td>
</tr>
<tr>
<td align="center">
<h4>
Product Name
</h4>
</td>

<td align="center">
<input type="text" class="a" placeholder" name="pname" value="<?php if(isset($pnm)) echo $pnm;?>"/ >
</td>
</tr>
<tr>
<td align="center">
<h4> Product Quantity</h4>
</td>
<td align="center">
<input type="text" class="a" name="pq" value="<?php if(isset($pq)) echo $pq;?>" placeholder"/ >
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