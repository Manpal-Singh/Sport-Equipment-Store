<?php

require_once("./connect.php");

$roll=$_POST['roll'];
$name=$_POST['name'];
$brand=$_POST['brand'];
$game=$_POST['game'];



$r=$conn->query("select equip_no from equipments where name='$name' and brand='$brand' and category='$game'" );

$t=mysqli_fetch_array($r);

$no=$t["equip_no"];

$p=$conn->query("select no_of_equip_taken from borrow where roll_no='$roll' and equip_no='$no'");
$y=mysqli_fetch_array($p);

$n=$y["no_of_equip_taken"];
//var_dump($y);

if($n==NULL)
{
	echo "there is no such record";
}


if($n>1)
{
	$conn->query("update borrow set no_of_equip_taken=no_of_equip_taken-1 where roll_no='$roll' and equip_no='$no'");
	$conn->query("update equipments set quantity=quantity+1 where name='$name' and brand='$brand' and category='$game';");
	echo "done";
}
else {
	$conn->query("delete from borrow where roll_no='$roll' and equip_no='$no';");
	$conn->query("update equipments set quantity=quantity+1 where name='$name' and brand='$brand' and category='$game';");
	echo "done";
	}




?>