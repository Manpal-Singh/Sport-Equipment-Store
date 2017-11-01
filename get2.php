<?php

require_once("./connect.php");

 session_start();
				  $e=$_SESSION["roll"];
				  //var_dump($e);
			      $k=$conn->query("select * from members where roll_no='$e';");
				  $o=mysqli_fetch_assoc($k);
				  echo "<div style ='font-family:Corben-Regular;font-size:20px; color:red'>WELCOME <a href='in.php'>".$o['f_name']." ".$o['l_name']." </a></div>" ;

				  
				$t=$conn->query("select equipments.name, equipments.brand, equipments.category, borrow.due_date from borrow, equipments where borrow.roll_no='$e' and borrow.equip_no=equipments.equip_no ;");
				while($r=mysqli_fetch_array($t))
{
	echo nl2br (" ".$r["name"]." ".$r["brand"]." ".$r["category"]." ".$r["due_date"]." \n");
	
}