<?php  
 include 'php/database.php';
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
  <link href="css/stylesproduct.css" rel="stylesheet">
	
    <link rel="icon" href="images/logo.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
  
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top" style="background: #113448;">
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

    <br><br>
    <div class="container">
        <div class="row">
            
            <br><br>
            <div class="col-md-7">
              <script src="car.js"></script>
                <font color="Black">
                <br><br>  
                <h2>Premium SUV</h2>
                <form action='' method=post>
                <?php
                        include 'php/database.php';
                        if(mysqli_connect_error()){
                            die('Connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());
                
                        }
                
                        else{
                            
                            echo'<form method=post action="">';
                            
                echo "<br><b> Choose Car Model </b>";
                 
                $query = "SELECT avail,model FROM car where category='Premium SUV' and avail=1 ";
                if($r_set=$conn->query($query)){
                    
                    echo"<SELECT name=car class='form-control' style='width:200px;'>";

                    echo '<option value="" disabled selected>Choose your option</option>';
                    while($row=$r_set->fetch_assoc()){
                        
                        echo "<option value=$row[model]>$row[model]</option>";
                        $myvalue =implode("car", $_POST);
                    
                    }
                    echo"</select>";
                    
                    echo"<button style='margin:1rem 0;'class='btn btn-primary cart' type=submit>Submit</button>";
                    echo"</form>";
                    echo"<br>";
                    echo "<h4><strong>$myvalue</strong></h4>";
                    
                    
                    
                }else{
                   echo $conn->error; 
                }
                }
                
               ?>
               <br>
              
               </form>

                <div id="data">
                <?php
                include 'php/database.php';
                   $sql="SELECT * FROM car,category WHERE model='$myvalue' and car.category=category.category_id";
                   $result = mysqli_query($conn, $sql);
                   if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $milege = $row["mileage"];
                        $capacity = $row["capacity"];
                        $car_cost = $row["cost"];
                        $luggage = $row["luggage"];
                        $image =  $row["image"];

            }
        

                ?>
                <h4> <strong>Mileage: </strong> <?php echo $milege; ?></h4>   
                <br>
                <h4> <strong>Capacity: </strong> <?php echo $capacity; ?></h4>   
                <br>
                <h4> <strong>Car Cost: </strong> <?php echo $car_cost; ?></h4>   
                <br>
                <h4> <strong>Luggage: </strong> <?php echo $luggage; ?></h4>   
                <br>
                <h4> <strong>Availability: Available </strong></h4>
                <br>
                <h4> <strong>Image: </strong><?php echo '<img width=100% align=top src="data:image/jpeg;base64,'.base64_encode( $image ).'"/>' ?></h4>
                </div>
                <?php
                }else{
                    echo"<h4><strong>*Choose a Car Model*</strong></h4>";
                } 
                ?>
                <form method="POST" action="bookingpg.php">
                     <button type="button" class="btn btn-primary cart" onclick="document.location.href='bookingpg.php'<?php $_SESSION['car_model'] = $myvalue; ?>">Book Now</button>
                </form>
                
                
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