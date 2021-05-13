<?php
include("connect.php");
error_reporting(0);
$rn = $_GET['rn'];
$un = $_GET['un'];
$em = $_GET['em'];
$bl = $_GET['bl'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles1.css"> 
    <title>VN Bank </title>
</head>

<style>

.mybrand2{
     color: white;
     font-family: 'Abril Fatface', cursive;
    font-size: xx-large;
}

.head2{
  color: rgb(100, 97, 97);
  margin-top: 10%;
  font-family: 'Abril Fatface', sans-serif;
  letter-spacing: 1.4px;
}

.nav-link{
      font-weight: bold;
  }


  .head3{
    margin-top:7%;
    margin-bottom: 3%;
    color: rgb(100, 97, 97);
    font-size:x-large;
    font-weight:bold;

  }
  label{
    font-weight:bold;
    font-size: x-large;
    color: rgb(100, 97, 97); 
  }


    </style>

<body>


  <section id="title">
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
                <a class="nav-link active"  href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="userlogin.php">Create User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transfermoney.php">Transfer Money</a>
              </li>
          </div>
        </div>
      </nav>


<div class="container">
          <h2 class="text-center head2">Transfer Money</h2>
          <br> 
          <br>

      

      <form method="post" action="">
          <table class="table table-striped table-bordered">
            <thead class="thead-light">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Username</th>
                <th scope="col">E-mail</th>
                <th scope="col">Balance</th>
              </tr>
              <tr>
                  <td > <?php echo "$rn"?></td>
                  <td > <?php echo "$un"?></td>
                  <td > <?php echo "$em"?></td>
                  <td > <?php echo "$bl"?></td>
              </tr>

            </thead>
</table>

<div class="container drop-down">
<h2 class="head3">Transfer to</h2>
<select name="name"  class="btn btn-lg btn-info">
<option disabled selected>Select User</option>
       <?php
                error_reporting(0);
                include("connect.php");
                $query = "SELECT username , id FROM `form`";
                $data = mysqli_query($conn, $query);
                
                $total= mysqli_num_rows($data);
                

                    while($result=mysqli_fetch_assoc($data))
                   {
                    echo"<option value='".$result['username']."'>'".$result['username']."' </option>";
                     '<receiver=$result["username"]>';
                  }

                  
        ?>

</select>
</div>
<br>
<br>
<br>

<label>Amount:</label>
<input type="number" class="form-control" name="amount" required>
<br><br>
  <div class="text-center">
    <button class="btn btn-lg btn-info" name="submit" type="submit">Transfer</button>
  </div>
</form>
</div>

<?php
include "connect.php";
if(isset($_POST['submit']))
{
    $amount =( $_POST['amount']);
    $receiver=($_POST['name']);
    $bl = $_GET['bl'];


    $query = "SELECT * from form where username= '$receiver' ";
    $data = mysqli_query($conn,$query);
    $result = mysqli_fetch_assoc($data);


    //check negative value by user
    if (($amount)<0)
   {  
        // alert box
        echo '<script type="text/javascript">';
        echo ' alert("Negative values are not accepted")';  
        echo '</script>';
    }


  
    // to check insufficient balance.
    else if($amount > $bl) {
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")';  
        echo '</script>';
    }
    


    // check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $bl - $amount;
                $query = "UPDATE form set balance=$newbalance where id= $rn";
                mysqli_query($conn,$query);
             

                // adding amount to reciever's account
                $newbalance = $result['balance'] + $amount;
                $query = "UPDATE form set balance=$newbalance where username='$receiver'";
                mysqli_query($conn,$query);
                
                $sender = $un;
                $receiver = $result['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$result[username]','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='transactionhist.php';
                           </script>";
                    
                }
              }
                
        }
    
?>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>