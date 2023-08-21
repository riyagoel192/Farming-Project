<?php

include('db.php');


if(isset($_POST['submit']))
{
	//write data into database 
	$Email = $_POST['email1'];
	$Pwd = $_POST['password1'];

	$sql = "SELECT * FROM Registration WHERE Email='$Email' and Pwd='$Pwd'";
	$select = mysqli_query($conn, $sql);

	while ($rows = mysqli_fetch_array($select, MYSQLI_ASSOC))
	{
		echo $rows['Firm_name'];
		echo $rows['Price'];
		
	}

	
}

	




























	$sql = "INSERT INTO register VALUES('$Email','$Pwd')";

	if(mysqli_query($conn,$sql))
	{
		 echo '<script>alert("Registration successful")</script>';
		 //$x = "login.html";
		 echo "<script> window.location.href = 'login.html'</script>";
	}

	else
	{
		 echo '<script>alert("Registration unsuccessful")</script>';
	}

}


?>