
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
$sql="select C_id,C_Name,P_Name,P_Quantity,P_Price,Payment_Status,Payment_Date from payment";
$re=mysqli_query($con,$sql);
if(mysqli_num_rows($re)>0)
{
	echo"
	<br/>
	<br/>
	<h1 id=gg>Payment Details</h1>
	<br>
	<br/>
	<table border=1 id=kk>
	<tr id=col>
	<td>Customer Id</td>
	<td>Customer Name</td>
	
	<td>Product Name</td>
	<td>Product Quantity</td>
	<td>Payment Amount</td>
	<td>Payment Status</td>
	<td>Payment Date</td>
	</tr>";
	
while($ro=mysqli_fetch_assoc($re))
{
echo"
<tr>
<td><p>".$ro['C_id']."</p></td>
<td><p>".$ro['C_Name']."</p></td>
<td><p>".$ro['P_Name']."</p></td>
<td><p>".$ro['P_Quantity']."</p></td>
<td><p>".$ro['P_Price']."</p></td>
<td><p>".$ro['Payment_Status']."</p></td>
<td><p>".$ro['Payment_Date']."</p></td>
</tr>";
}

}
"
</table>";

?>
</body>

</html>