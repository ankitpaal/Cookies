<?php
$server="localhost";
$user="Ankit_cookies";
$pass="ankitpalbca";
$db="cookies";
$con=mysqli_connect($server,$user,$pass,$db);
if(mysqli_connect_error())
{
echo"connection failed";
}
?>