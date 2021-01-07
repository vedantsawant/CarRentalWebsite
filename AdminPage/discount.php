<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
      </nav>
      <div id="table-container" style="padding: 4rem 1rem;">
          
          <div style="margin: auto;width: 60%;">
          <h4 stlye=" text-align: center;">ADD / UPDATE DISCOUNT DETAILS</h4>
          <form id="form1" name="form1" method="post">
              <div class="form-group">
                <label for="disc">Discount ID:</label>
                <input type="text" name="disc" class="form-control" id="disc">
              </div>
              <div class="form-group">
                <label for="amt">Amount:</label>
                <input type="text" name="amt" class="form-control" id="amt">
              </div>
              <input type="button" name="send" class="btn btn-primary" value="Add data" id="butsend">
              <input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave">
          </form>
          <table id="table1" name="table1" class="table table-bordered">
          <tbody>
          <tr>
            <th>ID</th>
            <th>DISCOUNT CODE</th>
            <th>AMOUNT</th>
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
          <td width="100px" class="disc'+newid+'">' + $("#disc").val() + '</td>\n\
          <td width="100px" class="amt'+newid+'">' + $("#amt").val() + '</td>\n\
          <td width="100px"><a href="javascript:void(0);" class="remCF">Remove</a></td>\n\ </tr>');
          });
          $("#table1").on('click', '.remCF', function() {
          $(this).parent().parent().remove();
          });
          /*crating new click event for save button*/
          $("#butsave").click(function() {
          var lastRowId = $('#table1 tr:last').attr("id"); /*finds id of the last row inside table*/
          var disc = new Array(); 
          var amt = new Array();
          
          for ( var i = 1; i <= lastRowId; i++) {
          disc.push($("#"+i+" .disc"+i).html()); /*pushing all the names listed in the table*/
          amt.push($("#"+i+" .amt"+i).html());
          
          }
          var senddisc = JSON.stringify(disc); 
          var sendamt = JSON.stringify(amt);
  
          $.ajax({
          url: "php/savediscount.php",
          type: "post",
          data: {disc : senddisc , amt : sendamt},
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