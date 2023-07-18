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


  $id = $_GET["id"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Product</title>
    <?php include("./includes/header.php"); ?>

</head>
<body>
    

<div class="container mt-4">
    <div class="row">
        <div class="col-sm-12 col-md-6 mt-4">
            <?php $query = "SELECT * FROM products where id = $id";

if ($result = mysqli_query($link, $query)) {
    if (mysqli_num_rows($result) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {?>
        <h1><?php echo $row['name'];?></h1>
        <p><?php echo $row['description'];?></p>
        </div>
        <div class="col-sm-12 col-md-6 d-flex">
        <img class="img-fluid" src="./images/<?php echo $row['image'];?>">
        </div>
        <?php 
        }
    }
    mysqli_free_result($result);
}
?>
    </div>
</div>



<?php include("./includes/footer.php"); ?>
</body>
</html>