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
 OTP
 </h1>
</td>
</tr>

<tr>
<td align="center">
<h4>Enter OTP No.</h4>
</td>
<td align="center">
<input type="password" class="a" placeholder ="Enter OTP NO."/ >
</td>
</tr>
<tr>
<td colspan="2"align="center" >
<input type="submit" value="Submit" id="c"/>

</td>
</tr>


</table>
<div id="l"></div>
<?php
include("footer.php");?>
</form>
</body>
</html>