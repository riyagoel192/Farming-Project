<?php

include('db_conn.php');

if(isset($_POST['submit']))
{
	
		$name = $_POST["exampleInputName1"];
		$contact = $_POST["exampleInputContact1"];
		$address = $_POST["exampleInputAddress1"];
		$gender = $_POST["RadioBtn"];
		$email = $_POST["exampleInputEmail1"];
		$password = $_POST["exampleInputPassword1"];
    $designation = $_POST["DesigRadioBtn"];

		$sql = "INSERT INTO farmer_reg_details VALUES('$name','$contact', '$address', '$gender', '$email', '$password', '$designation')";

		if(mysqli_query($conn, $sql))
 		{
 			 //echo '<script>alert("Details inserted successfully")</script>';
       $url="login.php";
       echo "<script> window.location.href = '$url'</script>";
 		}
 	
 		else
 		{
 	   		  echo '<script>alert("Failed to include details in database")</script>';
       		// $error =mysqli_error($conn);
       		// echo $error;
 		}
}

?>

<html>
<head>
<title>Registration</title>
<link rel="icon" type="image/x-icon" href="https://icons.veryicon.com/png/o/miscellaneous/phoenix-project-icon-library/registration-3.png">
<link rel="stylesheet" href="design.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body id="body2">

<div id="mainbox_reg">

<div id="sec1"></div>

<div id="sec2">


<h3 id="heading2">Sign Up for Farmer's Portal</h3>
<span style="margin-left: 10%;color:#239B56;">A workspace to over 12 million influencers around the globe</span>

<form id="reg_form" method="POST" action="register.php">
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label" id="name" style="margin-top:-3%;">Name</label>
    <input type="form-text" class="form-control" id="exampleInputName1" name="exampleInputName1" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputContact1" class="form-label" id="contact">Contact</label>
    <input type="number" class="form-control" id="exampleInputContact1" name="exampleInputContact1" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputAddress1" class="form-label" id="address">Address</label>
    <!-- <input type="form-text" class="form-control" id="exampleInputAddress1"> -->
    <textarea class="form-control" id="exampleInputAddress1" name="exampleInputAddress1" rows="2" required></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputGender1" class="form-label" id="gender" style="margin-right:5%;">Gender</label>
    <input type="radio" class="form-check-input" id="exampleInputMale" name="RadioBtn" value="Male" required>
    <label style="margin-right:5%;">Male</label>
    <input type="radio" class="form-check-input" id="exampleInputFemale" name="RadioBtn" value="Female" required>
    <label>Female</label>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" id="email">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" id="password">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputDesignation1" class="form-label" id="deignation" style="margin-right:5%;">Designation</label>
    <input type="radio" class="form-check-input" id="exampleInputFarmer" name="DesigRadioBtn" value="Farmer" required>
    <label style="margin-right:5%;">Farmer</label>
    <input type="radio" class="form-check-input" id="exampleInputContributor" name="DesigRadioBtn" value="Contributor" required>
    <label>Contributor</label>
  </div>
  <button type="submit" class="btn btn-success" id="reg_submit" name="submit">Register</button>
</form>


<!-- 
<p>Select your gender: <input type="radio" value="Male" name="gender">

<input type="radio" name="gender" value="Female"></p> -->


</div>

</div>

</body>
</html>