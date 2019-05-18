<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="login_css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/7.png">
</head>
<body>
 
 <?php
 if(isset($_GET['pesan'])){
     if($_GET['pesan']=="gagal"){
         echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
     }
 }
 ?>

 <div class="kotak_login">
     <h4 class="tulisan_login">LOGIN</h4>

     <form action="cek_login.php" method="post">
         <label>Username</label>
         <input type="text" name="username" class="form_login" placeholder="Username .." required="required">

         <label>Password</label>
         <input type="password" name="password" class="form_login" placeholder="Password .." required="required">

         <input type="submit" class="tombol_login" value="LOGIN">

         <br/>
         <br/>
         <center>
             <a class="link" href="index.php">Back To Home</a>
             Untuk Pebuatan akun Silahkan Hubungi Email
             <a href="mailto:aldi33546@gmail.com">"aldi33546@gmail.com"</a>
         </center>
     </form>
     
 </div>
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="js/jquery.min.js"></script>
                <script src="js/jquery.easing.1.3.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>
    
</body>
</html>