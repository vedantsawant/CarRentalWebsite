<?php 
$res = false;
if (isset($_POST["submit"])) {
	$dob_val = $_POST["dob"];
	$dob = new DateTime($dob_val);
	$today = new DateTime('today');
	$obj = date_diff($dob, $today, FALSE);
	$msgres = "<p> Date Of Birth is $dob_val  And Age is : $obj->y </p>";
	$msgres .= "<p>Year : ".$obj->y." Months : ".$obj->m." Days : ".$obj->d."</p>";
	$res = true;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./CSS/signup_page.css">
	<title>Sign Up</title>
	<link href="assets/css/rent-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
	<link href="assets/css/body.css" type="text/css"
	rel="stylesheet" />
	<link href="style_index.css" type="text/css"
	rel="stylesheet" />
	<script src="jquery-3.3.1.js" type="text/javascript"></script>
</head>
<body style="background:black;">
<header>
<div class="container">
        <div id="branding">
          <h1><span class="highlight">Rent Caro</h1>
        </div>
<style>
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover {
  background-color:#111;
}
</style>
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="#login">Login</a></li>
  <li><a href="signup_page.php">SignUp</a></li>
</ul>
</header>
<div class="phppot-container">
		<div class="sign-up-container">

			<div class="">
				<form name="sign-up" action="" method="post"
					onsubmit="return signupValidation()">
					<div class="signup-heading"><strong>Registration</strong></div>
				<?php
    if (! empty($registrationResponse["status"])) {
        ?>
                    <?php
        if ($registrationResponse["status"] == "error") {
            ?>
				    <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        } else if ($registrationResponse["status"] == "success") {
            ?>
                    <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        }
        ?>
				<?php
    }
    ?>
				<div class="error-msg" id="error-msg"></div>
					<div class="row">
						
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="forms" type="text" name="username"
								id="username"placeholder="Full Name">
						
					</div>
					<div class="row">
						
							<div class="form-label">
								Email<span class="required error" id="email-info"></span>
							</div>
							<input class="forms" type="email" name="email" id="email"placeholder="Eg.xyz@gmail.com">
						
					</div>
					<div class="row">
						
						<div class="form-label">
							Gender<span class="required error" id="gender-info"></span>
						</div>
			
						<select class="menu" name="gender">
						<option>Male</option>
						<option>Female</option>
						<option>Other</option>
					</select>
				</div>
                    
                <div class="row">
					<div class="form-label">
							D.O.B<span class="required error" id="dob-info"></span>
						</div>
					<input class="forms" type="Date" name="Date2" placeholder="DD/MM/YYYY">
</div>
					<?php
					if(isset($_POST["submit"]))
					{
					$date1=$_POST['date2'];

					$hours_in_day   = 24;
					$minutes_in_hour= 60;
					$seconds_in_mins= 60;

					$birth_date     = new DateTime("$date1");
					$current_date   = new DateTime();

					$diff           = $birth_date->diff($current_date);
					?>
					<div class = "san"> <strong>Age in Years: </strong><?php echo $years     = $diff->y . " years " . $diff->m . " months " . $diff->d . " day(s)"; echo "<br/>"; ?></div>
					<?php
					}
					?>
					<div class="row">
						
							<div class="form-label">
								Password<span class="required error" id="signup-password-info"></span>
							</div>
							<input class="forms" type="password"
								name="signup-password" id="signup-password" placeholder="Password">
						
					</div>
					<div class="row">
							<div class="form-label">
								Confirm Password<span class="required error"
									id="confirm-password-info"></span>
							</div>
							<input class="forms" type="password"
								name="confirm-password" id="confirm-password" placeholder="Confirm Password">
					</div>
					<div class="row">
						<input class="btn" type="submit" name="signup-btn"
							id="signup-btn" value="Sign up">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
function signupValidation() {
	var valid = true;

	$("#username").removeClass("error-field");
	$("#email").removeClass("error-field");
	$("#password").removeClass("error-field");
	$("#confirm-password").removeClass("error-field");

	var UserName = $("#username").val();
	var email = $("#email").val();
	var Password = $('#signup-password').val();
    var ConfirmPassword = $('#confirm-password').val();
	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	$("#username-info").html("").hide();
	$("#email-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (email == "") {
		$("#email-info").html("required").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (email.trim() == "") {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (!emailRegex.test(email)) {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000")
				.show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#signup-password-info").html("required.").css("color", "#ee0000").show();
		$("#signup-password").addClass("error-field");
		valid = false;
	}
	if (ConfirmPassword.trim() == "") {
		$("#confirm-password-info").html("required.").css("color", "#ee0000").show();
		$("#confirm-password").addClass("error-field");
		valid = false;
	}
	if(Password != ConfirmPassword){
        $("#error-msg").html("Both passwords must be same.").show();
        valid=false;
    }
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>

</body>
</html>
