<?php
include 'database.php';
//the subject
$sub = "Booking Confirmation";
//the message
//$msg ="Name: ".$name."\n"."Phone :".$phone."\n"."City :".$city."\n"."Pickup Date :".$pickup_date."\n"."Return Date :".$return_date."\n";
$date1 = date_create($pickup_date);
$date2 =date_create($return_date);
$interv = date_diff($date1,$date2);
$interval = $interv->format("%a");
$sub_total = $interval*$rate;
$bill_amt= $amount;
//recipient email here
$rec = "$email";
//send email
//$header = "From: noreply@rentkaro.ml\r\n";
$from = 'noreply@rentkaro.ml'; 
$fromName = 'RentCaro'; 

// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
// $headers .= 'Cc: welcome@example.com' . "\r\n"; 
// $headers .= 'Bcc: welcome2@example.com' . "\r\n"; 

$msg = '
<html>

	<head>
	<title>Invoice RentCaro</title>
		<style type="text/css">
		body {		
			font-family: Verdana;
		}
		
		div.invoice {
		border:2px solid #ccc;
		padding:10px;
		height:740pt;
		width:570pt;
		}

		div.company-address {
			float:left;
			width:200pt;
		}
		
		div.invoice-details {
			float:right;
			width:200pt;
		}
		
		div.customer-address {
			float:right;
			margin-bottom:50px;
			margin-top:100px;
			width:200pt;
		}
		
		div.clear-fix {
			clear:both;
			float:none;
		}
		
		table {
			width:100%;
		}
		
		th {
			text-align: left;
		}
		
		td {
		}
		
		.text-left {
			text-align:left;
		}
		
		.text-center {
			text-align:center;
		}
		
		.text-right {
			text-align:right;
		}
		
		</style>
	</head>

	<body>
	<div class="invoice">
		<div class="company-address">
			<h1>Rent Caro</h1>
		</div>
	
		<div class="invoice-details">
			Digital Invoice
		</div> 
		<div class="customer-address">
			To:
			<br />
			'."$name".'
			<br />
			Email: '."$email".'
			
		</div>
		
		<div class="clear-fix"></div>
			<h4 style="margin: 1rem auto;">City: '."$city".'</h4>
			<h4> Pincode: '."$pincode".'</h4>
			<h4 style="margin: 1rem auto;">Payment: Cash/Card on Delivery</h4>
			<table border="1" cellspacing="0">
				<tr>
					<th width=250>Car</th>
					<th width=80>Days</th>
					<th width=100>Rate</th>
					<th width=100>Total Price</th>
				</tr>
				<tr>
					<td width=250>'."$model".'</th>
					<td width=80>'."$interval".'</th>
					<td width=100>'."$rate".'</th>
					<td width=100>'."$sub_total".'</th>
				</tr>

				<tr>
					<th colspan="3" class="text-right">Insurance</td>
					<td class="text-right">₹'.number_format($insurance,2).'</td>
				</tr>
				<tr>
					<th colspan="3" class="text-right">Discount</td>
					<td class="text-right">-₹'.number_format($discount,2).'</td>
				</tr>
				<tr>
					<th colspan="3" class="text-right">TOTAL</td>
					<th class="text-right">₹'.number_format($bill_amt,2).'</td>
				</tr>

			
			</table>
		</div>
	</body>

</html>
';


mail($rec,$sub,$msg,$headers);
?>