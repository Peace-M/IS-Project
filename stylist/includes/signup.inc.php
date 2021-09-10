<?php


if (isset($_POST['submit'])) {

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $first = $_POST['first'];
    $last =  $_POST['last'];
    $email = $_POST['email'];
    $pwd =  $_POST['pwd'];
    $pwd2 = $_POST['pwd2'];
    $salonname = $_POST['salonname'];


    if (emptyInputSignup($first, $last, $email, $pwd, $pwd2, $salonname ) !==false) {
        header("location:  ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidCharacters($first, $last, $salonname) !== false) {
        header("location:  ../signup.php?error=char");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location:  ../signup.php?error=invalidemail&first=$first&last=$last");
        exit();
    }
    if (pwdMatch($pwd, $pwd2) !== false) {
        header("location:  ../signup.php?error=passwordsdonotmatch&first=$first&last=$last&email=$email");
        exit();
    }
    createStylist($conn, $first,$last, $email, $pwd , $salonname);


}else {
    header("location:  ../signup.php");
    exit();
 }
?>







}