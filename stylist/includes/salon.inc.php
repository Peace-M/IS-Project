<?php


if (isset($_POST['submit'])) {

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $name = $_POST['name'];
    $location =  $_POST['location'];
    $services = $_POST['services'];


    if (emptyInputRegisterSalon($name, $location, $services) !==false) {
        header("location:  ../salon.register.php?error=emptyinput");
        exit();
    }
  

     createSalon($conn,$name, $location, $services);


    }else {
    header("location:  ../salon.register.php");
    exit();
  }















