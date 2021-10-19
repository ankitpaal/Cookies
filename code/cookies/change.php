<html>
<head>
<style>
#a{width:400px;height:350px;margin-top:150px;box-shadow:10px 10px 10px black;margin-left:470px}
#c{color:white;background-color:green;height:50px;width:90px;border-radius:20px 20px}
</style>
</head>
<body>
<?php include("header.php");?>
<table id="a" border="1"align="center">
<tr>
<td colspan="2" align="center">
<h1>Change Passward</h1>
</td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pw" class="b"/></td>

</tr>
<tr>
<td>Confirmonfirm/</br> Passward</td>
<td><input type="password" name="cpw" class="b"/></td>

</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Change" name="submit" id="c"/>
</td>
</tr>
</table>
<br/>
</br>
<?php include("footer.php");?>

</body>




</html>