<?php 
session_start();


if(isset($_GET['addtocart'])){
    if(empty($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
    array_push($_SESSION['cart'],$_GET['id']);
    if(empty($_SESSION['dpp'])){
        $_SESSION['dpp']=array();
    }
    array_push($_SESSION['dpp'],$_GET['dpp']);
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
                    <form action="" method="post">
                    <a href="" class="btn btn-success">Buy</a>
                    <a type="submit" href="cart.php?id=<?php echo $row['id'];?>&dpp=<?php echo $row['dprice'];?>" class="btn btn-dark" name="addtocart" value="addtocart">Add to cart </a>
                    </form>
                   
                </div>
            </div>
        </div>
        <?php }
            }
            mysqli_free_result($result);
        }



}else{
    echo '<p class="text-success">No Items in the cart </p> ';
}

?>







<?php include("./includes/footer.php"); ?>
</body>
</html>