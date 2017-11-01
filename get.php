<?php

require_once("./connect.php");

$t=$conn->query("select members.f_name, members.l_name, borrow.roll_no, equipments.name, equipments.brand, borrow.due_date from borrow, members, equipments where borrow.roll_no=members.roll_no and equipments.equip_no=borrow.equip_no;");

//var_dump($r);
while($r=mysqli_fetch_array($t))
{
	echo nl2br ("".$r["f_name"]."  ".$r["l_name"]." ".$r["roll_no"]." ".$r["name"]." ".$r["brand"]." ".$r["due_date"]." \n");
	
}

?>
