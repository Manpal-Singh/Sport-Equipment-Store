<html>
</body>


<?php
SESSION_START();
//var_dump($_SESSION);
require_once ("./connect.php");

$no=$_GET['no'];
$roll=$_SESSION["roll"];
$e=$conn->query("select * from borrow where roll_no='$roll';");
$w=mysqli_fetch_assoc($e);
$r=$conn->query("select * from borrow where roll_no='$roll' and equip_no='$no';");
$q=mysqli_fetch_assoc($r);
$y=$conn->query("select * from equipments where equip_no='$no';");
$o=mysqli_fetch_array($y);
$b=$o['quantity'];
if($b<=0)
{
	echo "OUT OF STOCK!!!";
}
else {
	  $i=$conn->query("select SUM(no_of_equip_taken) as totall from borrow where roll_no='$roll';");
	  $p=mysqli_fetch_assoc($i);
      $g=$p['totall'];
	  
	  if($g<=5)
	  {	
		$conn->query("update equipments  set quantity= quantity-1  where equip_no= '$no';");
		echo "issued";
		$date=date("Y-m-d");
		$rdate = date('Y-m-d',strtotime(date("Y-m-d", time()) . " + 30 day"));

		if(!$w||!$q)
		{ 
		$conn->query("insert into borrow values('$no', '$roll', '$date', '$rdate', '$rdate', 1);");
		
		}
		else $conn->query("update borrow set no_of_equip_taken=no_of_equip_taken+1 where roll_no='$roll' and equip_no='$no';");
	  }       
      
	  else echo "YOU EXCEEDED THE LIMITED NUMBER , RETURN TO ISSUE MORE!!!";
     }
?>

<form action="logout.php" method="POST">
<input type="submit" value="logout"/>
</form>

</body>
</html>