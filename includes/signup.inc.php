<?php
if(isset($_POST["submit"])){
$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["uid"];
$pwd = $_POST["pwd"];
$pwdRepeat = $_POST["pwdrepeat"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

//function eka nisa emptyInputSignup = true or false wenw, ethkot $emptyInput = true or false wenw
$emptyInput = emptyInputSignup ($name, $email, $username, $pwd, $pwdRepeat);
$invalidUid = invalidUid($username); 
$inavalidEmail = inavalidEmail($email);
$pwdMatch = pwdMatch($pwd, $pwdRepeat);
$uidExists = uidExists($conn, $username, $email);

//okkom fill nm emptyInputs = false (false asamanada false)
//okkom fill nm false = false wenw em nisa if ek athult ynne na
//5ma false nm ewa athult yn na 
if ($emptyInput !== false){
    header("Location:../signup.php?error=emptyinput");
    exit();
}
if ($invalidUid !== false){
    header("Location:../signup.php?error=invaliduid");
    exit();
}
if ($inavalidEmail !== false){
    header("Location:../signup.php?error=inavalidEmail");
    exit();
}
if ($pwdMatch !== false){
    header("Location:../signup.php?error=passwordsdontmatch");
    exit();
}
if ($uidExists !== false){
    header("Location:../signup.php?error=usernametaken");
    exit();
}

createUser($conn, $name, $email, $username, $pwd);

}
else{
    header('Location:../login.php');
    exit();
}
//definitely user use url
//therefore show back login
//this location is include-->login.inc.php
//eka parak back krla "/"<-- login.php denwa