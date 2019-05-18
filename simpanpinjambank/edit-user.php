<?php
include ("config.php");

 
$id = $_GET['id']; // id berasal dari url
$query = "SELECT * FROM login WHERE id = $id";
$data = mysqli_query($db, $query);
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Edit user</title>
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
    <form action="proses-update-user.php" method="post">
        username : <input type="text" name="username" value="<?php echo $row['username']; ?>"><br><br>
         password : <input type="text" name="password" value="<?php echo $row['password']; ?>"><br><br>
          level: <input type="text" name="level" value="<?php echo $row['level']; ?>"><br><br>

        
        
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="submit" name="submit" value="Update Data">
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