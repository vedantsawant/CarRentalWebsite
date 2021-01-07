<?php
	include 'database.php';
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$disc = json_decode($_POST["disc"]);
	$amt = json_decode($_POST["amt"]);

	for ($i = 0; $i < count($disc); $i++) {
		if(($disc[$i] != "")){ /*not allowing empty values and the row which has been removed.*/
			$sql="INSERT INTO discount (disc, amt)
			VALUES
			('$disc[$i]','$amt[$i]')";
			if (!mysqli_query($conn,$sql))
			{
				die('Error: ' . mysqli_error($conn));
			}
		}
	}
	Print "Data added Successfully !";
	mysqli_close($conn);
?>