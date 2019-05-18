<?php 
include 'config.php';
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat_lengkap = $_POST['alamat_lengkap'];
    $email = $_POST['email'];
    $jumlah_pinjaman = $_POST['jumlah_pinjaman'];
    $masa_pinjaman = $_POST['masa_pinjaman'];
    $penghasilan_perbulan = $_POST['penghasilan_perbulan'];
    $pekerjaan = $_POST['pekerjaan'];
    $provinsi = $_POST['provinsi'];
    $kota = $_POST['kota'];
    $umur = $_POST['umur'];
    $jenis_klamin = $_POST['jenis_klamin'];
    
 
    // query update data
    $query = "UPDATE user SET nama_lengkap = '$nama_lengkap', 
    alamat_lengkap = '$alamat_lengkap',
    email = '$email',
    jumlah_pinjaman ='$jumlah_pinjaman',
    masa_pinjaman ='$masa_pinjaman',
    penghasilan_perbulan = '$penghasilan_perbulan',
    pekerjaan ='$pekerjaan',
    provinsi ='$provinsi',
    kota ='$kota',
    umur='$umur',
    jenis_klamin ='$jenis_klamin' WHERE id = $id";
    mysqli_query($db,$query);
    }else{
        echo "Edit Data Gagal";
    }
 
// mengalihkan ke halaman index.php
header("location:admin.php");
?>