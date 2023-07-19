<?php 
require_once("config.php");
session_start();
if (empty($_SESSION["main"])) {
  header("Location: login.php");
}


if(isset($_POST['submit'])){
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["image"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }



    $productname = $_POST['product-name'];
    $productprice = $_POST['product-price'];
    $productdprice = $_POST['product-d-price'];
    $productdesc = str_replace("'"," ",$_POST['product-description']);
    
    $image = $_FILES['image']['name'];

    $sql = "INSERT INTO products(name,description,price,dprice,image) VALUES('$productname', '$productdesc', '$productprice','$productdprice','$image')";

    if(mysqli_query($link, $sql)){
        echo"Product Added Successfully";
    }else{
        echo "Failed to Add product";
    }
   

}






















?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Insert</title>
    <?php include("./includes/header.php"); ?>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="file" name="image" class="form-control  my-2" placeholder="upload your prodcut image" required>
                    <input type="text" class="form-control my-2" name="product-name" placeholder="Product Name" required>
                    <input type="number" class="form-control my-2" name="product-price" placeholder="Product Price" required>
                    <input type="number" class="form-control my-2" name="product-d-price" placeholder="Product Discount Price" required>
                <textarea class="form-control" name="product-description" id="" cols="30" rows="10" placeholder="product description" required></textarea>
                
                <div class="text-center">
                <input class="btn btn-success my-2 te" type="submit" name="submit" value="submit">
                <input class="btn btn-danger" type="reset">
                </div>
                </form>
            </div>
        </div>
    </div>










    <?php include("./includes/footer.php"); ?>
</body>

</html>