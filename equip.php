<html>
<body>


<?php
SESSION_START();
//var_dump($_SESSION);
require_once("./connect.php");
$f=$_GET['game'];
$r="select distinct(name) from equipments where category='$f';";
$t=mysqli_query($conn, $r);

while($row=mysqli_fetch_array($t))
{
	echo nl2br("\n");
	 echo "<a href='brand.php?equip=".$row['name']."'>".$row['name']."</a>";
	echo nl2br("\n");
}
?>

<form action="logout.php" method="POST">
<input type="submit" value="logout"/>
</form>

</body>
</html>