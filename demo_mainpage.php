<html>
<head>
<title>Homepage</title> 
<link rel="stylesheet" href="demo_css.css">
</head>



<body id="mainb">
	


 <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img class= "farmer_img"src="https://www.theindiaforum.in/sites/default/files/field/image/2022/06/21/ramkumar-radhakrishnan-wikimedia-1622193304-1622193304.jpeg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img class= "farmer_img"src="https://images.yourstory.com/cs/5/f02aced0d86311e98e0865c1f0fe59a2/indian-farmer-1610471656527.png?w=1152&fm=auto&ar=2:1&mode=crop&crop=faces" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img class= "farmer_img"src="https://images.moneycontrol.com/static-mcnews/2022/06/Farmer-sowing-seeds.png?impolicy=website&width=1600&height=900" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 


</div>

<h1 id= "farmerr"> THE FARMER'S PROJECT  </h1>
 	<br>
 	<h2 id="stubble"> WHAT IS STUBBLE BURNING?</h2>
 	<p id="content1"> Most farmers in India simply burn any remaining plant matter after harvesting rice in order to quickly prepare their fields for the wheat crop. The act is referred to as burning paddy stubble. In October and November of each year, Punjab's rice farms burn a combined total of 7 to 8 million metric tons of plant residue.</p>
 	<h3 id="harmfuleffects"> WHY IS IT HARMFUL?</h3>

 	<p id="content2"> It releases harmful gases that not only make it difficult for nearby residents to breathe but also significantly contribute to global warming. Burning stubble produces smog by releasing pollutants like carbon monoxide (CO), methane (CH4), carbon dioxide (CO2), aromatic hydrocarbons, and volatile organic compounds (VOCs).  </p>
 	<h4 id="ouraim"> OUR AIM </h4>
 	<p id= "content3"> This project aims to protect the environment by giving farmers a speedy replacement for burning stubble. This portal will assist donors in selecting any farming equipment of their choice and renting it out to farmers who will use it for the elimination of the rice crop residue. </p>
    <br>
 	<h1><center>Browse by category</centre></h1>
    <br><br>
    <div class="wrapper">



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
   
   if($num_rows > 0)
    {
      while ($rows = mysqli_fetch_array($select, MYSQLI_ASSOC))
      {
      
      ?>
    <div style="display: flex;flex-direction: row;">
    	<div class="image">
    		<img class='machine_images' src="<?php echo $rows['Image']; ?>">
    		
    		</div>

    		<div id="name">
    			<div><?php echo $rows['Firm_Name']; ?></div>
    			<div><?php echo $rows['Product_Name']; ?></div>
    			<br>
    			<div><?php echo $rows['Features']; ?></div>

    		</div>
    </div>





   <?php
    }}
   ?> 

    </div>
 

<script>
// var myIndex = 0;
// 		carousel();

// 		function carousel() {
//   			var i;
//   			var x = document.getElementsByClassName("farmer_img");
//   			for (i = 0; i < x.length; i++) {
//     				x[i].style.display = "none";  
//   			}
//   			myIndex++;
//   			if (myIndex > x.length) {myIndex = 1}    
//   			x[myIndex-1].style.display = "block";  
//   			setTimeout(carousel, 3000);
// 		}



let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}



</script>

</body>
</html>