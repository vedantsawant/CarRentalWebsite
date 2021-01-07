<?php

include 'database.php';
      session_start(); 
      if( !isset($_SESSION["email"]) ){
        header("location:login.php");
        exit();
    }
$email = $_SESSION["email"];
$name=filter_input(INPUT_POST,'name');
$phone=filter_input(INPUT_POST,'phone');
$city=filter_input(INPUT_POST,'city');
$pincode=filter_input(INPUT_POST,'pincode');
$pickup_date=filter_input(INPUT_POST,'pickup_date');
$return_date=filter_input(INPUT_POST,'return_date');
$discount=filter_input(INPUT_POST,'discount');
if (is_null($discount)) {
    $discount = 0;
  } else {
    $sql1 = "SELECT amt FROM discount WHERE disc='$discount' LIMIT 1";
    $fl = mysqli_query($conn, $sql1);
    $result  =  mysqli_fetch_all($fl,MYSQLI_ASSOC);
    foreach($result as $result2) {
        //echo $result2['amt'];
        $discount = intval($result2['amt']); 
    }
  }
$insurance=filter_input(INPUT_POST,'insurance');
if (is_null($insurance)) {
    $insurance = 0;
  }
$upload=filter_input(INPUT_POST,'uid');
$model=filter_input(INPUT_POST,'model');
$date1 = date_create($pickup_date);
$date2 = date_create($return_date);
$days = date_diff($date1,$date2);

$sql = "SELECT cost FROM category WHERE category_id IN (SELECT category FROM car WHERE model='$model') LIMIT 1";
$final = mysqli_query($conn, $sql);
$booking  =  mysqli_fetch_all($final,MYSQLI_ASSOC);
foreach($booking as $result1) {
    //echo $result1['cost'];
    $rate = intval($result1['cost']); 
}
//echo $rate;
// echo $booking['cost'];
// $rate = intval($booking['cost']); 

$amount=($days->format("%a")*$rate)+$insurance-$discount;

if(!empty($phone)){
    if(!empty($pincode)){
        $host="localhost";
        $dbUsername="root";
        $dbPassword="";
        $dbName="carrent";

        $conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbName);

        if(mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .')' . mysqli_connect_error());

        }
        else{
            $sql="INSERT INTO bill(email,name,phone,city,pincode,pickup_date,drop_date,discount,insurance,upload_license,model,amount)
            VALUES ('$email','$name','$phone','$city','$pincode','$pickup_date','$return_date','$discount','$insurance','$upload','$model','$amount')";
            if($conn->query($sql)){
               // echo"Booking processing";
                require 'emailsent.php';
                echo"<h1>Booking has been confirmed!!</h1>";
                echo"<h2>Thankyou"." ".$name.", "."We will send you an email!</h2>";
                ?>
                <div class="form-btn" style = "margin: 1rem auto">
                 <a href="../index.php">
                    <button id ="myButton"class="submit-btn">Redirect to Homepage</button>
                 </a>
                 </div>

                 <script type="text/javascript">
                    document.getElementById("myButton").onclick = function () {
                        location.href = "../index.php";
                    };
                </script>
                 <?php

            }
            else{
              echo"Error: ". $sql ."<br>" . $conn->error;  
            }
            $conn->close();
        }
    }
    else{
        echo"Pincode should not be empty";
        die();
    }
}
else{
    echo"Phone Number should not be empty";
    die();
}

?>
