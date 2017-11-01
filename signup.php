<html>
<body>

<?php
SESSION_START();
require_once("./connect.php");

if(isset($_POST["fname"])&&isset($_POST["mname"])&& isset($_POST["lname"]) && isset($_POST["roll"]) && isset($_POST["pass"]))

{	
   $fname =  $_POST["fname"];
   $mname =  $_POST["mname"];
   $lname =  $_POST["lname"];
   $roll  =  $_POST["roll"];  
   $pass  =  $_POST["pass"];




$date=date("Y-m-d");
$oneYearOn = date('Y-m-d',strtotime(date("Y-m-d", time()) . " + 365 day"));
$_SESSION["roll"]=$roll;
$r=$conn->query("select * from members where roll_no='$roll';");
$o=mysqli_fetch_assoc($r);
if(!$o)
{ 
	$conn->query("insert into members values('$fname', '$mname', '$lname', '$roll', '$date', '$oneYearOn', '$pass');");
	echo "YOU ARE NOW A MEMBER";
	header("Location:in.php");
}
else echo "Person to corresponding roll no exist!!!";
}

?>


</body>
</html>
