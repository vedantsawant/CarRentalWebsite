<?php  
      session_start(); 
      if( !isset($_SESSION["email"]) ){
        header("location:login.php");
        exit();
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title>RENT CARO</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
    <link rel="icon" href="images/logo.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
  
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <a class="navbar-brand logo-text page-scroll" href="index.html">RENT CARO</a>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php#intro">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="cars.php">CARS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php#contact">CONTACT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="profile.php"><?php echo $_SESSION['email'];?> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="php/logout.php">LOGOUT</a>
                </li>
            </ul>         
        </div>
    </nav>
    <header id="header" class="header">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/about_us.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/header-background.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/header-background.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </header> 
    
    <div id="category" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">CARS</div>
                    <h2>Choose The Package<br> That Suits Your Needs</h2>
                </div> 
            </div>
        </div>
    </div>
    <hr style="color: black; margin: 0;">


    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="text-container about col-lg-12">
                    <h4>RENT CARO</h4>
                    <p class="white">We have a range of cars, so something will perfectly fit your trip</p>
                </div> 
            </div> 
        </div> 
    </div>   

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="#"></a></p>
                </div> 
            </div> 
        </div> 
    </div> 
    
    <script src="js/jquery.min.js"></script> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.easing.min.js"></script> 
    <script src="js/swiper.min.js"></script> 
    <script src="js/jquery.magnific-popup.js"></script> 
    <script src="js/morphext.min.js"></script> 
    <script src="js/isotope.pkgd.min.js"></script> 
    <script src="js/validator.min.js"></script> 
    <script src="js/scripts.js"></script> 
</body>
</html>