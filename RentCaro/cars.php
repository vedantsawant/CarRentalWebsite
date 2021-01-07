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
                <img class="d-block w-100" src="images/carousel1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/carousel2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/carousel3.jpg" alt="Third slide">
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
            <div class="row">
                <div class="col-lg-12">
            
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/SUV.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">SUV</h3>
                            <p> If you anticipate longer trips SUVs are crafted to keep up with your on-the-go lifestyle.</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">All-terrain capability</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Generous loadspace capacity</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>₹1499</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#suv">DETAILS</a>
                        </div> 
                    </div>      
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/sedan.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">SEDAN</h3>
                            <p>If it is on highways or terrible streets, you won’t discover inconvenience in a good sedan.</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Comfort at it's best</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Superior Mileage</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>₹1299</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#sedan">DETAILS</a>
                        </div> 
                    </div>
            
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/hatchback.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">HATCHBACK</h3>
                            <p>For a pocket friendly alternative that doesn't burn a hole in your pocket.</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Best in class fuel efficiency</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Pocket friendly</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>₹899</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#hatchback">DETAILS</a>
                        </div> 
                    </div>
                    

                </div> 
            </div> 
        </div>
    </div>
    <hr style="color: black; margin: 0;">

    <div id="suv" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">CARS</div>
                    <h2>SUV</h2>
                </div> 
            </div>
            <div class="row">
                <div class="col-lg-12">
            
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/economy-suv.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">SUV</h3>
                            <p> If you anticipate longer trips SUVs are crafted to keep up with your on-the-go lifestyle.</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">All-terrain capability</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Generous loadspace capacity</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>₹2000</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="bookingSUV.php">BOOK</a>
                        </div> 
                    </div>      
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/crossover-suv.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">CROSSOVER</h3>
                            <p>For a pocket friendly alternative that doesn't burn a hole in your pocket.</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Best in class fuel efficiency</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Pocket Friendly</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>₹1800</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="bookingCrossover.php">BOOK</a>
                        </div> 
                    </div>
            
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/premium-suv.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">PREMIUM</h3>
                            <p>If it is on highways or terrible streets, you won’t discover inconvenience in a Premium SUV</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Comfort at it's best</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Superior luxury</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>₹2500</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="bookingPreSUV.php">BOOK</a>
                        </div> 
                    </div>
                    

                </div> 
            </div> 
        </div> 
    </div> 

    <hr style="color: black; margin: 0;">

    <div id="suv" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">CARS</div>
                    <h2>SEDAN</h2>
                </div> 
            </div>
            <div class="row">
                <div class="col-lg-12">
            
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/economy-sedan.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">SEDAN</h3>
                            <p> If you anticipate comfy trips Sedans are crafted to keep up with your luxury lifestyle.</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Best in class luxury</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Generous loadspace capacity</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>₹2000</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="bookingSedan.php">BOOK</a>
                        </div> 
                    </div>      
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/compact-sedan.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">COMPACT</h3>
                            <p>For a pocket friendly alternative that doesn't burn a hole in your pocket.</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Best in class fuel efficiency</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Pocket Friendly</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>₹1800</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="bookingComSedan.php">BOOK</a>
                        </div> 
                    </div>
            
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/premium-sedan.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">PREMIUM</h3>
                            <p>If it is on highways or terrible streets, you won’t discover inconvenience in a Premium Sedan</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Comfort at it's best</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Superior luxury</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>₹2500</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="bookingPreSedan.php">BOOK</a>
                        </div> 
                    </div>
                    

                </div> 
            </div> 
        </div> 
    </div> 

    <hr style="color: black; margin: 0;">

 
    <div id="suv" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">CARS</div>
                    <h2>HATCHBACK</h2>
                </div> 
            </div>
            <div class="row">
                <div class="col-lg-12">
            
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/hybrid-hatchback.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">HYBRID</h3>
                            <p> If you anticipate longer trips SUVs are crafted to keep up with your on-the-go lifestyle.</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Hybrid Electric cars</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Eco-friendly & Economic</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>₹1500</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="bookingHybrid.php">BOOK</a>
                        </div> 
                    </div>      
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/economy-hatchback.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">ECONOMY</h3>
                            <p>A modern alternative with superior mileage</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Best in class fuel efficiency</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Pocket Friendly</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>₹1200</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="bookingHatchback.php">BOOK</a>
                        </div> 
                    </div>
            
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/premium-hatchback.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">PREMIUM</h3>
                            <p>If it is on highways or terrible streets, you won’t discover inconvenience in a Premium SUV</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Comfort at it's best</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Superior luxury</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>₹1800</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="bookingPreHatchback.php">BOOK</a>
                        </div> 
                    </div>
                    

                </div> 
            </div> 
        </div> 
    </div> 

    <hr style="color: black; margin: 0;">
   

</div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="text-container about">
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