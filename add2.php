<?php


require_once("./connect.php");
$name=$_POST['name'];
$no=$_POST['quantity'];
$game=$_POST['category'];
$brand=$_POST['brand'];
$cond=$_POST['conditions'];
$price=$_POST['price'];

$conn->query("insert into equipments (name , quantity , brand , price, category, conditions) values('$name', '$no' , '$brand', '$price',  '$game', '$cond');");
echo "added!!!";
?>


