<?php
session_start();
if(isset($_POST['login']))
{
	
	include("connect.php");
	$em=$_POST['ui'];
	$pw=$_POST['pw'];
	$sql="select User_type from login where User_id='$em' and Password='$pw'";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($ow=mysqli_fetch_assoc($result))
		{
			$ut=$ow['User_type'];
			if($ut=="admin")
			{
				$_SESSION['em']=$_POST['ui'];
				header("location:admin/profile.php");
				
			}
			else if($ut=="Customer")
			{
				$_SESSION['em']=$_POST['ui'];
				header("location:user/profile_up.php");
				
			}
			
		}
		
	}
	else
	{
		
		echo"<script>alert('User id and passsword does not match');</script>";
	}
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
<h1>
 Login
 </h1>
</td>
</tr>
<tr>
<td align="center">
<h4>
User Id
</h4>
</td>

<td align="center">
<input type="text" class="a" placeholder ="user id or ph.no." name="ui"/ >
</td>
</tr>
<tr>
<td align="center">
<h4>Password</h4>
</td>
<td align="center">
<input type="password" class="a" placeholder ="password" name="pw"/ >
</td>
</tr>
<tr>
<td colspan="2"align="center" >
<input type="submit" value="login" id="c" name="login"/>
<a href="signup.php"class="m"> I dont have acount</a>
</td>
</tr>
<tr>
<td colspan="2"align="center">
<h5>
<a href="forget.php" class="m"> forget password</a>
</h5>
</tr>
</td>
</tr>
</table>
<div id="l"></div>
<?php
include("footer.php");?>
</form>
</body>
</html>