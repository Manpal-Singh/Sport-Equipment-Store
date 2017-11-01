<!doctype html>
<html>
<head>
<style>
img {
	width:150px;
	height:150px;
	border-radius:100%;
	transition: all 1s;
}
img:hover{
	
	transform: rotate(20deg);
}
</style>
</head>
<body>
<?php
require_once("./connect.php");
session_start();
$u="Cricket";

$e=$_SESSION["roll"];
				  //var_dump($e);
			      $k=$conn->query("select * from members where roll_no='$e';");
				  $o=mysqli_fetch_assoc($k);
				  echo "<div style ='font-family:Corben-Regular;font-size:20px; color:red'>WELCOME <a href='in.php'>".$o['f_name']." ".$o['l_name']." </a></div>" ;

				  
$r=$conn->query("select distinct(name) from equipments where category='Cricket';");

 while($t=mysqli_fetch_assoc($r))
{
	?>
	  <a href="brand.php?equip=<?=$t['name']?>&game=<?=$u?>"><img border="3" src="./images/<?=$t['name']?>.jpg"  /></a>
	<?php
	
}
?>

<form action="logout.php" method="POST">
<input type="submit" value="logout"/>
</form>

</body>
</html>



