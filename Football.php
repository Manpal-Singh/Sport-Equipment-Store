<html>
<body>


<?php
require_once("./connect.php");

session_start();
$u="Football";
$e=$_SESSION["roll"];
				  //var_dump($e);
			      $k=$conn->query("select * from members where roll_no='$e';");
				  $o=mysqli_fetch_assoc($k);
				  echo "<div style ='font-family:Corben-Regular;font-size:20px; color:red'>WELCOME <a href='in.php'>".$o['f_name']." ".$o['l_name']." </a></div>" ;
$r="select distinct(name) from equipments where category='Football';";
$t=mysqli_query($conn, $r);

while($row=mysqli_fetch_array($t))
{
	echo nl2br("\n");
	 echo "<a href='brand.php?equip=".$row['name']." &game=".$u."'>".$row['name']."</a>";
	echo nl2br("\n");
}
?>
<form action="logout.php" method="POST">
<input type="submit" value="logout"/>
</form>

</body>
</html>