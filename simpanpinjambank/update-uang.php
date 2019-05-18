<?php
include ("config.php");
$id = $_GET['id']; // id berasal dari url
$query = "SELECT * FROM bank WHERE id = $id";
$data = mysqli_query($db, $query);
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Update Uang</title>
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
                <a href="admin.php" class="navbar-brand page-scroll">Update Uang</a>
            </div>
   
            </nav>
     <!-- akhir navbar-->
     <br><br><br><br>
     <div class="container">
    <h3>Tambah Saldo Bank</h3>
    <?php while($row = mysqli_fetch_assoc($data)){ ?>
    <form action="proses-update-bank.php" method="post">
        Jumlah Uang : <input type="text" name="jumlah_uang" value="<?php echo $row['jumlah_uang']; ?>"><br><br>

        
        
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="submit" name="submit" value="Update Data">
    </form>
    </div>
    <?php
    } // end while

    ?>
</body>
</html>