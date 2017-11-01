<?php

require_once("./connect.php");
SESSION_START();
$roll=$_POST['roll_no'];
$pass=$_POST['Pass'];

$r=$conn->query("select * from members where roll_no='$roll' and password='$pass';");
$t=mysqli_fetch_assoc($r);
if($t)
{
	$_SESSION["roll"]=$roll;
	header("Location:in.php");
	
}
else echo "invalid roll number or password!!!";
?>