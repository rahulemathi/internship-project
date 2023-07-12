<?php 
require_once "./config.php";
session_start();


$cartitems = implode(',',array_unique($_SESSION['cart']));

$_SESSION['carts'] = $cartitems;


$electronicsitems = trim($cartitems,',');

$price = implode(',',array_unique($_SESSION['dpp']));




if(isset($_GET['checkout'])){
  header("location: checkout.php");
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <?php include("./includes/header.php"); ?>
</head>
<body>
    
<?php 
if(!empty($_SESSION['cart'])){ ?>

    <div class="container">
    <div class="row">
        <h1 class="text-center">Our Products</h1>
    <?php
        $query = "SELECT * FROM products WHERE id in ($electronicsitems)";

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
                    <form action="removecart.php?valid=200" method="get">
                        <input type="text" name="electronicitem" value="<?php echo $row['id'];?>" style="display:none">
                        <button class="btn btn-warning" type="submit" name="remove">Remove</button>
                    </form>
                   
                </div>
            </div>
        </div>
        <?php }
            }
            mysqli_free_result($result);
        }
        ?>

        <div class="d-flex justify-content-center">
        <form  class="text-center mx-5" action="checkout.php" method="get">
                <input type="text" name="valid" value="200" hidden>
                <button class="btn btn-success" type="submit" name="checkout">Checkout</button>
            </form>
            
            <form class="text-center" action="removecart.php" method="get">
                <input type="text" name="valid" value="200" hidden>
                <button class="btn btn-danger" href="removecart.php" type="submit" name="clearcart">Clear cart</button>
            </form>


        </div>

<?php
 $_SESSION['totalprice'] = array_sum($_SESSION['dpp']);
}else{
    echo '<p class="text-success">No Items in the cart </p> ';
}

?>







<?php include("./includes/footer.php"); ?>
</body>
</html>