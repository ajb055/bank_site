<?php
include("connect.php");
error_reporting(0);
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
    
    <link rel="stylesheet" href="css/styles1.css"  type="text/css"/>
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

    </style>


</head>


<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info ">
        <div class="container-fluid">
          <img src="favicon.png"  alt ="no">
          <a class="mybrand2" href="#" > VN BANK</a>
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

              <li class="nav-item">
                <a class="nav-link" href="transactionhist.php">Transaction History</a>
              </li> 

          </div>
        </div>
      </nav>


      <div class="container">
          <h2 class="text-center head2">Transfer Money</h2>
          <br> 
          <br>
        
          <table class="table table-striped table-bordered">
            <thead class="thead-light">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Username</th>
                <th scope="col">E-mail</th>
                <th scope="col">Balance</th>
                <th scope="col">Operation</th>
              </tr>
            </thead>

            <?php
                error_reporting(0);
                include("connect.php");
                $query = "select * from form ";
                $data = mysqli_query($conn, $query);
                $total= mysqli_num_rows($data);

                if ($total!=0)
                {
                    while($result=mysqli_fetch_assoc($data)){
                        echo "
                           <tr>
                           <td>".$result['id']."</td>
                           <td>".$result['username']."</td>
                           <td>".$result['email']."</td>
                           <td>".$result['balance']."</td>
                           <td><a href='transact.php? rn=$result[id] & un=$result[username] & em= $result[email] & bl= $result[balance]'> <button>Transact</button> </td>
                           </tr>
                        ";
                    }
                }
                 else{
                     echo "no records";
                  }

            ?> 

        </table>
         </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

          


</body>
</html>