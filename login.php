<?php
session_start();

// jika udah ada/udah dibuat session login maka ketika user membuka view.php tendang ke login.php
if(isset($_SESSION["login"])){
    header("Location: view.php");
    exit;
}
require'function.php';
if(isset($_POST["login"])){

    $username=$_POST["username"];
    $password=$_POST["password"];

    // cek apakah ada didatabase username seperti apa yg diinput dikolom username
    $result=mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");

    // cek username
    if(mysqli_num_rows($result)===1){
        // kalo ada username di database kemudian cek password
        $row = mysqli_fetch_assoc($result);
        // gunakan function php password verify dengan 2 paramter yaitu string yg blum diacak dan string yg sudah diacak
        if(password_verify($password,$row["password"])){
            // set session
            $_SESSION["login"] = true;
            // redirect user ke view.php
            header("Location:view.php");
            exit;
        }

    }

    $error = true;
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
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
<h1>Halaman Login</h1>

<?php if(isset($error)):?>
<p style="color:red;font-style:italic;">Username/password salah</p>
    <?php endif; ?>
<br>
    <form action="" method="post" >
  <div class="form-group" style="width:550px;">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
  </div>
  <div class="form-group" style="width:550px;">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <button type="submit" name="login" class="btn btn-primary">Sign In</button>
  </form>
    
</body>
</html>