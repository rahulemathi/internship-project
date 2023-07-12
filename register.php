<?php
require_once("./config.php");
if(!empty($_SESSION["id"])){
    header("Location: index.php");
  }
if(isset($_GET["submit"])){
  $username = $_GET["username"];
 $email = $_GET["email"];
  $password = $_GET["password"];
  $confirmpassword = $_GET["cpassword"];
  $users = mysqli_query($link, "SELECT * FROM login WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($users) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
        $encypassword = $confirmpassword;
      $query = "INSERT INTO login (username,email,password) VALUES('$username','$email','$encypassword')";
      mysqli_query($link, $query);
      echo
      '<script>alert("Registered Successfully")</script>';
      header("refresh:5; url=login.php");
    }
    else{
      echo
      '<script> alert("Password Does Not Match"); </script>';
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Electronics Store | Register</title>
    <?php include "./includes/header.php" ?>
</head>
<body>
<div class="container">
        <div class="row d-flex justify-content-center g-0">
        <div class="col-sm-12 col-md-6">
            <img class="img-fluid" src="./images/48153.jpg" alt="">
          </div>
          <div class="col-sm-12 col-md-6 d-flex align-items-center">
            <div class="card mt-5" style="width: 18rem;">
                <!-- <img src="./images/register.png" class="card-img-top img-fluid" alt="login image"> -->
                <div class="card-body">
                <h5 class="card-title">Register</h5>
                    <form action="" class="form-group" method="get">
                    <input type="text" id="username" class="form-control mb-2" name="username" placeholder="username" required>
                    <input type="email" id="email" class="form-control mb-2" name="email" placeholder="email" required>
                    <input type="password" id="password" class="form-control mb-2" name="password" placeholder="password" required>
                    <input type="password" id="cpassword" class="form-control mb-2" name="cpassword" placeholder="Confirm password" required>
                    <button type="submit" name="submit" class="btn btn-success">Register</button> 
                    <p>Already have an account <a href="login.php" class="text-danger">click here</a></p>
                    </form>
                </div>
            </div>
          </div>
        </div>
    </div>
    <?php include "./includes/footer.php";?>
</body>
</html>