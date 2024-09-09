<?php
session_start();
?>
<?php
if(isset($_POST["su"])){
$username = $_POST["username"];
$checkin = $_POST["checkin"];
$checkout = $_POST["checkout"];
$ad = $_POST["ad"];
$ch = $_POST["ch"];
$roomType = $_POST["roomType"];
$nubrOfRooms = $_POST["nubrOfRooms"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(emptyBooking($username, $checkin, $checkout, $ad, $ch, $roomType, $nubrOfRooms) !== false ){
    header("Location:../index.php?error=emptyinput");
    exit();
}

if(isset($_SESSION["username"])){

        $loginUser = $_SESSION["username"];

        if(($username) == ($loginUser)){
        // echo "Hi ".$loginUser. " booking successfull..!";

        createBooking($conn, $username, $checkin, $checkout, $ad, $ch, $roomType, $nubrOfRooms);

        header('Location:../index.php?error=none');
        }
    
        else{
        // echo "Booking fail";
        header('Location:../index.php?error=invaliduid');
        exit();
        }

    }
    else
    {
    header('Location:../index.php?error=wronguser');
    exit();
    }
}

else
{
    header('Location:../index.php?error=somthingwentwrong!');
    exit();

}