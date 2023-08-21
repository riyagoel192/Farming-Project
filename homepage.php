<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" href="design.css">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	
</head>
<body>

	<div id="main_homepage">

	<div id="slider">
	 <img class="mySlides" src="https://i.guim.co.uk/img/media/d9bc4eaf4edd4d9d983119e1da39fb7bd29a5775/0_0_5250_3149/master/5250.jpg?width=1200&height=630&quality=85&auto=format&fit=crop&overlay-align=bottom%2Cleft&overlay-width=100p&overlay-base64=L2ltZy9zdGF0aWMvb3ZlcmxheXMvdGctYWdlLTIwMTgucG5n&s=b879b726e12c6a79624ef425d23f10ce">
  	 <img class="mySlides" src="https://i0.wp.com/publicintegrity.org/wp-content/uploads/2020/01/20190625-minnesota046_HR-e1579293215461-scaled.jpg?fit=2560%2C1387&ssl=1">
     <img class="mySlides" src="https://static.theprint.in/wp-content/uploads/2020/04/Farmers.jpg">
	</div>
	<br>
	<h2><center>Browse by category</center></h2>
	<br><br>

	<div class="wrapper" style="display: flex;flex-direction: column;gap: 20px 0;">
	<?php  

		include('db_conn.php');

		$sql = "SELECT SUM(amount) FROM contributors";
		$result = mysqli_query($conn,$sql);
		//echo "Returned rows are: " . mysqli_num_rows($result);

		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

       	$fund = $row['SUM(amount)'];
       	// echo $fund;

       	}

		$sql = "SELECT Firm_Name, Product_Name, Image, Features, Price, Discount FROM manufacturers m,contributors c WHERE m.Price <=(SELECT SUM(amount) FROM contributors) GROUP BY Firm_Name,Product_Name,Image,Features, Price, Discount";
		$select = mysqli_query($conn, $sql);
		$num_rows = mysqli_num_rows($select);
		// echo "Number of rows : ";
		// echo $num_rows;
	// 	echo "<table>
	// 	<tr>
	// 	<th>Firm_name</th>
	// 	<th>Features</th>
	// 	<th>Price</th>
	// 	<th>Discount</th>
	// 	</tr>";
	// 	if ($num_rows > 0) {

 //    	while ($rows = mysqli_fetch_array($select, MYSQLI_ASSOC)) {
 //        echo "<tr>";
 //        echo "<td>" . $rows['Firm_name'] . "</td>";
 //        // echo "<td>" . $rows['Image'] . "</td>";
 //        echo "<td>" . $rows['Features'] . "</td>";
 //        echo "<td>" . $rows['Price'] . "</td>";
 //        echo "<td>" . $rows['Discount'] . "</td>";
 //        echo "</tr>";
 //    	}
	// }
	// echo "</table>";

		if($num_rows > 0)
		{
			while ($rows = mysqli_fetch_array($select, MYSQLI_ASSOC))
			{
			
			?>
			<div style="display: flex;flex-direction: row;">
				<div class='firm_border'>
					<!-- <?php echo $rows['Firm_name']; ?> -->
					
					<img class='machine_images' src="<?php echo $rows['Image']; ?>">
				</div>
			
				<div class='prod_details'>
					<div class='product_name'><?php echo $rows['Product_Name']; ?></div>
					<div class='product_features'><?php echo $rows['Features']; ?></div>
				</div>
			
				<div class='pricing'>
					<div class='price'>₹ <?php $pricevar = $rows['Price']; echo $rows['Price']; ?></div>
					<div class='discount'><?php echo $rows['Discount']; ?>% off</div>
					<button class='btn btn-primary' id='rent_btn' data-toggle='modal' data-target='#exampleModal' data-whatever="<?php echo $rows['Product_Name']; ?>" data-duration="<?php echo $rows['Price'];?>" data-rent="<?php echo $rows['Discount']; ?>" data-amt="4560">Rent Equipment</button>

				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  				<div class="modal-dialog" role="document">
    				<div class="modal-content">
      				<div class="modal-header">
      					<h4 class="modal-title" id="exampleModalLabel"></h4>
      					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        				<!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->

        				<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          					<span aria-hidden="true">&times;</span>
        				</button> -->
      				</div>
      				<div class="modal-body">
        				<h4 class="modal-body" id="duration"></h4>
        				<h4 class="modal-body" id="rent"></h4>
        				<h4 class="modal-body" id="amt_pay"></h4>
      				</div>
      				<div class="modal-footer">
        					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        					<button type="button" class="btn btn-primary" onclick="other_page();">Purchase Product</button>
      				</div>
    				</div>
  				</div>
			</div>
			
			<?php 
			
			}
		}

	?>
</div>

	</div>

	<script>

		var myIndex = 0;
		carousel();

		function carousel() {
  			var i;
  			var x = document.getElementsByClassName("mySlides");
  			for (i = 0; i < x.length; i++) {
    				x[i].style.display = "none";  
  			}
  			myIndex++;
  			if (myIndex > x.length) {myIndex = 1}    
  			x[myIndex-1].style.display = "block";  
  			setTimeout(carousel, 3000);
		}


		$('#exampleModal').on('show.bs.modal', function (event) {
  		var button = $(event.relatedTarget) // Button that triggered the modal
  		var recipient = button.data('whatever') // Extract info from data-* attributes
  		var x = button.data('duration')
  		localStorage.setItem('x',x);
  		var y = button.data('rent')
  		var z = button.data('amt')
  		var res = x + "\n" + y + "\n" + z

  		// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  		// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  		var modal = $(this)
  		modal.find('.modal-title').text(recipient)
  		modal.find('.modal-body input').val(recipient)

  		// modal.find('.modal-body').text("Duration: " + x + "\n" + "Rent: " + y + "\n" + "Total amount to pay: " + x)
  		modal.find('.modal-body').text("Total amount to pay: " + x)
  		modal.find('.modal-body input').val(res)
	})

		function other_page()
		{
			// var x = document.getElementById('duration').value;
  	// 		localStorage.setItem('x',x);
			//window.location.href="payment_page.php";
			window.location.href="payment_page.php";
		}

	</script>

</body>
</html>