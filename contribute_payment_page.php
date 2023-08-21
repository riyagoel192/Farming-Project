<?php

$somevar = $_GET["uid"];
//echo $somevar;

include('db_conn.php');

$sql = "UPDATE wallet SET total_amount = total_amount+$somevar";

if(mysqli_query($conn, $sql))
 {
    //echo "Thanks!! Your contribution has been added to the wallet";
    $result='<div class="alert alert-success" style="width:60%;text-align: center;">Thank You! Your contribution has been added to the wallet. Redirecting to homepage!</div>';

    echo "<script>
setTimeout(function(){
	window.location.href = 'contributor.php'; 
},3000);// for 3 second redirection
</script>";

 }
 	
else
{
 	echo "Oops! Something went wrong";
 	$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contribute Amount</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="form-group">
        <div class="col-sm-10 col-sm-offset-2" style="margin:17% 25%;">
            <?php echo $result; ?>    
        </div>
    </div>
</body>
</html>