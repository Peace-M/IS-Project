<?php


if (isset($_POST['submit'])) {

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $name = $_POST['name'];
    $price =  $_POST['price'];
    $duration = $_POST['duration'];


    if (emptyInputAddServices($name, $price, $duration) !==false) {
        header("location:  ../services.php?error=emptyinput");
        exit();
    }
  

     addService($conn,$name, $price, $duration);


    }else {
    header("location:  ../services.php");
    exit();
  }















