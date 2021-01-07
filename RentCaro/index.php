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
    
  
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
 
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <a class="navbar-brand logo-text page-scroll" href="index.html">RENT CARO</a>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#intro">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="cars.php">CARS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">CONTACT US</a>
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
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>RENT <span id="js-rotating">SUV, SEDAN, HATCHBACK</span></h1>
                            <p class="p-heading p-large">Rent Caro simplified car rentals, so you can focus on what's important to you.</p>
                            <a class="btn-solid-lg page-scroll" href="#intro">ABOUT US</a>
                        </div>
                    </div> 
                </div> 
            </div> 
        </div> 
    </header> 
    
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">ABOUT US</div>
                        <h2>We have a range of cars, so something will perfectly fit your trip</h2>
                        <p>Travel as you like, rent a car for self-drive by hourly, daily, weekly, or monthly options according to your travel plans.</p>
                    </div> 
                </div> 
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/about_us.png" alt="About Us">
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 
    

    <div id="services" class="cards-2">
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
                            <a class="btn-solid-reg page-scroll" href="cars.php">DETAILS</a>
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
                            <a class="btn-solid-reg page-scroll" href="cars.php">DETAILS</a>
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
                            <a class="btn-solid-reg page-scroll" href="cars.php">DETAILS</a>
                        </div> 
                    </div>
                    

                </div> 
            </div> 
        </div>
    </div>
    
	<div id="details" class="accordion">
		<div class="area-1">
		</div><div class="area-2">
            
            <div class="accordion-container" id="accordionOne">
                <h2>One size never fits all</h2>
                <div class="item">
                    <div id="headingOne">
                        <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                            <span class="circle-numbering">1</span><span class="accordion-title">SUV</span>
                        </span>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOne">
                        <div class="accordion-body">
                            If you anticipate longer trips SUVs are crafted to keep up with your on-the-go lifestyle.
                        </div>
                        <div class="accordion-body">
                            5-7 People
                        </div>
                    </div>
                </div> 
            
                <div class="item">
                    <div id="headingTwo">
                        <span class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
                            <span class="circle-numbering">2</span><span class="accordion-title">SEDAN</span>
                        </span>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOne">
                        <div class="accordion-body">
                            If it is on highways or terrible streets, you won’t discover inconvenience in a good sedan.
                        </div>
                        <div class="accordion-body">
                            2-5 People
                        </div>
                    </div>
                </div> 
            
                <div class="item">
                    <div id="headingThree">
                        <span class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
                            <span class="circle-numbering">3</span><span class="accordion-title">HATCHBACK<span>
                        </span>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionOne">
                        <div class="accordion-body">
                            For a pocket friendly alternative that doesn't burn a hole in your pocket.
                        </div>
                        <div class="accordion-body ">
                            1-4 People
                        </div>
                    </div>
                </div> 
            </div> 
        

		</div> 
    </div> 

    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2>CONTACT US</h2>
                        <p>You can call us on the given number or just use the contact form below for any questions and inquiries</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>1234 Street, Chembur, Mumbai</li>
                            <li><i class="fas fa-phone"></i><a href="#">+91 111 222 3333</a></li>
                            <li><i class="fas fa-phone"></i><a href="#">+91 444 555 6666</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:2018.vedant.sawant@ves.ac.in">2018.vedant.sawant@ves.ac.in</a></li>
                        </ul>
                    </div>
                </div> 
                <div class="col-lg-6">
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I agree with  <a href="#">Privacy Policy</a> and <a href="#">Terms Conditions</a> 
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>

                </div> 
            </div> 
        </div> 
    </div> 

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
    <script>  
    $(document).ready(function(){  
        function check_session()
        {
            $.ajax({
                url:"php/check_session.php",
                method:"POST",
                success:function(data)
                {
                if(data == '1')
                {
                    alert('Your session has been expired!');  
                    window.location.href="login.php";
                }
                }
            })
        }
            setInterval(function(){
            check_session();
            }, 10000);  //10000 means 10 seconds
    });  
    </script>
</body>
</html>