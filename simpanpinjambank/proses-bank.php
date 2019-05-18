<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id  = $_POST['id'];
$jumlah_pinjaman = $_POST['jumlah_pinjaman'];

// query SQL untuk insert data
$query="UPDATE bank SET jumlah_pinjaman='$jumlah_pinjaman',where id='$id'";
mysqli_query($db, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>