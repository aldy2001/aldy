<?php 
    include "config.php";

    if (isset($_POST['Register'])) {
        $jumlahpinjaman = $_POST['jumlah_pinjaman'];
        if ($jumlahpinjaman > 5000000) : ?>
            <script>
                alert('Peminjaman maksimal sebesar 5 juta rupiah!');
                window.location.href = "register.php";
            </script>

        <?php
        exit;
        endif;
        $Nama = $_POST['name'];
        $alamat_lengkap = $_POST['alamat_lengkap'];
        $email = $_POST['email'];
        $jumlah_pinjaman = $_POST['jumlah_pinjaman']; 
        $masa_pinjaman = $_POST['masa_pinjaman'];
        $Penghasilan_Perbulan = $_POST['Penghasilan_Perbulan'];
        $Pekerjaan = $_POST['Pekerjaan'];
        $Provinsi = $_POST['Provinsi'];
        $Kota = $_POST['Kota'];
        $Umur = $_POST['Umur'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        
        $query = "INSERT INTO user VALUES('','$Nama',
                                                        '$alamat_lengkap',
                                                        '$email',
                                                        $jumlahpinjaman,
                                                         '$masa_pinjaman',
                                                         $Penghasilan_Perbulan,
                                                         '$Pekerjaan',
                                                         '$Provinsi',
                                                         '$Kota',
                                                         $Umur,
                                                         '$jenis_kelamin')";
                $q = mysqli_query($db, $query );
        if ($q) : ?>
            <script>
                alert('Peminjaman dikonfirmasi untuk proses selanjutnya silahkan cek Email!');
                window.location.href = "index.php";

            </script>
        <?php endif; 
    }


 ?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link rel="icon" type="image/png" href="img/7.png">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css_register/style.css">
</head>
<body >
<br> 
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <p style="color: white;">&larr; <a href="index.php" style="color: white;">Home</a> </p>

            <h3>Silahkan isi data di bawah ini...</h3>
            <h5>Untuk melakukan peminjaman<h5>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">


        <form action="" method="POST">

            <div class="form-grup"  >
                <lebel for="name" >Nama lengkap</lebel>
                <input class="form-control" type="text" name="name" placeholder="Nama Kamu"/>
            </div>

            <div class="form-grup">
                <lebel for="alamat lengkap">Alamat lengkap</lebel>
                <input class="form-control" type="text" placeholder="alamat lengkap" name="alamat_lengkap"/>
            </div>

            <div class="form-grup">
                <lebel for="email">Email</lebel>
                <input class="form-control" type="text" name="email" placeholder="email"/>
            </div>


            <div class="form-grup">
                <lebel for="jumlah pinjaman">Jumlah pinjaman</lebel>
                <input class="form-control" type="text" name="jumlah_pinjaman" placeholder="jumlah pinjaman"/>
            </div>
            <br>
            <div>
                <select class="form-control" name="masa_pinjaman">
                <option>--Masa pinjaman --</option>
                <option value="1 Bulan">1 Bulan</option>
                <option value="3 Bulan">3 Bulan</option>
                <option value="5 Bulan">5 Bulan</option>
                <option value="8 Bulan">8 Bulan</option>
                <option value="1 Tahun">1 Tahun</option>
            </select> 
            </div>
             <div class="form-grup">
                <lebel for="Penhasilan Perbulan">Penghasilan Perbulan</lebel>
                <input class="form-control" type="text" name="Penghasilan_Perbulan" placeholder="Penhasilan Perbulan"/>
            </div>
        </div>
        <div class="col-md-6">

            <br>
            <div>
                <select class="form-control" name="Pekerjaan">
                <option>--Pekerjaan --</option>
                <option value="Pegawai Swasta">Pegawai Swasta</option>
                <option value="Pegawai Negri">Pegawai Negri</option>
                <option value="Kontrak">Kontrak</option>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="TNI atau POLISI">TNI atau POLISI</option>
            </select> 
            </div>
             <div class="form-grup">
                <lebel for="Provinsi">Provinsi</lebel>
                <input class="form-control" type="text" name="Provinsi" placeholder="Provinsi"/>
            </div>

            <div class="form-grup">
                <lebel for="Kota">Kota</lebel>
                <input class="form-control" type="text" name="Kota" placeholder="Kota"/>
            </div>

            <div class="form-grup">
                <lebel for="Umur">Umur</lebel>
                <input class="form-control" type="text" name="Umur" placeholder="Umur"/>
            </div>
            <br>
            <div>
                <select class="form-control" name="jenis_kelamin">
                <option>--Jenis Kelamin --</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select> 
            </div>




            <br>
            <input type="submit" class="btn btn-success btn-block" name="Register" value="selesai"></input>

        </form>

       

    </div>
</div>
        
        
        
    	


     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 