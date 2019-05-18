<?php 
include 'config.php';
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $level = $_POST['level'];
    
 
    // query update data
    $query = "UPDATE login SET password = '$password',username = '$username',level = '$level' WHERE id = $id";
    mysqli_query($db,$query);
    }else{
        echo "Edit Data Gagal";
    }
 
// mengalihkan ke halaman index.php
header("location:admin.php");
?>