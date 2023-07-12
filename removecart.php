<?php 
session_start();
if(empty($_GET['valid'])){
    header("location:index.php");
}
    if(isset($_GET['clearcart'])){
    unset($_SESSION['cart']);
    unset($_SESSION['dpp']);
    header("Location: index.php");
    }

    if(isset($_GET['remove'])){
        $item = $_GET['electronicitem'];
        $electronicitems = array_search($item,$_SESSION['cart']);
        $itemprice = $_GET['itemprice'];
        $itemprices = array_search($itemprice,$_SESSION['dpp']);
        unset($_SESSION['cart'][$electronicitems]);
        unset($_SESSION['dpp'][$itemprices]);
        header("location: cart.php");
    }

    if(isset($_GET['checkout'])){
        unset($_SESSION['cart']);
        unset($_SESSION['dpp']);
       header("location:success.php");
    }
?>

