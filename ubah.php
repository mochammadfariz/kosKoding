
<?php
session_start();
// jika blom ada/blom dibuat session login maka ketika user membuka view.php tendang ke login.php
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'function.php';

//ambil data di URL
$id = $_GET["id"];
// query data client berdasarkan id
$client = query("SELECT * FROM contact WHERE id=$id")[0];

//cek apakah tombol sudah ditekan apa belom
if(isset($_POST["submit"]) ){
  
 // cek apakah data berhasil diubah / tidak
  if (ubah($_POST) > 0){
    echo"<script> alert('data berhasil diubah!');
    document.location.href = 'view.php';</script>";
  }else{
    echo"<script> alert('data gagal diubah!');
    document.location.href = 'view.php';</script>";
  }
  }


?>

<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ubah data client</title>

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

        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <form action="" method="POST">
              <div class="form-group">
              <input type="hidden" name="id" value="<?= $client["id"]?>" >
                <label for="nama">Name</label>
                <input type="text" name ="nama" id="nama" class="form-control" placeholder="masukkan nama" required value="<?= $client["nama"]?>">
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name = "email" id="email" class="form-control" placeholder="masukkan email" required value="<?= $client["email"]?>">
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="text" id="phone" name="phone" class="form-control" placeholder="masukkan nomor telepon" required value="<?= $client["phone"]?>">
                </div>
                

                <button name = "submit" id="submit" type="submit" class="btn btn-success">Update data</button>
                

            </form>
          </div>
        </div>
        </div>
  </section>

   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js">
    </script>
    
    <script src="js/script.js"></script>  

  </body>
</html>