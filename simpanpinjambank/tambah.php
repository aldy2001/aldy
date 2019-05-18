
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah User</title>
    <link  rel="icon" type="image/png" href="img/7.png">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
   
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
                <a href="admin.php" class="navbar-brand page-scroll">Tambah User</a>
            </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li><a href="admin.php">Back To Admin</a></li>
                </ul>
                            
            </div>   
            </nav>
     <!-- akhir navbar-->
     <br><br><br><br>
<div class="container">
<div class="row">
        <div class="col-md-6">


        <form action="proses.php" method="POST">

            <div class="form-grup"  >
                <lebel for="username" >Username</lebel>
                <input class="form-control" type="text" name="username" placeholder="username"/>
            </div>

            <div class="form-grup">
                <lebel for="password">Password</lebel>
                <input class="form-control" type="text" placeholder="password" name="password"/>
            </div>

            <div class="form-grup">
                <lebel for="level">Level</lebel>
                <input class="form-control" type="text" name="level" placeholder="level"/>
            </div>

            
            <br>
            <input type="submit" class="btn btn-success btn-block" name="tambah" value="selesai"></input>

        </form>

     
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>

    
</body>
</html>