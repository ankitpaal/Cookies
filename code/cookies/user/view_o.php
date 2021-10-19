<?php
session_start();
$em=$_SESSION['em'];
?>

<html>
<head>
<style>
#kk{margin-left:270px;width:800px;}
#col{background-color:blue;color:white}
#gg{text-align:center;color:white;text-shadow:1px 1px 1px black}
</style>
</head>
<body><?php

include("header.php");
?>
<?php
include("../connect.php");
$sql="select Order_id,P_Name,P_Quantity,P_price,Order_date from orderrr where C_Id='$em'";
$re=mysqli_query($con,$sql);
if(mysqli_num_rows($re)>0)
{
	echo"
	<br/>
	<br/>
	<h1 id=gg>Order Details</h1>
	<br>
	<br/>
	<table border=1 id=kk>
	<tr id=col>
	<td>Order Id</td>
	<td>Product Name</td>
	<td>Product Quantity</td>
	<td>Product Price</td>
	<td>Order Date</td>
	</tr>";
	
while($ro=mysqli_fetch_assoc($re))
{
echo"
<tr>
<td><p>".$ro['Order_id']."</p></td>
<td><p>".$ro['P_Name']."</p></td>
<td><p>".$ro['P_Quantity']."</p></td>
<td><p>".$ro['P_price']."</p></td>
<td><p>".$ro['Order_date']."</p></td>
</tr>";
}

}
"
</table>";

?>
</body>

</html>