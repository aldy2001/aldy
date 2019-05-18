<?php 
include 'config.php';
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $jumlah_uang = $_POST['jumlah_uang'];
    
 
    // query update data
    $query = "UPDATE bank SET jumlah_uang = '$jumlah_uang' WHERE id = $id";
    mysqli_query($db,$query);
    }else{
        echo "Edit Data Gagal";
    }
 
// mengalihkan ke halaman index.php
header("location:admin.php");
?>