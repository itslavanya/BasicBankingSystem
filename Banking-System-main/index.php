<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">

    <title>Basic Banking System</title>
  </head>

  <body class="bg-dark">
  <?php
  include 'navbar.php';
  ?> 

  
      <div class="container-fluid" style="background-color:#FFC93C;">
      <h1 style="text-align: center;">Welcome to Account Unlimited</h1>
      <div class="container">
      <!-- Introduction section -->
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/imagebank.png" class="d-block w-100" alt="...">
      
    </div>
    <div class="carousel-item">
      <img src="img/istockphoto-1159237698-612x612.jpg" class="d-block w-100" alt="...">
      
    </div>
    <div class="carousel-item">
      <img src="img/1619424969_Investment banking.jpg" class="d-block w-100" alt="...">
      
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
            </div>

      <!-- Activity section -->

            <div class="row activity text-center bg-dark" style="margin-top: 50px;">
                  <div class="col-md act">
                    <img src="img/userone.png" class="img-fluid">
                    <br><br>
                    <a href="createuser.php"><button style="background-color : #FFC93C;"><b>Create a User</b></button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transferone.jpg" class="img-fluid">
                    <br><br>
                    <a href="transfermoney.php"><button style="background-color : #FFC93C;"><b>Make a Transaction</b></button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.png" style="width: 300px;" class="img-fluid">
                    <br><br>
                    <a href="transactionhistory.php"><button style="background-color : #FFC93C;"><b>Transaction History</b></button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>LAVANYA PUSHPAKAR</b></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>