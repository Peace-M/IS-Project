<?php


$result;
//signup
function emptyInputSignup($first, $last, $username,$email, $pwd, $pwd2 , $salonname){
    
    if (empty($first) || empty($last) || empty($username) || empty($email) || empty($pwd) || empty($pwd2) || empty($salonname) ) {
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
function usernameExists ($conn, $username){
    $sql = "SELECT * FROM stylists WHERE stylist_username = ?;";
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
function createStylist($conn, $first,$last,$username, $email, $pwd, $salonname){
    $sql = "INSERT INTO stylists (stylist_firstname,stylist_lastname,stylist_username,stylist_email,stylist_password,salon_name) VALUES (?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!Mysqli_stmt_prepare($stmt, $sql)) {
        header("location:  ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


    mysqli_stmt_bind_param($stmt, "ssssss",$first, $last,$username,$email, $hashedPwd,$salonname );
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
function loginUser( $conn, $username, $pwd){
    $usernameExists = usernameExists ($conn, $username);

    if ($usernameExists === false) {
        header("location:  ../login.php?error=wronglogin");
        exit();
    }

    $hashedPwd = $usernameExists["stylist_password"];
    $checkPwd = password_verify($pwd, $hashedPwd );

    if ($checkPwd === false) {
        header("location:  ../login.php?error=wronglogin");
        exit();
    }
    elseif ($checkPwd === true) {
      session_start();
      $_SESSION["stylist_id"] = $usernameExists["stylist_id"];
      $_SESSION["stylist_username"] = $usernameExists["stylist_username"];
      header("location:  ../salon.register.php");
        exit();
    }
}
//Salon
function emptyInputRegisterSalon($name, $location, $services){
    
    if (empty($name) || empty($location) || empty($services)  ) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}

function createSalon($conn,$name, $location, $services){
    $sql = "INSERT INTO salons(salon_name,salon_location,salon_services) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!Mysqli_stmt_prepare($stmt, $sql)) {
        header("location:  ../salon.register.php?error=Stmtfailed");
        exit();
    }

    
    mysqli_stmt_bind_param($stmt, "sss",$name, $location, $services );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:  ../services.php?error=none");
    exit();
    


}
//services
function addService($conn,$name, $price, $duration){
    $sql = "INSERT INTO services(service_name,service_price,service_duration) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!Mysqli_stmt_prepare($stmt, $sql)) {
        header("location:  ../services.php?error=Stmtfailed");
        exit();
    }

    
    mysqli_stmt_bind_param($stmt, "sss",$name, $price, $duration );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:  ../services.php?error=none");
    exit();
    


}
function emptyInputAddServices($name, $location, $services){
    
    if (empty($name) || empty($location) || empty($services)  ) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}
