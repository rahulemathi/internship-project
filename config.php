<?php 

$server = "localhost";
$user = "root";
$password = "";
$db = "electronics";


$link = new mysqli($server,$user,$password,$db);

if($link->connect_error){
    die("error".$link->connect_error);
}







?>