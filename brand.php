<?php
SESSION_START();
//var_dump($_SESSION);
require_once("./connect.php");

$game=$_GET['game'];
?>

<!doctype html>
<html>
<head>
<style>

img {
	width:150pxpx;
	height:150px;
	border-radius:100%;
	transition: all 1s;
}
img:hover{
	
	transform: rotate(20deg);
}

</style>


<body>




<?php

$sql = "select * from equipments where category='$game';";
$r=$conn->query($sql);

while($e=mysqli_fetch_array($r))
{
	
	
	?>
	<a href='issue.php?no=<?=$e['equip_no']?>'><img src="./<?=$game?>/<?=$e['name']?>/<?=$e['brand']?>.jpg"  /></a>;
	<?php
    echo nl2br ("".$e["name"]." ".$e['brand']."  ".$e['price']." ".$e['conditions']." ".$e['quantity']." \n");
}
?>

<form action="logout.php" method="POST">
<input type="submit" value="logout"/>
</form>
</body>
</html>