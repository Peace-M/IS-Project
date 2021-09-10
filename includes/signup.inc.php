<?php


if (isset($_POST['submit'])) {

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $first = $_POST['first'];
    $last =  $_POST['last'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd =  $_POST['pwd'];
    $pwd2 = $_POST['pwd2'];



   

    if (emptyInputSignup($first, $last, $username, $email, $pwd, $pwd2) !==false) {
        header("location:  ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidCharacters($first, $last) !== false) {
        header("location:  ../signup.php?error=char");
        exit();
    }
    if (invalidUsername($username) !== false) {
        header("location:  ../signup.php?error=ivalidusername&first=$first&last=$last");
        exit();
    }
    if (usernameExists($conn, $username) !== false) {
        header("location:  ../signup.php?error=usernametaken&first=$first&last=$last");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location:  ../signup.php?error=invalidemail&first=$first&last=$last&username=$username");
        exit();
    }
    if (pwdMatch($pwd, $pwd2) !== false) {
        header("location:  ../signup.php?error=passwordsdonotmatch&first=$first&last=$last&username=$username&email=$email");
        exit();
    }

    createUser($conn, $first,$last, $email, $username, $pwd);


}else {
    header("location:  ../signup.php");
    exit();
 }
?>