<?php require('inc/links.php'); ?>

<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<link rel="stylesheet" href= "css/login1.css">
<head>
    <style>
body{
    height: 100px;
	background-image:url("images/j9.jpg");
    background-size:cover;
    background-repeat:no-repeat;
    background-attachment:fixed;
    background position:center;

}
form{
    height:600px;
    width:550px;
    margin-left: auto;
    margin-right: auto;
    margin:auto;
    margin-top: 40px;
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
  margin:20px;
}
#submit{
    margin-top:10px;
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
    </style>
</head>
<body> 
    <form action="includes/signup.inc.php" method="POST">
    <h2><b>Registration</b></h2>
        <input type="text" id="fname" name="name" placeholder="Name">
        <input type="text" id="fname" name="email" placeholder="Email">
        <input type="text" id="fname" name="uid" placeholder="Username">
        <input type="password" id="lname" name="pwd" placeholder="Password">
        <input type="password" id="lname" name="pwdrepeat" placeholder="Repeat Password">
        <button name="submit" type="submit" id="submit">Register</button>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo '<div class="error">Fill in the all fields!</div>';

        }else if($_GET["error"] == "invaliduid"){
            echo '<div class="error">Invalid Username!</div>';
         
        }else if($_GET["error"] == "inavalidEmail"){
            echo '<div class="error">Invalid Email!</div>';

        }else if($_GET["error"] == "passwordsdontmatch"){
            echo '<div class="error">Passwords not matching!</div>';

        }else if($_GET["error"] == "stmtfailed"){
        echo '<div class="error">Somthing went wrong!</div>';

        }else if($_GET["error"] == "none"){
            echo '<div class="error">Account Created!</div>';
    
        }else if($_GET["error"] == "usernametaken"){
        echo '<div class="error">Username / Email Already In Use!</div>';
        }
    }
    ?>
    <p style="color:white;margin-top:5px;">Already have an account ? <a href ="login.php"><b>Log in.</b></a></p>
</div>
</form>
</body>

