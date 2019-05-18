<?php 
include 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$query="INSERT INTO login VALUES('','$username','$password','$level')";
mysqli_query($db,$query);
 
// mengalihkan ke halaman index.php
header("location:admin.php");
?>