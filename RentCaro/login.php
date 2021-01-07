<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styleslogin.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
	
<div class="limiter" >
				<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
				</div>
				<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
				</div>		
		<h1 class="title1">
			Rent CARo
		</h1>
		<div class="row">
		<div class="col-lg-6 img-col">
			<img src="images/landingimage.png" alt="Login-Image" class="login-image">
		</div>	
		<div class="col-lg-6 form-col">
		<div class="login-container">	
				<div class="form-container">
					<div class="form-tabs"><button type="button" class="btn btn-tab" id="register">Register</button><span> │ </span> <button type="button" class="btn btn-tab" id="login">Login</button></div>

					<form id="register_form" name="form1" method="post">
							<div class="form-group">
							<label for="email">Name:</label>
							<input type="text" class="form-control" id="name" placeholder="Name" name="name">
						</div>
						<div class="form-group">
							<label for="pwd">Email:</label>
							<input type="email" class="form-control" id="email" placeholder="Email" name="email">
						</div>
						<div class="form-group">
							<label for="pwd">Phone:</label>
							<input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
						</div>
						<div class="form-group" >
							<label for="pwd">City:</label>
							<select name="city" id="city" class="form-control">
								<option value="">Select</option>
								<option value="Chennai">Chennai</option>
								<option value="Delhi">Delhi</option>
								<option value="Hyderabad">Hyderabad</option>
								<option value="Mumbai">Mumbai</option>
								<option value="Pune">Pune</option>
							</select>
						</div>
						<div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control" id="password" placeholder="Password" name="password">
						</div>
						<input type="button" name="save" class="btn btn-primary" value="Register" id="butsave">
					
					</form>

				
					<form id="login_form" name="form1" method="post" style="display:none;">
						<h3 class="title1">ACCOUNT LOGIN</h3>
						<div class="form-group">
							<label for="pwd">Email:</label>
							<input type="email" class="form-control" id="email_log" placeholder="Email" name="email">
						</div>
						<div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control" id="password_log" placeholder="Password" name="password">
						</div>
						<input type="button" name="save" class="btn btn-primary" value="Login" id="butlogin">
						<div class="forgot-pass">
							<span class="">
								Forgot
							</span>

							<a href="#" class="">
								Username / Password?
							</a>
						</div>
					</form>
				</div>	
			</div>
		</div>
		</div>
	</div>

<script>
$(document).ready(function() {
	$('#login').on('click', function() {
		if($("#register_form").is(":visible")){
			$("#register_form").hide();
			$("#login_form").show();
         } else{
			$("#login_form").show();
         }
	});
	$('#register').on('click', function() {
		$("#login_form").hide();
		$("#register_form").show();
	});
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var name = $('#name').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var city = $('#city').val();
		var password = $('#password').val();
		if(name!="" && email!="" && phone!="" && password!="" ){
			$.ajax({
				url: "php/save.php",
				type: "POST",
				data: {
					type: 1,
					name: name,
					email: email,
					phone: phone,
					city: city,
					password: password						
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#register_form').find('input:text').val('');
						$("#success").show();
						$('#success').html('Registration successful !'); 						
					}
					else if(dataResult.statusCode==201){
						$("#error").show();
						$('#error').html('Email ID already exists !');
					}
					
				}
			});
		}
		else{
			alert('Please fill all the fields !');
		}
	});
	$('#butlogin').on('click', function() {
		var email = $('#email_log').val();
		var password = $('#password_log').val();
		if(email!="" && password!="" ){
			$.ajax({
				url: "php/save.php",
				type: "POST",
				data: {
					type:2,
					email: email,
					password: password						
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						location.href = "index.php";						
					}
					else if(dataResult.statusCode==201){
						$("#error").show();
						$('#error').html('Invalid Email or Password !');
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});
</script>
</body>
</html>    