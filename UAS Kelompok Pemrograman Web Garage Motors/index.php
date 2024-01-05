<!DOCTYPE html>
<html lang = "en">

<head>
     <meta charset = "UTF-8">
     <meta name    = "viewport" content = "width=device-width, initial-scale=1.0">
     <link rel     = "icon" type = "image/png" sizes = "35x34" href ="./image/logo.jpg">
     <title> Garage Motor ~ Always You </title>
     <link href    ="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel     = "stylesheet" href = "./style/style.css">
</head>

<body>

<header   
          class = "menu1">
     <div class = "menu2">
     <div class = "menu3">
     <div class = "menu3">
          <li><a href = "index.php"> Halaman </a></li>
          <li><a href = "motor.php"> Motor </a></li>
          <li><a href = "tabelpenjualan.php"> Tabel </a></li>
          <li><a href = "lainnya.php"> Lainnya </a></li>
</div>
</div>
</div>
<?php
     session_start();
     if(!isset($_SESSION['status'])) 
     {  
          ?>
          <div class    ="col-3"> </div>
          <button type  ="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#loginModal"> Login </button>
          &nbsp;
          <button class ="btn btn-primary btn-sm" data-toggle="modal" data-target="#registerModal"> Register </button>
          <?php  
     } 
     else if ($_SESSION['status'] == "login") 
     {
          $user = $_SESSION['username'];
          ?>
          <a class    ="navbar-brand" href="index.php"><?php echo $_SESSION['username'] ?></a>
          <div class  ="col-3"></div>
          <a href     ="index.php?page=logout"><button class="btn btn-primary btn-sm" type="button"> Logout </button></a>
          <?php 
     } 
?>
</header>

<div class ="container" id = "content">
    <?php
         if (isset($_GET['notification'])) 
     {
         $notification = urldecode($_GET['notification']);
         echo '<div id="customNotification" class=" alert alert-warning">'.$notification.'</div>';
     }
    ?>   
    <div class ="table-responsive">
     <?php
     include "sql.php"; 
     $halaman = isset($_GET['page']) ? $_GET['page'] :'home';
     switch ($halaman) {
          case 'home':
          include('home.php'); 
          break;
     }
     switch ($halaman) {
          case 'login':
          include('login.php'); 
          break;
     }
     switch ($halaman) {
          case 'register':
          include('register.php'); 
          break;
     }
     switch ($halaman) {
          case 'logout':
          include('logout.php'); 
          break;
     }
     ?> 
</div>
</div>

<div id   ="carouselExampleIndicators"class="carousel slide">
<div class="carousel-indicators">
    <button type ="button" data-bs-target ="#carouselExampleIndicators" data-bs-slide-to ="0" class     ="active" aria-current="true" aria-label="Slide 1"></button>
    <button type ="button" data-bs-target ="#carouselExampleIndicators" data-bs-slide-to ="1" aria-label="Slide 2"></button>
    <button type ="button" data-bs-target ="#carouselExampleIndicators" data-bs-slide-to ="2" aria-label="Slide 3"></button>
    </div>
<div class      ="carousel-inner">
<div class      ="carousel-item active">
     <img src   ="./image/a.jpg" class=" d-block w-50 p-3 " alt="">
     </div>
<div class      ="carousel-item">
     <img src   ="./image/b.jpg" class="d-block w-50 p-3" alt="">
     </div>
<div class      ="carousel-item">
     <img src   ="./image/c.png" class="d-block w-50 p-3" alt="">
     </div>
     </div>
<button class   ="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
<span   class   ="carousel-control-prev-icon" aria-hidden="true"></span>
<span   class   ="visually-hidden"> Kembali </span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
<span   class="carousel-control-next-icon" aria-hidden="true"></span>
<span   class="visually-hidden"> Selanjutnya </span>
</button>
</div>

     <div class     = "banners1"> 
     <div class     = "banners2">
     <div class     = "contents1">
     <h1 class      = "title1"> Garage Motors Always You</h1>
     </div>
     </div>
     </div>

      <!-- Features 1 -->
     <div class     = "f1">
     <div class     = "container">
          <h2 class = "f2title"> Display Motors </h2>
          </p>

     <div class      = "f3box">
     <div class      = "feature-content">
          <img src   = "./image/scoopy.png" class = "f4icon">
          <p class   = "f5name"> Scoopy </p>
          </div>

     <div class      = "f3box">
     <div class      = "feature-content">
          <img src   = "./image/2.png" class = "f4icon">
          <p class   = "f5name"> Nmax </p>
          </div>
     
     <div class      = "f3box">
     <div class      = "feature-content">
          <img src   = "./image/3.png" class = "f4icon">
          <p class   = "f5name"> Vario </p>
     </div>
     </div>
     </div>
     </div>

     <!-- Features 2 -->
     <div class  = "f1">
     <div class  = "container">
     <h2 class   = "f2title"> Display Motors </h2>
     </p>
           
     <div class      = "f3box">
     <div class      = "feature-content">
          <img src   = "./image/beat.jpg" class = "f4icon">
          <p class   = "f5name"> Beat </p>
          </div>
          
     <div class      = "f3box">
     <div class      = "feature-content">
          <img src   = "./image/5.jpg" class = "f4icon">
          <p class   = "f5name"> Vespa Sprint </p>
          </div>
     
     <div class      = "f3box">
     <div class      = "feature-content">
          <img src   = "./image/6.jpg" class = "f4icon">
          <p class   = "f5name"> Vespa LX </p>
          </div>  
     </div>
     </div>
     </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>




