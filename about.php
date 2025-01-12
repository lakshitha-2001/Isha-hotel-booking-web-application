<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Website - About Us</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<style>
  .box{
    border-top-color: var(--teal) !important;
  }
</style>

</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">ABOUT US</h2>

  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
  At ISHA Hotel Group we strive to be the first choice in the mind of guests, owners and talent. In our journey to achieve this, we practice strong beliefs and actions that respect the diversity of people, the community, ethics and the planet.
  </p>
</div>

<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
      <h3 class="mb-3">MR.Gamini Wilson</h3>
      <p>
      ISHA Hotels and Resorts is a multinational hospitality company,
       founded in 1971 by tycoon Gamini Wilson. It is a subsidiary of Kerry
        Properties, the company has over 100 luxury hotels and resorts with
         over 10,000 rooms in India , Bangladesh , Thailand  and the Middle East..
      </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
      <img src="images/about/about.jpg" class="w-100">
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/hotel.svg" width="70px">
        <h4 class="mt-3">100+ ROOMS</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/customers.svg" width="70px">
        <h4 class="mt-3">200+ CUSTOMERS</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/rating.svg" width="70px">
        <h4 class="mt-3">150+ REVIEWS</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
        <img src="images/about/staff.svg" width="70px">
        <h4 class="mt-3">200+ STAFFS</h4>
      </div>
    </div>
  
  </div>
</div>

<h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

<div class="container px-4">
   <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/paul.jpg" class="w-100">
          <h5 class="mt-2">Paul</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/alan.jpg" class="w-100">
          <h5 class="mt-2">Alan</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/john2.jpg" class="w-100">
          <h5 class="mt-2">Randy</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/.jpg" class="w-100">
          <h5 class="mt-2"></h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/.jpg" class="w-100">
          <h5 class="mt-2"></h5>
        </div>
        
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/.jpg" class="w-100">
          <h5 class="mt-2"></h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/.jpg" class="w-100">
          <h5 class="mt-2"></h5>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
</div>

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

 <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 40,
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
          },
          640: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 3,
          },
          1024: {
            slidesPerView: 3,
          },
        }
      });
    </script>
</body>
</html>