<?php 
require_once "./config.php";
session_start();
if (empty($_SESSION["id"])) {
    header("Location: login.php");
  }
  $name = $_SESSION['username'];
  
  $_SESSION['username'] = $name;
  
  $uid = $_SESSION['id'];
  if(!isset($_GET['cart'])){
    if(empty($_SESSION['cart'])){
      $_SESSION['cart']=array();
    }
  }
  
  if(!isset($_GET['dpp'])){
    if(empty($_SESSION['dpp'])){
      $_SESSION['dpp'] = array();
    }
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Status</title>
    <?php include("./includes/header.php"); ?>
</head>
<body>
    




<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 d-flex justify-content-center my-5">
        <div class="card text-success" style="width: 18rem;">
<div class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" class="text-success mt-5" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
</svg></div>
  <div class="card-body">
    <h5 class="card-title">Success</h5>
    <p class="card-text">Your Order has been placed successfully</p>
    <a href="index.php" class="btn btn-primary">Home</a>
  </div>
</div>
        </div>
    </div>
</div>




<?php include("./includes/footer.php"); ?>
</body>
</html>