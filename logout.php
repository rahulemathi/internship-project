<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["username"]);
unset($_SESSION['cart']);
session_unset();
session_destroy();
header("Location:login.php");
?>