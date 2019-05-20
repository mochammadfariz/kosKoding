<?php 
session_start();
// jika blom ada/blom dibuat session login maka ketika user membuka view.php tendang ke login.php
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'function.php';

$client= query("SELECT*FROM contact");

//tombol cari diklik
if(isset($_POST["cari"])){
    $client = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman admin</title>
    <style>
    .loader{
        width:100px;
        position:absolute;
        top: 143px;
      display:none;
    }
    </style>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
 <!-- navbar -->
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
             
          <a href="index.php" class="navbar-brand page-scroll">Mochammad Fariz</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
          
          <button style=" margin-top: 5px; margin-right:15px;" type="submit" name="login" class="btn btn-primary" onclick="location.href='logout.php'">Sign Out</button>
          </ul>
        </div>

      </div>
    </nav>
    <!-- akhir navbar -->
    
    <br>
    <h1>Daftar Client</h1>

    <br>
    <br>
    <form action="" method="post">
        <input type="text" name="keyword" id="keyword" size="40" autofocus placeholder="Cari berdasarkan nama,kategori,dll.." autocomplete="off"> 
        <button type="submit" name="cari" id="cari">Cari!</button>
        <img src="img/loader.gif" class="loader">
    </form>
    <br>
    <div id="container">
    <table class="table table-bordered table-striped">
    <tr style="font-weight:bold;" class="info">
    <td>No.</td>
    <td>Aksi</td>
    <td>Nama</td>
    <td>Email</td>
    <td>phone</td>
    <td>Kategori Contact</td>
    <td>message</td>
    </tr>

    <?php $i = 1;?>
    <!-- buat looping untuk menampilkan data dari database -->
    <?php foreach($client as $row) : ?>
    <tr>
    <td><?= $i; ?></td>
    <td><a class="glyphicon glyphicon-pencil" href="ubah.php?id=<?= $row["id"];?>">Ubah</a>|
    <a class="glyphicon glyphicon-trash" href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a></td>
    <td><?= $row["nama"];?></td>
    <td><?= $row["email"];?></td>
    <td><?= $row["phone"];?></td>
    <td><?= $row["kategori"];?></td>
    <td><?= $row["message"];?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

    </table>
    </div>  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/ajax.js" > </script> 
</body>
</html>