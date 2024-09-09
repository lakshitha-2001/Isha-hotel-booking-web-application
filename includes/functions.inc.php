<?php

function emptyInputSignup ($name, $email, $username, $pwd, $pwdRepeat){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
    $result = true;
    //ekak ho empty unoth result ek = true wenwa
}else{
    $result = false;
    //okkom fill krl nm result ek false wenw
    //false ekt asamanai kiynne exit wenw sign wenkot
}
return $result;
//return wenw true ho false
}

function invalidUid ($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    $result = true;
}else{
    $result = false;
}
return $result;
}

function inavalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $result = true;
}else{
    $result = false;
}
return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result;
    if($pwd !== $pwdRepeat){
    $result = true;
}else{
    $result = false;
}
return $result;
}

function uidExists($conn, $username, $email){
$sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
    header("Location:../signup.php?error=stmtfailed");
    exit();
}
mysqli_stmt_bind_param($stmt, "ss", $username, $email);
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);

if($row = mysqli_fetch_assoc($resultData)){
    return $row;
}else{
    return false;
}
mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd){
 $sql = "INSERT INTO users(usesrsName, usersEmail, usersUid, usersPwd) VALUES (?,?,?,?);"; //users kiyn database ekt userge data danw
 $stmt = mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt, $sql)){
     header("Location:../signup.php?error=stmtfailed");
     exit();
 }
 $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);//password encrypt and assign to value for variable 
 mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("Location:../login.php?error=none");
 exit();
}

function emptyInputLogin ($username, $pwd){
    $result;
    if(empty($username) || empty($pwd)){
    $result = true;
}else{
    $result = false;
}
return $result;
}

function LoginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);
    if($uidExists === false) {
        header("location:../login.php?error=wronglogin");
        exit();
    }
    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false){
        header('Location:../login.php?error=wronglogin');
        exit();
    }else if ($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        $_SESSION["username"] = $uidExists["usesrsName"];
        header("Location:../index.php");
        exit();
    }
}

function emptyBooking($username, $checkin, $checkout, $ad, $ch, $roomType, $nubrOfRooms){
    $result;
    if(empty($username) || empty($checkin) || empty($checkout) || empty($ad) || empty($ch) || empty($roomType) || empty($nubrOfRooms)){
    $result = true;
}else{
    $result = false;
}
return $result;
}

function createBooking($conn, $username, $checkin, $checkout, $ad, $ch, $roomType, $nubrOfRooms){
    $sql = "INSERT INTO booking(usesrsUid, checkIn, checkOut, ad, ch, roomType, nubrOfRooms) VALUES (?,?,?,?,?,?,?);"; 
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../index.php?error=stmtfailed");
        exit();
    }
     mysqli_stmt_bind_param($stmt, "sssssss", $username, $checkin, $checkout, $ad, $ch, $roomType, $nubrOfRooms);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../index.php?error=none");
    exit();
}

function emptyInputMsg ($name, $mobile, $subject, $txt,){
    $result;
    if(empty($name) || empty($mobile) || empty($subject) || empty($txt)){
    $result = true;
}else{
    $result = false;
}
return $result;
}


function createMsg($conn, $name, $mobile, $subject, $txt,){
    $sql = "INSERT INTO messages(userName, userMobile, subjct, msg) VALUES (?,?,?,?);"; //users kiyn database ekt userge data danw
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../contact.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssss", $name, $mobile, $subject, $txt);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../contact.php?error=none");
    exit();
   }