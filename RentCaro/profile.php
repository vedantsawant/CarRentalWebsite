<?php 
    include 'php/database.php';
    session_start(); 
    if( !isset($_SESSION["email"]) ){
        header("location:login.php");
        exit();
    }
    else{
        $id=$_SESSION['email'];
        $query= "SELECT * FROM customer WHERE email='$id'";
        $res = mysqli_query($conn, $query);
        $row= mysqli_fetch_all($res,MYSQLI_ASSOC);
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
  
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top"style="background: #113448;">
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
 
    <div id="profile" class="basic-1">
        <div class="card">
            <div class="card-header"><h3>Information</h3></div>
            <ul class="list-group list-group-flush">
            <?php
            include 'php/database.php';
            $id=$_SESSION['email'];
            $query= "SELECT * FROM customer WHERE email='$id'";
            $res = mysqli_query($conn, $query);
            $row= mysqli_fetch_all($res,MYSQLI_ASSOC);
            foreach($row as $name) :?>  
                <li class="list-group-item">Name: <?php echo $name['name'] ;?></li>
                <li class="list-group-item">Phone No.: <?php echo $name['phone'] ;?></li>
                <li class="list-group-item">City: <?php echo $name['city'] ;?></li>
                <?php endforeach; ?>
                <li class="list-group-item">Email: <?php echo $_SESSION['email'];?></li>
                
            </ul>
        </div>
          
    </div> 
    <h3 style="margin: 1.5rem 1rem">My Orders</h3>
    
    <div class="container pt-5" style="margin: 3rem auto;">
    
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-auto d-block">
            <table class="table table-striped" id="firstTable">
                <thead class="bg-info text-white" id="firstThead">
                    <th>Bill ID</th>
                    <th>Name</th>
                    <th>Phonet</th>
                    <th>City</th>
                    <th>Pincode</th>
                    <th>From</th>
                    <th>To</th>
                    
                </thead>
                <tbody>
                    <?php
                         include 'php/database.php';
                         $eml = $_SESSION['email'];
                         $sql = "SELECT * FROM bill WHERE email = '$eml'";
                         $final = mysqli_query($conn, $sql);
                         $booking  =  mysqli_fetch_all($final,MYSQLI_ASSOC);
                         foreach($booking as $book) : ?>
                                <tr id="result">
                                    <td><?php echo $book['bill_id']; ?> </td>
                                    <td><?php echo $book['name']; ?> </td>
                                    <td><?php echo $book['phone']; ?> </td>
                                    <td><?php echo $book['city']; ?> </td>
                                    <td><?php echo $book['pincode']; ?> </td>
                                    <td><?php echo $book['pickup_date']; ?> </td>
                                    <td><?php echo $book['drop_date']; ?> </td>
                                </tr>
                             <?php endforeach;?>
                </tbody>
            </table>
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
    <script src="https://kit.fontawesome.com/7e404f71a3.js" crossorigin="anonymous"></script>
</body>
</html>