<?php
if(isset($_POST["submit"])){
$username = $_POST["uid"];
$pwd = $_POST["pwd"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(emptyInputLogin($username, $pwd) !== false ){
    header("Location:../login.php?error=emptyinput");
    exit();
//username saha pwd eka empty da? e kiyamana asamanada false ekata " e kiynne false ekt asamanai kiynne
//e txt box deken mna hri enw ehm nm exit krnw if eken, saha log wenw yta cd eken 
}

LoginUser($conn, $username, $pwd);

}
else{
    header('Location:../login.php');
    exit();
}
//definitely user use url
//therefore show back login
//this location is include-->login.inc.php
//eka parak back krla "/"<-- login.php denwa