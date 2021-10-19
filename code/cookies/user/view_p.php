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


include("../connect.php");
$sql="select P_id,P_Name,P_Img from product";
$re=mysqli_query($con,$sql);
if(mysqli_num_rows($re)>0)
{
while($ro=mysqli_fetch_assoc($re))
{
echo"<table id=kk><tr><td><img src=".$ro['P_Img']." height=200px width=200px /></td> <td><a href=specification.php?id=".$ro['P_id'].">".$ro['P_Name']." </a></td></tr></table>";
}

}


?>
</body>
</html>