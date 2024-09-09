<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Website</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<style>
 .error{
    color: red; 
    padding: 10px;
    font-size: 20px;
    margin:0px; 
    text-align:center;
}
</style>

</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">CONTACT US</h2>

  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
  Our transaction team is committed to building long-term strategic partnerships with our corporate clients to provide flexible, innovative, personalized and mutually beneficial solutions. Send us your messages
  </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.748424780809!2d79.82874877414325!3d8.024855703899977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afd17e8d7e34db5%3A0x1606baef4bc4fd08!2sPuttalam%20Beach%20Park!5e0!3m2!1sen!2slk!4v1702176279968!5m2!1sen!2slk"></iframe>
        <h5>Address</h5>
        <a href="https://maps.app.goo.gl/SkkY57VE2muxU3YZ9" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
          <i class="bi bi-geo-alt-fill"></i> Colombo Road, Puttalam.
        </a>
        <h5 class="mt-4">Call us</h5>
        <a href="tel: +94718799665" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 718799665</a>
        <br>
        <a href="tel: +94718799666" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 718799666</a>
        <h5 class="mt-4">Email</h5>
        <a href="mailto: Pathiraja@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i>Pathiraja@gmail.com</a>

        <h5 class="mt-4">Follow us</h5>
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter me-1"></i>
        </a>
        
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
        </a>
        
        <a href="#" class="d-inline-block text-dark fs-5">
          <i class="bi bi-instagram me-1"></i>
          
        </a>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
      <form action="includes/contact.inc.php" method="POST">
          <h5>Send a message</h5>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Name</label>
          <input type="text" name = "name" class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Mobile Number</label>
          <input type="text" name = "mobile" class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Subject</label>
          <input type="text" name = "subject" class="form-control shadow-none">
          </div>
          <div class="mb-3">
          <label class="form-label" style="font-weight: 500;">Message</label>
          <textarea class="form-control shadow-none" rows="5" name = "txtarea" style="resize: none;"></textarea>
          </div>
          <button type="submit" name="submit" id="submit" class="btn text-white custom-bg mt-3">Send</button>

          <?php
          if(isset($_GET["error"])){
              if($_GET["error"] == "emptyinput"){
                echo '<div class="error">Fill in the all fields!</div>';
          }
          else if($_GET["error"] == "none"){
          echo '<div class="error">Message Sent!</div>';
          }
          else if($_GET["error"] == "stmtfailed"){
          echo '<div class="error">Somthing went wrong!</div>';
          }
         
			}
			?>
        </form>
      </div>
    </div>
</div>
    
  </div>
</div>

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>