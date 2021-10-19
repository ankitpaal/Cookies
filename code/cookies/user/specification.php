<html>
<head>
<style>
#kk{margin-left:100px}
</style>
</head>
<body>
<?php
include("header.php");
?>
<?php

$pid=$_REQUEST['id'];
include("../connect.php");
$sql="select P_Name,P_Img,P_Price from product where P_id='$pid'";
$re=mysqli_query($con,$sql);
if(mysqli_num_rows($re)>0)
{
while($ro=mysqli_fetch_assoc($re))
{
echo"<table id=kk><tr><td rowspan=2><img src=".$ro['P_Img']." height=200px width=200px /></td> <td><h2>Product Name:".$ro['P_Name']." </h2></td></tr><tr>
<td>
<h2>Price: ".$ro['P_Price']."</h2>
</td>
</tr>
<tr>
<td align=center colspan=2>
<a href=order.php?id=".$pid.">Order</a>
</td>
</tr>
</table>";
}

}


?>
</body>
</html>