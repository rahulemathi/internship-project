<?php 
require_once("./config.php");
session_start();
if(!empty($_SESSION["id"])){
  header("Location: login.php");
}
if(isset($_GET["submit"])){
    $username = $_GET["username"];
  $password = $_GET["password"];
  $query = "SELECT id,username FROM login WHERE  username ='$username' or id='$username' AND password ='$password'";
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    // if(password_verify($password,$row['password'])){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      $_SESSION["username"] = $row["username"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
//   else{
//     echo
//     "<script> alert('User Not Registered'); </script>";
//   }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Electronics Store | login page</title>
    <?php include "./includes/header.php" ?>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-end g-0">
          <div class="col-sm-12 col-md-6">
            <img class="img-fluid" src="./images/48153.jpg" alt="">
          </div>
          <div class="col-sm-12 col-md-6 d-flex align-items-center">
            <div class="card mt-5" style="width: 18rem;">
                <!-- <img src="./images/login.png" class="card-img-top img-fluid" alt="login image"> -->
                <div class="card-body">
                    <h5 class="card-title">login</h5>
                    <form action="" class="form-group" method="get">
                    <input type="text" id="username" class="form-control mb-2" name="username" placeholder="username or Email">
                    <input type="password" id="password" class="form-control mb-2" name="password" placeholder="password">
                    <button type="submit" name="submit" class="btn btn-success">Sign In</button> 
                    <p class="my-2">Don't have an account <a href="register.php" class="text-danger">click here</a></p>
                    </form>
                </div>
            </div>
          </div>
        </div>
    </div>

    <?php include "./includes/footer.php";?>
</body>


</html>