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
  .pop:hover{
    border-top-color: var(--teal) !important;
    transform: scale(1.03);
    transition: all 0.3s;
  }
</style>

</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>

  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
  Our dedicated and experienced staff at ISHA Hotel are fully equipped to meet the needs of our guests, offering a wide range of services and facilities to make your stay memorable, whether for business or leisure.
  </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/Wifi.svg" width="40px">
          <h5 class="m-0 ms-3">Wifi</h5>
        </div>  
          <p>
          Free high-speed wifi throughout your stay.<br><br>
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/T.svg" width="40px">
          <h5 class="m-0 ms-3">Television</h5>
        </div>  
          <p>
          Throughout your stay here, you will have television facilities with over 100 TV channels.
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/AC.svg" width="40px">
          <h5 class="m-0 ms-3">AC</h5>
        </div>  
          <p>
          Air condition is available for your room throughout your stay.
          <br><br>
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/I.png" width="40px">
          <h5 class="m-0 ms-3">Iron</h5>
        </div>  
          <p>
          Your room will have iron facilities throughout your stay.<br><br>
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/Wifi.svg" width="40px">
          <h5 class="m-0 ms-3">Telephone</h5>
        </div>  
          <p>
          One telephone will be provided in your room throughout your stay.<br><br>
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/H.svg" width="40px">
          <h5 class="m-0 ms-3">Room heater</h5>
        </div>  
          <p>
          Room heater facility will be provided to your room throughout your stay.
          </p> 
      </div>
    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>