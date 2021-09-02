<?php

// if(isset($_GET['logout']))
// {
// 	session_destroy();
// 	header('location:index.php?logout=true');
// 	exit;
// }
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
session_destroy();
header("Location:index.php");
?>