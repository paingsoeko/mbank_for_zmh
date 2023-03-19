<?php
session_start();
if(!isset($_SESSION['userId'])){ header('location:login.php');}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Banking</title>
  <?php require 'assets/autoloader.php'; ?>
  <?php require 'assets/db.php'; ?>
  <?php require 'assets/function.php'; ?>
  
</head>
<body style="background:#e0e0e0;background-size: 100%">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
 <a class="navbar-brand" href="#">
     <ion-icon name="card-outline" class="d-inline-block align-top" size="large"></ion-icon>
        Online Banking
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">  <a class="nav-link" href="accounts.php">Accounts</a></li>
      <li class="nav-item ">  <a class="nav-link" href="statements.php">Account Statements</a></li>
      <li class="nav-item ">  <a class="nav-link" href="transfer.php">Funds Transfer</a></li>
      <!-- <li class="nav-item ">  <a class="nav-link" href="profile.php">Profile</a></li> -->


    </ul>
    <?php include 'sideButton.php'; ?>
    
  </div>
</nav>
<div class="row w-100 mt-4" >
  <div class="col" style="padding: 22px;padding-top: 0">
    <div class="bg-white jumbotron " style="padding: 25px;min-height: 241px;max-height: 241px">
  <h4 class="display-5">Welecome to Online Bank</h4>
  <p  class="lead alert alert-warning"><b>Latest Notification:</b>

  <?php 
      $array = $con->query("select * from notice where userId = '$_SESSION[userId]' order by date desc");
      if ($array->num_rows > 0)
      {
        $row = $array->fetch_assoc();
        // {
          echo $row['notice'];
        // }
      }
      else
        echo "<div class='alert alert-info'>Notice box empty</div>";
     ?></p>
  
</div>
        <div id="carouselExampleIndicators" class="carousel slide my-2 rounded-1" data-ride="carousel" >
          <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/1.jpg" alt="First slide" style="max-height: 250px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/2.jpg" alt="Second slide" style="max-height: 250px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/3.jpg" alt="Third slide" style="max-height: 250px">
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </div>
<div class="col">
    <div class="row" style="padding: 22px;padding-top: 0">
      <div class="col">
        <div class="card p-3">
          <img class="card-img-top" src="images/account_summary.svg" style="max-height: 155px;" alt="Card image cap">
          <div class="card-body mt-2">
            <a href="accounts.php" class="btn btn-primary btn-block">Account Summary</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card p-3 ">
          <img class="card-img-top" src="images/account_transfer.svg" alt="Card image cap" style="max-height: 155px;">
        <div class="card-body mt-2">
          <a href="transfer.php" class="btn btn-primary btn-block">Transfer Money</a>
         </div>
        </div>
      </div>
    </div>
    <div class="row" style="padding: 22px">
      <div class="col">
        <div class="card p-3 ">
          <img class="card-img-top" src="images/notifaction.svg" style="max-height: 155px;" alt="Card image cap">
          <div class="card-body mt-2">
            <a href="notice.php" class="btn btn-primary btn-block">Check Notification</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card p-3 ">
          <img class="card-img-top" src="images/contact_us.svg" alt="Card image cap" style="max-height: 155px">
        <div class="card-body mt-2">
          <a href="feedback.php" class="btn btn-primary btn-block">Contact Us</a>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>