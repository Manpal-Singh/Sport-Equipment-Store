<?php

require_once("./connect.php");
if(isset($_POST['name'])&&isset($_POST['pass']))
{
	$name= $_POST['name'];
	$pass= $_POST['pass'];
}

$r=$conn->query("select * from admin where username='$name' and password='$pass';");

if(mysqli_fetch_assoc($r))
{
	header("location:in2.php");
}
else echo"YOU ARE NOT ADMIN!!!"

?>