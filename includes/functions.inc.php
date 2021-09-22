<?php

$result;
//signup
function emptyInputSignup($first, $last, $username, $email, $pwd, $pwd2){
    
    if (empty($first) || empty($last) || empty($username) || empty($email) || empty($pwd) || empty($pwd2) ) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}
function invalidCharacters($first, $last){
    
    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last))  {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}
function invalidUsername($username){
    
    if (!preg_match("/^[a-zA-Z0-9]*$/",$username))  {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}
function usernameExists ($conn, $username){
    $sql = "SELECT * FROM customers WHERE customer_username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!Mysqli_stmt_prepare($stmt, $sql)) {
        header("location:  ../signup.php?error=Stmtfailed");
        exit();
    }


    mysqli_stmt_bind_param($stmt, "s", $username );
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc( $resultData)) {
      return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);


}
function invalidEmail($email){
   
    if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}
function pwdMatch($pwd, $pwd2){
   
    if ($pwd!==$pwd2) {
        $result = true;
    }
    else {
        $result = false;
    }
    return  $result;

}
function createUser($conn, $first,$last, $email, $username, $pwd){
    $sql = "INSERT INTO customers (customer_firstname,customer_lastname,customer_username,customer_email,customer_password) VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!Mysqli_stmt_prepare($stmt, $sql)) {
        header("location:  ../signup.php?error=Stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($stmt, "sssss",$first, $last, $username,$email, $hashedPwd );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:  ../login.php?error=none");
    exit();
    


}
// Login
function emptyInputLogin( $username,  $pwd){
    
    if ( empty($username) ||  empty($pwd)  ) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}
function loginUser( $conn, $username,  $pwd){
    $usernameExists = usernameExists ($conn, $username);

    if ($usernameExists === false) {
        header("location:  ../login.php?error=wronglogin");
        exit();
    }

    $hashedPwd = $usernameExists["customer_password"];
    $checkPwd = password_verify($pwd, $hashedPwd );

    if ($checkPwd === false) {
        header("location:  ../login.php?error=wronglogin");
        exit();
    }
    elseif ($checkPwd === true) {
      session_start();
      $_SESSION["customer_id"] = $usernameExists["customer_id"];
      $_SESSION["customer_username"] = $usernameExists["customer_username"];
      $_SESSION["customer_firstname"] = $usernameExists["customer_firstname"];

      header("location:  ../index.php");
        exit();
    }
    
    
}