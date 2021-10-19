<html>
<head></head>
<body>
<?php include("header.php");?>
<?php
include("../connect.php");
$sql="select P_Img from product";
$re=mysqli_query($con,$sql);
if(mysqli_num_rows($re)>0)
{
	while($ro=mysqli_fetch_assoc($re))
	{
		echo"<img src=".$ro['P_Img']."/>";
	}
}


?>

</body>
</html>