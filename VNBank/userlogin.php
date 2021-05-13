<?php
include("connect.php");
//error_reporting(0);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>VN BANK</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">    
    
    <link rel="stylesheet" href="css/styles1.css"> 
</head>
<body class="bg-light">

  <nav class="navbar navbar-expand-lg navbar-dark bg-info ">
    <div class="container-fluid">
      <img src="favicon.png"  alt ="no">
      <a class="mybrand2" href="index.html" > VN BANK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Create User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transfermoney.php">Transfer Money</a>
          </li>
      </div>
    </div>
  </nav>


  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 ">
        <div class="card-box">
        <div class="card card-signin my-5">
          <div class="card-body">
            
              <h5 class=" card-title text-center">Sign In</h5>
              
            <form class="form-signin" action="" method="post">
             
              <div class="form-label-group">
                <input type="text" name="username" id="inputEmail"  class="form-control" placeholder="User Name" required autofocus>
                <label for="inputEmail"></label>
              </div>
              
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail"></label>
              </div>


              <div class="form-label-group">
                <input type="number" name="balance" id="inputPassword" class="form-control" placeholder="Balance" required>
                <label for="inputPassword"></label>
              </div>

            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Sign in</button>

            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php
include "Connect.php";
if(isset($_POST['submit']))
{
$un=$_POST['username'];
$ps=$_POST['email'];
$bs=$_POST['balance'];

  if( $un!="" && $ps!="" && $bs!=""){
   $query= "insert into form(username, email,balance) values('$un', '$ps', '$bs')";
   $data= mysqli_query($conn,$query);

  if($data)
  {
    echo"inserted";
    echo "<script> alert('Hurray! User created');
    window.location='transfermoney.php';
    </script>";
  }
}
else{
    echo "failed";
}
}
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

 