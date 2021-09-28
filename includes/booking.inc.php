<?php


if (isset($_POST['submit'])) {

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $date = $_POST['date'];
    $time =  $_POST['time'];
    $pay = $_POST['pay'];
    

    
    
    if (emptyInputAppointment( $date,$time,$pay  ) !==false) {
        header("location:  ../booking.php?error=emptyinput");
        exit();
    }
    // if (appointmentExists ($conn, $date,$time,$pay) !==false) {
    //     header("location:  ../booking.php?error=exists");
    //     exit();
    // }
    createSalon($conn,$date,$time,$pay,);


    }else {
        header("location:  ../index.php.php");
        exit();
}
    
