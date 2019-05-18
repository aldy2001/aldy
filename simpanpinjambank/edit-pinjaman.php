<?php
include ("config.php");

 
$id = $_GET['id']; // id berasal dari url
$query = "SELECT * FROM user WHERE id = $id";
$data = mysqli_query($db, $query);
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Edit Pinjaman</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/7.png">
</head>
<body>

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
                <a href="admin.php" class="navbar-brand page-scroll">Update User</a>
            </div>
   
            </nav>
     <!-- akhir navbar-->
     <br><br><br><br>
     <div class="container">
    <h3>Edit User</h3>
    <?php while($row = mysqli_fetch_assoc($data)){ ?>
    <form action="proses-update-peminjaman.php" method="post">
        Nama Lengkap : <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>"><br><br>
        Alamat Lengkap  : <input type="text" name="alamat_lengkap" value="<?php echo $row['alamat_lengkap']; ?>"><br><br>
          Email : <input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>
           Jumlah Pinjaman : <input type="text" name="jumlah_pinjaman" value="<?php echo $row['jumlah_pinjaman']; ?>"><br><br>
         Masa Pinjaman : <input type="text" name="masa_pinjaman" value="<?php echo $row['masa_pinjaman']; ?>"><br><br>Penghasilan Perbulan : <input type="text" name="penghasilan_perbulan" value="<?php echo $row['penghasilan_perbulan']; ?>"><br><br>
          Pekerjaan : <input type="text" name="pekerjaan" value="<?php echo $row['pekerjaan']; ?>"><br><br>
          Provinsi : <input type="text" name="provinsi" value="<?php echo $row['provinsi']; ?>"><br><br>
          Kota : <input type="text" name="kota" value="<?php echo $row['kota']; ?>"><br><br>
          Umur : <input type="text" name="umur" value="<?php echo $row['umur']; ?>"><br><br>
          Jenis Klamin : <input type="text" name="jenis_klamin" value="<?php echo $row['jenis_klamin']; ?>"><br><br>
          
        
        
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="submit" name="submit" value="Update Data"><br><br>
    </form>
    </div>
    <?php
    } // end while

    ?>

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>