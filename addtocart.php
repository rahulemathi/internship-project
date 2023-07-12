<?php
session_start();
if(isset($_GET['valid']) && $_GET['valid']==200){
    if(empty($_SESSION['cart'])){
      $_SESSION['cart']=array();
    }
    array_push($_SESSION['cart'],$_GET['id']);
    if(empty($_SESSION['dpp'])){
      $_SESSION['dpp']=array();
    }
    array_push($_SESSION['dpp'],$_GET['dpp']);
header("location:index.php");
  }else{
    header("location:index.php");
  }
  ?>