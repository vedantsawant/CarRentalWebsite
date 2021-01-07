<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
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
      <div id="table-container" style="padding: 4rem 1rem;">
          
          <div style="margin: auto;width: 60%;">
          <h4 stlye=" text-align: center;">ADD / UPDATE CAR DETAILS</h4>
          <form id="form1" name="form1" method="post">
              <div class="form-group">
                <label for="email">Registration Number:</label>
                <input type="text" name="sname" class="form-control" id="reg_no">
              </div>
              <div class="form-group">
                <label for="pwd">Model:</label>
                <input type="text" name="email" class="form-control" id="model">
              </div>
              <div class="form-group">
                <label for="email">Mileage:</label>
                <input type="number" name="sname" class="form-control" id="mileage">
              </div>
              <div class="form-group">
                <label for="pwd">Availabilty(1/0):</label>
                <input type="number" name="email" class="form-control" id="avail">
              </div>
              <div class="form-group">
                <label for="pwd">Category:</label>
                <select name="email" class="form-control" id="category">
                  <option value="">Select</option>
                  <option value="SUV">SUV</option>
                  <option value="Crossover">Crossover</option>
                  <option value="Premium SUV">Premium SUV</option>
                  <option value="Sedan">Sedan</option> 
                  <option value="Compact Sedan"> Compact Sedan</option>
                  <option value="Premium Sedan">Premium Sedan</option>
                  <option value="Hatchback">Hatchback</option>
                  <option value="Hybrid">Hybrid</option>
                  <option value="Premium">Premium Hatchback</option>
							  </select>
              </div>
              <div class="form-group">
                <label for="pwd">Pincode:</label>
                <input type="number" name="email" class="form-control" id="pincode">
              </div>
              <input type="button" name="send" class="btn btn-primary" value="Add data" id="butsend">
              <input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave">
          </form>
          <table id="table1" name="table1" class="table table-bordered">
          <tbody>
          <tr>
            <th>ID</th>
            <th>Registration Number</th>
            <th>Model</th>
            <th>Mileage</th>
            <th>Availabilty</th>
            <th>Category</th>
            <th>Pincode</th>
            <th>Action</th>
          <tr>
          </tbody>
          </table>
          </div>
          <script>
          $(document).ready(function() {
          var id = 1; 
          /*Assigning id and class for tr and td tags for separation.*/
          $("#butsend").click(function() {
          var newid = id++; 
          $("#table1").append('<tr valign="top" id="'+newid+'">\n\
          <td width="100px" >' + newid + '</td>\n\
          <td width="100px" class="reg_no'+newid+'">' + $("#reg_no").val() + '</td>\n\
          <td width="100px" class="model'+newid+'">' + $("#model").val() + '</td>\n\
          <td width="100px" class="mileage'+newid+'">' + $("#mileage").val() + '</td>\n\
          <td width="100px" class="avail'+newid+'">' + $("#avail").val() + '</td>\n\
          <td width="100px" class="category'+newid+'">' + $("#category").val() + '</td>\n\
          <td width="100px" class="pincode'+newid+'">' + $("#pincode").val() + '</td>\n\
          <td width="100px"><a href="javascript:void(0);" class="remCF">Remove</a></td>\n\ </tr>');
          });
          $("#table1").on('click', '.remCF', function() {
          $(this).parent().parent().remove();
          });
          /*crating new click event for save button*/
          $("#butsave").click(function() {
          var lastRowId = $('#table1 tr:last').attr("id"); /*finds id of the last row inside table*/
          var reg_no = new Array(); 
          var model = new Array();
          var mileage = new Array(); 
          var avail = new Array();
          var category = new Array(); 
          var pincode = new Array();
          for ( var i = 1; i <= lastRowId; i++) {
          reg_no.push($("#"+i+" .reg_no"+i).html()); /*pushing all the names listed in the table*/
          model.push($("#"+i+" .model"+i).html());
          mileage.push($("#"+i+" .mileage"+i).html()); /*pushing all the names listed in the table*/
          avail.push($("#"+i+" .avail"+i).html());
          category.push($("#"+i+" .category"+i).html());
          pincode.push($("#"+i+" .pincode"+i).html());
          }
          var sendreg = JSON.stringify(reg_no); 
          var sendmodel = JSON.stringify(model);
          var sendmileage = JSON.stringify(mileage); 
          var sendavail = JSON.stringify(avail);
          var sendcategory = JSON.stringify(category); 
          var sendpincode = JSON.stringify(pincode);
          $.ajax({
          url: "php/savecar.php",
          type: "post",
          data: {reg_no : sendreg , model : sendmodel, mileage : sendmileage , avail : sendavail, category : sendcategory , pincode : sendpincode},
          success : function(data){
          alert(data); /* alerts the response from php.*/
          }
          });
          });
          });
          </script>

      </div>
    
</body>
</html>