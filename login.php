<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href= "css/login1.css">
</head>
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<style type="text/css">

body{
	width: 100%;
	height: 100%;
	background-image:url("images/j5.jpg");
    background-size:cover;
}

form{
    height:480px;
    width:450px;
    margin-left: auto;
    margin-right: auto;
    margin:auto;
    margin-top: 50px;
    background-color:rgba(0,0,0,0.5);
    border-radius:5px solid black;
    padding: 30px 30px 5px 25px;
    box-shadow: inset -5px -5px rgba(0, 0, 0, 0.8);
    border-radius: 25px;
    text-align: center;
}
form h2{
  color:white;
  font-size: 2rem;
  border-bottom: 4px solid rgba(255, 255, 255, 0.5);
  margin:26px;
}
#submit{
    margin-top:30px;
    outline: none;
    border: none;
    color:white;
    font-size: 1rem;
    border-radius:25px;
}
#submit:hover {
  background-color:rgba(255, 255, 255, 0.0);
  color:white;
}
::placeholder{
    color:white;
    opacity:0.7;
}
 .error{
    color: red; 
    padding: 0px;
    font-size: 20px;
    margin:0px; 
    font-weight:bold; 
}
.availability-form{
	margin-top: -50px;
	z-index: 2;
	position: relative;
}
@media screen and (max-width: 575px) {
.availability-form{
	margin-top: 25px;
	padding: 0 35px;
 }

}
</style>
</head>
<body>

<?php require('inc/header.php'); ?>
<!-- Swiper Carousal-->

&nbsp
<!--<li><a href="#news">News</a></li>
<li><a href="#contact">Contact</a></li>-->

</li>
</ul>
</nav>
</header>

    <form action="includes/login.inc.php" method="POST">
    <h2><b>Login to your account</b></h2>
        <input type="text" id="MyTxt" name="uid" placeholder="Email / Username" >
        <input type="Password" id="lname" name="pwd" placeholder="Password">
        <button name="submit" type="submit" id="submit">Login</button>
    
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo '<div class="error">Fill in the all fields!</div>';

        }else if($_GET["error"] == "wronglogin"){
            echo '<div class="error">Invalid Details!</div>';
         
        }else if($_GET["error"] == "stmtfailed"){
        echo '<div class="error">Somthing went wrong!</div>';

        }else if($_GET["error"] == "none"){
            echo '<div class="error">Account Created!</div>';
        }
    }
    ?>

    <p style = "color:white;margin-top:10px;">No Registered ? <a href ="signup.php"><b>Create an account.</b></a> </p>
</form>   
</div>
</html>
