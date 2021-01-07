<?php
    include_once 'php/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDERS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/stylesdash.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse">
          <div class="navbar-header">
            <a class="navbar-brand" href="dashboard.html"><h2>RENT CARO</h2></a>
          </div>
          <ul id= "sections"class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item"><a class="nav-link" href="dashboard.html">HOME</a></li>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="cars.php">INVENTORY
              <span class="caret"></span></a>
              <ul class="dropdown-menu bg-dark">
                <li><a class="nav-link" href="cars.php">CARS</a></li>
                <li><a class="nav-link" href="discount.php">DISCOUNTS</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="orders.php">ORDERS</a></li>
            <li class="nav-item"><a class="nav-link" href="users.php">USERS</a></li>
          </ul>
        </div>
      </nav>
      <div class="container pt-5" style="margin: 3rem auto;">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-auto d-block">
            <table class="table table-striped" id="firstTable">
                <thead class="bg-dark text-white" id="firstThead">
                    <th>Email</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>City</th>
                   
                </thead>
                <tbody>
                    <?php

                         $sql = "SELECT * FROM customer";
                         $result = mysqli_query($conn, $sql);
                 
                         if(mysqli_num_rows($result) > 0) {
                             $booking        =   mysqli_fetch_all($result,MYSQLI_ASSOC);
                             foreach($booking as $book) : ?>
                                <tr id="result">
                                    <td><?php echo $book['email']; ?> </td>
                                    <td><?php echo $book['name']; ?> </td>
                                    <td><?php echo $book['phone']; ?> </td>
                                    <td><?php echo $book['city']; ?> </td>
                
                                </tr>
                             <?php endforeach; 
                         }   
                         ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 col-md-6">
            <button type="button" class="btn btn-info btn-sm" id="loadBtn" onClick="window.location.reload();"> Refresh </button>
        </div>

    </div>
</div>

    
</body>
</html>