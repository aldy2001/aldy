<?php
include 'config.php';
// menyimpan data id kedalam variabel
$id   = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from login where id='$id'";
mysqli_query($db, $query);
// mengalihkan ke halaman index.php
header("location:admin.php");
?>