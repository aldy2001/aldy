<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<br> 
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>

        <h4>Silah kan isi data di bawah ini...</h4>
        <p>Untuk melakukan peminjaman</a></p>

        <form action="" method="POST">

            <div class="form-grup">
                <lebel for="name">Nama lengkap</lebel>
                <input class="form-control" type="text" name="nam" placeholder="Nama Kamu"/>
            </div>

            <div class="form-grup">
                <lebel for="alamat lengkap">Alamat lengkap</lebel>
                <input class="form-control" type="text" name="alamat lengkap
                " placeholder="alamat lengkap"/>
            </div>

            <div class="form-grup">
                <lebel for="email">Email</lebel>
                <input class="form-control" type="text" name="email" placeholder="email"/>
            </div>


            <div class="form-grup">
                <lebel for="jumlahpinjaman">Jumlah pinjaman</lebel>
                <input class="form-control" type="text" name="jumlahpinjaman" placeholder="jumlahpinjaman"/>
            </div>
            <br>
            <div>
                <select class="form-control">
                <option>--Masa pinjaman --</option>
                <option value="">1 Bulan</option>
                <option value="">3 Bulan</option>
                <option value="">5 Bulan</option>
                <option value="">8 Bulan</option>
                <option value="">1 Tahun</option>
            </select> 
            </div>

             <div class="form-grup">
                <lebel for="Penhasilan Perbulan">Penhasilan Perbulan</lebel>
                <input class="form-control" type="text" name="Penhasilan Perbulan" placeholder="Penhasilan Perbulan"/>
            </div>
            <br>
            <div>
                <select class="form-control">
                <option>--Pekerjaan --</option>
                <option value="">Pegawai Swasta</option>
                <option value="">Pegawai Negri</option>
                <option value="">Kontrak</option>
                <option value="">Wiraswasta</option>
                <option value="">TNI atau POLISI</option>
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
                <select class="form-control">
                <option>--Jenis Klamin --</option>
                <option value="">Laki-Laki</option>
                <option value="">Perempuan</option>
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