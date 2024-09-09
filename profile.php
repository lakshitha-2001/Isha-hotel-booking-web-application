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
<style>
  body{
    height: 100px;
	  background-image:url("images/j11.jpg");
    background-size:cover;
    background-repeat:no-repeat;
    background-attachment:fixed;
    background position:center;

}
form{
    height:550px;
    width:650px;
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
}
</style>
<style type="text/css">
	
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

<form>
<?php
if(isset($_SESSION["username"])){ 
  
  echo "<h2><b>Hi ".$_SESSION["username"]." Welcome to your profile...</b></h2>";
  
}?>

</form>




 