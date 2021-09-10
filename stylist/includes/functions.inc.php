<?php


$result;
//signup
function emptyInputSignup($first, $last, $email, $pwd, $pwd2 , $salonname){
    
    if (empty($first) || empty($last)  || empty($email) || empty($pwd) || empty($pwd2) || empty($salonname) ) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}
function invalidCharacters($first, $last){
    
    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) )  {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

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
function createStylist($conn, $first,$last, $email, $pwd, $salonname){
    $sql = "INSERT INTO stylists (stylist_firstname,stylist_lastname,stylist_email,stylist_password,salon_name) VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!Mysqli_stmt_prepare($stmt, $sql)) {
        header("location:  ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($stmt, "sssss",$first, $last,$email, $hashedPwd,$salonname );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:  ../login.php?error=none");
    exit();
    


}