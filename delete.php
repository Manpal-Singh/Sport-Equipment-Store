<?php

require_once("./connect.php");

$name=$_POST['name'];
$game=$_POST['category'];
$brand=$_POST['brand'];

$t=$conn->query("select * from equipments where name='$name' and category='$game' and brand='$brand';");
$o=mysqli_fetch_assoc($t);
$q=$o["equip_no"];
$br=$o["brand"];
$en=$o["name"];

$y=$conn->query("select * from borrow where equip_no='$q'");
$e=mysqli_fetch_assoc($y);
if($e)
{       
		$dt=$e['b_date'];
		$rd=$e['return_date'];
		$dd=$e['due_date'];
		$eqn=$e['equip_no'];
		$rn=$e['roll_no'];
		$conn->query("insert into extra values( '$eqn', '$rn' , '$dt' , '$dd' , '$rd' , ".$e['no_of_equip_taken']." , '$en' , '$br');");
		$conn->query("delete from borrow where equip_no=".$o['equip_no'].";");
}


$conn->query("delete from equipments where name='$name' and category='$game' and brand='$brand';");
echo " deleted now you have this all equipments in store:::";

$r=$conn->query("select * from equipments;" );
while($row=mysqli_fetch_assoc($r))
{
	echo "".$row[ 'name' ]." ".$row['brand']." ".$row['category']." ";
}

?>