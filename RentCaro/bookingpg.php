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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking Form</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<link type="text/css" rel="stylesheet" href="css\bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="css\xyz.css" />


</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Book a car</h1>
						</div>
						<form method="POST"  action="php\bk.inc.php">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name on Bill</span>
										<input class="form-control" name="name" type="text" placeholder="Enter your name" required>
									</div>
								</div>
								<div class="col-sm-6">
							<div class="form-group">
							<span class="form-label">Phone on Bill</span>
							 <input class="form-control" name="phone" type="tel" placeholder="Enter your phone number" required>	
							</div>
						</div>

							</div>
							<div class="row">
								<div class="col-sm-6">
							<div class="form-group">
								<span class="form-label">City</span>
								<select id="city" name="city">
								<option value="" disabled selected>Choose your option</option>
									<option value="Mumbai">Mumbai</option>
									<option value="Hyderabad">Hyderabad</option>
									<option value="New Delhi">New Delhi</option>
									<option value="Amritsar">Amritsar</option>
								</select>
							</div>
							</div>
							<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Pincode</span>
										<input class="form-control" name="pincode" type="pincode" placeholder="Enter your Pincode" required>
									</div>
								</div>
						</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Pickup Date</span>
										<input class="form-control" name="pickup_date" type="date" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Return Date</span>
										<input class="form-control" name="return_date" type="date" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Enter UID:</span>
											<input class="form-control" name="uid" placeholder="Enter your UID" required>
										</div>
									</div>

						       <div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Discount Coupon (Optional)</span>
								  <input class="form-control" name="discount" type="text" placeholder="Discount Code" >
										
									</div>
								</div>

							<div class="row">
							<div class="col-sm-6">
									<div class="form-group" style="margin-left: 1.5rem;">
										<span class="form-label">Car Model</span>
										<input type="hidden" name="model" value=<?php echo $_SESSION['car_model'];?>>
										<strong>
										<?php
										 echo $_SESSION['car_model'];
										?>
										</strong>
									</div>
								</div>	
						   <div class="col-sm-6">
							<div class="form-group">
							
							<span class="form-label">Insurance (Optional)</span>
							<select id="mySelect" name="insurance" onchange="calculateAmount(this.value)" >
								<option value="" disabled selected>Choose your option</option>
								<option value="1000">Collision</option>
								<option value="1100">Personal Accident</option>
								<option value="1000">Liability</option>
                            </select>
							</div>
							</div>
							<br><br>
							<div class="col-sm-12">
							<div class="form-group">
							
		                    <div style="margin-top:1.5rem; margin-left:1.5rem; margin-right:1.5rem;"class="form-btn text-center" style="items">
								<input type="submit" name="Checkout" button class="submit-btn"></button>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>