<?php
session_start();

unset($_SESSION["roll"]);

header("Location:index.php");


?>