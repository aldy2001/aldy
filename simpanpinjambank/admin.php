<?php
    include 'config.php';
?>
<html>
<head>
	<title>Dashbord Admin</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/7.png">
</head>
<body>
    <?php 
    session_start();
 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
    }
 
    ?>
	
     <!-- navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only" Toggle navigation></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a>
                <img src="img/d.png" width="50" height="50" class="d-inline-block align-top" alt="">Dashbord Admin
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php">Logout</a></li>
                </ul>
                            
            </div>   
            </nav>
     <!-- akhir navbar-->
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-4"> 
        <h3>Jumlah Uang Bank</h3>
        <div class="table-responsive">
    <table class="table table-bordered" border="1">
        <tr  class="bg-primary">
           
            <td><center>Nilai Uang</center></td>
            <td><center>Action</center></td>
            </tr>
        <?php
        $query = mysqli_query ($db, "SELECT * FROM bank");
        while($data = mysqli_fetch_array($query)){ 
        ?>

        <tr>
           
            <td>Rp.<?php echo $data['jumlah_uang']; ?></td>
            <td>
                <center>
                     <button><a href="update-uang.php?id=<?php echo $data['id']; ?>">Update</a></button>
                </center>
            </td>
            </tr>
        <?php } 
        ?>

    </table>

        </div>
        </div>
        
     <h3>Data Peminjam</h3>
     
     <div class="table-responsive">
    <table class="table table-bordered" border="1">
        <tr  class="bg-primary">
            <td><center>No.</center></td>
            <td><center>Nama Lengkap</center></td>
            <td><center>Alamat Lengkap</center></td>
            <td><center>Email</center></td>
            <td><center>Jumlah Pinjaman</center></td>
            <td><center>Masa Pinjaman</center></td>
            <td><center>Penghasilan Perbulan</center></td>
            <td><center>Pekerjaan</center></td>
            <td><center>Provinsi</center></td>
            <td><center>Kota</center></td>
            <td><center>Umur</center></td>
            <td><center>Jenis Klamin</center></td>
            <td><center>Action</center></td>
            
        </tr>
        <?php
        $query = mysqli_query ($db, "SELECT * FROM user");
        while($data = mysqli_fetch_array($query)){ 
        ?>

        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['nama_lengkap']; ?></td>
            <td><?php echo $data['alamat_lengkap']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['jumlah_pinjaman']; ?></td>
            <td><?php echo $data['masa_pinjaman']; ?></td>
            <td><?php echo $data['penghasilan_perbulan']; ?></td>
            <td><?php echo $data['pekerjaan']; ?></td>
            <td><?php echo $data['provinsi']; ?></td>
            <td><?php echo $data['kota']; ?></td>
            <td><?php echo $data['umur']; ?></td>
            <td><?php echo $data['jenis_klamin']; ?></td>
            <td><button>
            <a href="edit-pinjaman.php?id=<?php echo $data['id']; ?>">EDIT</a></button>
            <button><a href="delet-pinjaman.php?id=<?php echo $data['id']; ?>">DELETE</a></button>
            </td>
            
           
        </tr>
        <?php } 
        ?>

    </table>
    
 

    
  
    <h3>Data User</h3>
	<button><a href="tambah.php">+ TAMBAH USER</a></button><br><br>
    <table class="table table-bordered" border="1">
        <tr  class="bg-primary">
            <td><center>No.</center></td>
            <td><center>User Name</center></td>
            <td><center>Password</center></td>
            <td><center>Level</center></td>
            <td><center>Action</center></td>
            
        </tr>
        <?php
        $query = mysqli_query ($db, "SELECT * FROM login");
        while($data = mysqli_fetch_array($query)){ 
        ?>

        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><?php echo $data['level']; ?></td>
            <td>
           <button><a href="edit-user.php?id=<?php echo $data['id']; ?>">EDIT</a></button>
           <button><a href="delet-user.php?id=<?php echo $data['id']; ?>">DELETE</a></button>
            </td>
        </tr>
        <?php } 
        ?>

    </table>
    </div><br><br>
    
     
     


            
          


     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
 
	
</body>
</html>
