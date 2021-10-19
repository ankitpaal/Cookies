<?php
if(isset($_POST['sub']))
{
	$tt="../upload/";
	$tf=$tt.basename($_FILES["img"]["name"]);
	$filetype=strtolower(pathinfo($tf,PATHINFO_EXTENSION));
	$check = getimagesize($_FILES["img"]["tmp_name"]);
   
			if(move_uploaded_file($_FILES["img"]["tmp_name"],$tf))
			{
				include("../connect.php");
				$nm=$_POST['pn'];
				$pp=$_POST['pp'];
				$pi=$_POST['pi'];
				
				
					$sql="insert into product(P_Name,P_Price,Ingredient,P_Img) values('$nm','$pp','$pi','$tf')";
					mysqli_query($con,$sql) or die("<script>alert('Some Thing wrong');</script>");
					echo"<script>alert('Product added successfully');</script>";
					
				
				
			}
	
	
	
	
}



?>



<html>
<head> 
<style>
#a{width:150px;}
	#b{width:500px;height:500px;margin-top:100px;box-shadow:10px 10px 10px black;margin-left:400px}
	.c{width:250px;height:30px;}
	#d{color:white;background-color:green;height:50px;width:130px;border-radius:20px 20px}
</style>
</head>
<body>






<?php include("header.php");?>
<form method="POST" enctype="multipart/form-data">
<table id="b" border="1">
<tr>
<td colspan="2" align="center">
<h1>Product Details</h1>
</td>
</tr>

<tr>
<td>Product Name</td>
<td><input type="text" class="c" name="pn"/></td>

</tr>
<tr>
<td>Product Price</td>
<td><input type="text"class="c" name="pp"/></td>
<tr>
<td>Product Ingredient</td>
<td><input type="text"class="c" name="pi"/></td>
</tr>

<tr>
<td>Image</td>
<td><input type="file"class="c" name="img"/></td>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Add" id="d" name="sub"/>
</td>

</tr>


</table>
</form>



</body>


</html>