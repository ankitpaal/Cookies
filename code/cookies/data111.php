<?php
if(isset($_POST['sub']))
{
	
	include("connect.php");
	$em=$_POST['em'];
	$pw=$_POST['pw'];
	$sql="select User_id,User_type from login where User_id='$em' and Password='$pw'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0)
	{
		while($row=mysqli_fetch_assoc($res))
		{
				echo $row['User_id'];
				echo $row['User_type'];
			
		}
		
	}
	else
	{
			echo"Email or Password Does not Match";
		
	}
	
	
}
?>

<html>
<head></head>
<body>
<form method="POST">
<table>
<tr>
<td>Email</td>
<td><input type="text" name="em"/></td>
</tr>
<tr>
<td>Password</td>
<td>
<input type="password" name="pw"/>
</td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="submit" name="sub"/></td>
</tr>
</table>
</form>
</body>
</html>