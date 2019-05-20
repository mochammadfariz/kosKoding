
<?php
require 'function.php';
//cek apakah tombol sudah ditekan apa belom
if(isset($_POST["submit"]) ){
  
 // cek apakah data berhasil ditambah / tidak
  if (tambah($_POST) > 0){
    echo"<script> alert('data berhasil ditambahkan!');</script>";
  }else{
    echo"<script> alert('data gagal ditambahkan!');</script>";
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
    <title>Portfolio</title>

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

          <a href="#home" class="navbar-brand ps">Tutor</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about" class="ps">About</a></li>
            <li><a href="#portfolio" class="ps">Project</a></li>
            <li><a href="#contact" class="ps">Contact</a></li>
           
          </ul>
        </div>

      </div>
    </nav>
    <!-- akhir navbar -->

  <!-- Jumbotron -->
<div class="jumbotron" >
<div class="row">
<div class="col-sm-4">
  <img src="img/fariz.jpg"  class="img-circle">
  <h3 style = "padding-left: 50px"><b>Mochammad Fariz</b></h3>
  <p style = "padding-left: 10px">Machine Learning Enthusiast</p>
  </div>
  <div class="col-sm-4">
  <img src="img/tutor/dheo.jpg"  class="img-circle">
  <h3 style = "padding-left: 70px"><b>Dheo Prasetyo</b></h3>
  <p style = "padding-left: 88px">Web Developer</p>
  </div>
  <div class="col-sm-4">
  <img src="img/tutor/Jurgen.jpg"  class="img-circle">
  <h3 style = "padding-left: 100px"><b>Jurgen Irgo</b></h3>
  <p style = "padding-left: 40px">Mobile Android Developer</p>
  </div>
  <div class="col-sm-4">
  <img src="img/tutor/wayan.jpg"  class="img-circle">
  <h3 style = "padding-left: 50px"><b>Wayan Krishna</b></h3>
  <p style = "padding-left: 10px">Mobile IOS & Web Developer</p>
  </div>
  <div class="col-sm-4">
  <img src="img/tutor/guruh.jpg"  class="img-circle">
  <h3 style = "padding-left: 70px"><b>Guruh Ajinugroho</b></h3>
  <p style = "padding-left: 88px">Web Developer</p>
  </div>
  <div class="col-sm-4">
  <img src="img/tutor/bambang2.jpg"  class="img-circle">
  <h3 style = "padding-left: 50px"><b>Bambang Solehudin</b></h3>
  <p style = "padding-left: 82px">Web Developer</p>
  </div>
</div>
</div>
<!-- akhir jumbotron -->

<img src="img/logo/logoKos.jpg" style="padding-left:460px" alt="">






<!-- about -->
<section class="about" id="about">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="text-center " id= "tabout">About</h2>
        <hr>
      </div>
    </div>

    <div class="row">
        <div class="col-sm-5 col-sm-offset-1" style="margin-top:5px">
       
          <h3 class="solid text-center">Web Developer  <img src="img/logo/php.png" alt=""  style="height: auto; width: 20%;" ></h3>
          <p>Dalam pembuatan aplikasi berbasis web dibutuhkan suatu bahasa pemrograman yang harus benar-benar dipahami oleh Web Developer, seperti JavaScript, PHP, ASP, Phyton, Java, MySQL, dan lain-lain</p>
        </div>
        <div class="col-sm-5" style="margin-top:0px">
            <h3 class="solid text-center">Mobile Developer <img src="img/logo/mobile.jpeg" alt=""  style="height: auto; width: 20%;" ></h3>
          <p>Pekerjaan sebagai mobile developer dikenal dengan memiliki penghasilan tinggi dan sangatlah dibutuhkan oleh perusahaan. Terutama dalam era teknologi, dimana pengguna smartphone sudah mencapai angka 371,4 juta! Jadi sudah jelas, pastinya pekerjaan sebagai mobile developer akan sangat banyak dibutuhkan oleh perusahaan.</p>
        </div>
      </div>
  </div>

<div class="row">
<div class="col-sm-5 col-sm-offset-4" >
<h3 class="solid text-center">Machine Learning <img src="img/logo/ML.png" alt=""  style="height: auto; width: 20%;" ></h3>
          <p>Kecerdasan buatan atau artificial intelligence (AI) telah menjadi salah satu topik terhangat di ranah teknologi dalam beberapa tahun terakhir. Para raksasa seperti Facebook, Google, dan Apple berlomba-lomba mengaplikasikannya dalam berbagai aspek.</p>
</div>
</div>

</section>
<!-- akhir about -->





<!-- portofolio -->
<section class="portfolio" id="portfolio">
  <div class="container">
      <div class="row">
          <div class="col-sm-12 text-center">
          <h2>Project</h2>
          <hr>
          </div>
      </div>

      <div class="row">
          <div class="col-sm-4">
            <a href="" class="thumbnail"><img src="img/portfolio/CIfix.png" alt=""></a>
          </div>
          <div class="col-sm-4">
              <a href="" class="thumbnail"><img src="img/portfolio/laravel.png" alt=""></a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail"><img src="img/portfolio/mysql.png" alt=""></a>
          </div>
      </div>
      <div class="row">
          <div class="col-sm-4">
            <a href="" class="thumbnail"><img src="img/portfolio/Javal.png" alt=""></a>
          </div>
          <div class="col-sm-4">
              <a href="" class="thumbnail"><img src="img/portfolio/kotlin.png" alt=""></a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail"><img src="img/portfolio/php.png" alt=""></a>
          </div>
      </div>
   </div>  
  
</section>
<!-- akhir portofolio -->

<!-- contact -->
<section class="contact" id="contact">
   <div class="container">
      <div class="row ">
          <div class="col-sm-12 text-center">
            <h2>Contact</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <form action="" method="POST">
              <div class="form-group">
                <label for="nama">Name</label>
                <input type="text" name ="nama" id="nama" class="form-control" placeholder="masukkan nama" required>
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name = "email" id="email" class="form-control" placeholder="masukkan email" required>
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="text" id="phone" name="phone" class="form-control" placeholder="masukkan nomor telepon" required>
                </div>
                <div>
                 <select class="form-control" id="kategori" name="kategori" required>
                  <option>-- Choose Category --</option>
                  <option>WebDeveloper</option>
                  <option >Photographer</option>
                  <option >WebDeveloper</option>
                </select>
                
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea id="message" name="message" class="form-control" rows="3" placeholder="write your message here.."></textarea>
                </div>

                <button name = "submit" id="submit" type="submit" class="btn btn-success">Send Message</button>
                

            </form>
          </div>
        </div>
        </div>
  </section>

    <!-- awal footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>copy right &copy 2019. | built by. <a href="https://www.instagram.com/skyalker_/">Mochammad Fariz Syah Lazuardy</a>.</p>
          </div>
        </div>
       
      </div>
    </footer>
    <!-- akhir footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;
      
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
      });
    } // End if
  });
});
</script> 

  </body>
</html>