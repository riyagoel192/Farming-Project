<?php

include('db_conn.php');

if(isset($_POST["submit"]))
{
    $email = $_POST["login_email"];
    $password= $_POST["login_pwd"];
    $sql = "SELECT Designation FROM farmer_reg_details WHERE Email='$email' and Password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0)
    {
        //echo "Login success";
        //echo "<script>swal.fire('Our First Alert', 'With some body text and success icon!', 'success')</script>";
        //echo 'swal("Good job!", "You clicked the button!", "success");';
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

        $position = $row['Designation'];
        //echo $position;

        }
        if($position=="Farmer")
        {
              $url="homepage.php?id=".$email."";
              echo "<script> window.location.href = '$url'</script>";
        }
        else
        {
               $url="contributor.php?id=".$email."";
               echo "<script> window.location.href = '$url'</script>";
         }
        
    }
    else 
    {
        //echo "unsuccessful login";
        //echo '<script type="text/javascript">alert("error")</script>';
        // $swal='swal';
        // echo '<script>'.$swal.'("Error!", "Something Went Wrong!", "error");</script>';
        echo '<script>alert("Unsuccessful Login Attempt");</script>';  
    }
}

?>

<html>
<head>

<title>Login</title>
<link rel="icon" type="image/x-icon" href="https://www.freeiconspng.com/thumbs/login-icon/user-login-icon-14.png">
<link rel="stylesheet" href="design.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<script src="jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- SweetAlert2 -->
<script type="text/javascript" src='../files/bower_components/sweetalert/js/sweetalert2.all.min.js'> </script>
<!-- SweetAlert2 -->
<link rel="stylesheet" href='../files/bower_components/sweetalert/css/sweetalert2.min.css' media="screen" />


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>

<!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Sweetalert2 JS -->
  <script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>

</head>
<body id="body_login">
<!-- <h1 id="heading1">Let's Login</h1>
<p id="desc">A portal which helps farmers to rent equipments</p>
<p>Email: <input type="text" id="box1"></p>
<p>Password: <input type="password"></p>
<button id="login">LOGIN</button> -->

<form id="login_form" method="POST" action="index.php">
  <div class="mb-3">
	<h1>Farmer's Portal</h1>
	<span style="color:#239B56;"><b>Login yourself to the portal to get started</b></span>
  </div>
  <br>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" id="email">Email address</label>
    <input type="email" class="form-control" name="login_email" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:30%;" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" id="password">Password</label>
    <input type="password" class="form-control" name="login_pwd" id="exampleInputPassword1" style="width:30%;" required>
  </div>
  <button type="submit" class="btn btn-success" name="submit" id="login_submit">Login</button>
  <br><br><br>
  <span style="color: #145A32;"><b>Not created an account yet? <a id="reg_link" href="register.php">Register now</b></a></span>
</form>



</body>
</html>