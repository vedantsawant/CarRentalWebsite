<?php
	include 'database.php';
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$reg = json_decode($_POST["reg_no"]);
	$model = json_decode($_POST["model"]);
	$mileage = json_decode($_POST["mileage"]);
	$avail = json_decode($_POST["avail"]);
	$category = json_decode($_POST["category"]);
	$pincode = json_decode($_POST["pincode"]);

	for ($i = 0; $i < count($reg); $i++) {
		if(($reg[$i] != "")){ /*not allowing empty values and the row which has been removed.*/
			$sql="INSERT INTO car (reg_no, model, mileage, avail, category, pincode)
			VALUES
			('$reg[$i]','$model[$i]','$mileage[$i]','$avail[$i]','$category[$i]','$pincode[$i]')";
			if (!mysqli_query($conn,$sql))
			{
				die('Error: ' . mysqli_error($con));
			}
		}
	}
	Print "Data added Successfully !";
	mysqli_close($conn);
?>