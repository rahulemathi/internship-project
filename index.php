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
    <title>Electronics Store</title>
    <?php include("./includes/header.php"); ?>
</head>

<body>

    <div class="container-fluid gx-0">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <img src="./images/banner-image.png" alt="banner image">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <h1 class="text-center text-primary">New arrivals </h1>

            <?php
            $num1 = rand(1, 10);
            $num2 = rand(11, 20);
            $query = "SELECT * FROM products where id between $num1 and $num2  LIMIT 3";

            if ($result = mysqli_query($link, $query)) {
                if (mysqli_num_rows($result) > 0) {
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) { ?>
                        <div id="new-arrivals" class="col-sm-12 col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="images/<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['image']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                    <p class="card-text"><?php echo substr($row['description'], 0, 300); ?></p>
                                    <p class="text-success">&#8377; <?php echo $row['dprice'];?></p>
                                    <p class="text-danger text-decoration-line-through">&#8377; <?php echo $row['price'];?></p>
                                    
                                </div>
                            </div>
                        </div>
            <?php }
                }
            }

            ?>


        </div>
    </div>



    <div class="container">
        <div class="row">
            <h1 class="text-center">Our Products</h1>
        <?php
            $query = "SELECT * FROM products LIMIT 6";

            if ($result = mysqli_query($link, $query)) {
                if (mysqli_num_rows($result) > 0) {
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) { ?>
            <div class="col-sm-12 col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="images/<?php echo $row['image'];?>" class="card-img-top" alt="<?php echo $row['image'];?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name'];?></h5>
                        <p class="card-text"><?php if(strlen($row['description'])>300){
                            echo substr($row['description'],0,300).'... <a href="single-product.php?id='.$row['id'].'">Read More</a>';
                        } 
                        else{
                            echo $row['description'];
                        }
                        ?></p>
                        <p class="text-success">&#8377; <?php echo $row['dprice'];?></p>
                                    <p class="text-danger text-decoration-line-through">&#8377; <?php echo $row['price'];?></p>
                        <form action="" method="get">
                        <a href="single-checkout.php?id=<?php echo $row['id'];?>&dpp=<?php echo $row['dprice'];?>&valid=200" name="item" class="btn btn-success">Buy</a>
                        <a type="submit" href="addtocart.php?id=<?php echo $row['id'];?>&dpp=<?php echo $row['dprice'];?>&valid=200" class="btn btn-dark" name="cart" value="addtocart">Add to cart </a>
                        </form>
                       
                    </div>
                </div>
            </div>
            <?php }
                }
                mysqli_free_result($result);
            }

            ?>

        </div>
    </div>








    <?php include("./includes/footer.php"); ?>
</body>

</html>