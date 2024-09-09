<?php
if(isset($_POST["submit"])){
$name = $_POST["name"];
$mobile = $_POST["mobile"];
$subject = $_POST["subject"];
$txt = $_POST["txtarea"];


require_once 'dbh.inc.php';
require_once 'functions.inc.php';

    if(emptyInputMsg($name, $mobile, $subject, $txt,) !== false ){
    header("Location:../contact.php?error=emptyinput");
    exit();
    }
    
    createMsg($conn, $name, $mobile, $subject, $txt,);


}else{

    header('Location:../contact.php?error=somthingwentwrong!');
    exit();
}