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
$sql="select User_id,F_Name,Contact,Address,City from sign_up";
$re=mysqli_query($con,$sql);
if(mysqli_num_rows($re)>0)
{
	echo"
	<br/>
	<br/>
	<h1 id=gg>Customer Details</h1>
	<br>
	<br/>
	<table border=1 id=kk>
	<tr id=col>
	<td>Customer Id</td>
	<td>Customer Name</td>
	<td>Customer Contact</td>
	<td>Address</td>
	<td>City</td>
	</tr>";
	
while($ro=mysqli_fetch_assoc($re))
{
echo"
<tr>
<td><p>".$ro['User_id']."</p></td>
<td><p>".$ro['F_Name']."</p></td>
<td><p>".$ro['Contact']."</p></td>
<td><p>".$ro['Address']."</p></td>
<td><p>".$ro['City']."</p></td>
</tr>";
}

}
"
</table>";

?>
</body>

</html>