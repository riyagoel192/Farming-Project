<?php

include('db_conn.php');

//$rent = $_GET["uid"];
//echo $somevar;

$sql = "SELECT total_amount FROM wallet";
//$sql = "SELECT SUM(amount) FROM contributors";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

       	$fund = $row['total_amount'];
       	echo "Total Fund available: ".$fund;
       	echo "<br>";
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment Gateway</title>
</head>
<body>
<!-- <form action="https://www.example.com/payment/success/" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_o4mktqZTVlLvGT" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="20" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-order_id="order_MLG2c15wXla9al"// Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="Razorpay"
    data-description=""
    data-image="https://example.com/your_logo.jpg"
    data-prefill.name="ABC"
    data-prefill.email="abc@example.com"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden"/>
</form> -->
<script>

var amt_pay = localStorage.getItem("x");

document.write("Amount to pay: ", amt_pay);

document.write("<br>");

var js_variable_name = "<?php echo $fund; ?>";

var rem_amt = js_variable_name - amt_pay;

if (rem_amt<0)
{
	document.write("Sorry!! Insufficient balance. Can't make the purchase");

setTimeout(() => {
  alert("Payment unsuccessful! Redirecting to homepage");
  window.location.href = "homepage.php";
}, 2000);

}

else
{
	document.write("Remaining wallet balance is: ", rem_amt);

	document.write("<br><br>");

	setTimeout(() => {
  alert("Payment successful! Redirecting to homepage");
  window.location.href = "homepage.php";
}, 5000);

}

// let div = document.createElement("div");

// document.body.appendChild(div);

// div.setAttribute("style","height:50px");
// div.setAttribute("style","width:30px");
// div.setAttribute("style","border:2px solid black"); 
// div.innerHTML = "Amount to pay: " + amt_pay + "<br><br>" + "Remaining wallet balance is: " + rem_amt + "<br><br>";


// let btn = document.createElement("button");

// btn.innerHTML = "Return to Homepage";

// document.body.appendChild(btn);



// btn.addEventListener("click", function(){

//     window.location.href = "homepage.php";
// });

</script>
</body>


</html>