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

<style type="text/css">
.error{
    color: red;
    /* border: 1px solid red; */
    padding: 0px;
    font-size: 22px;
    margin-bottom: 0px; 
	text-align:center;
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
 <div class="container-fluid px-lg-4 mt-4">
 	 <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/1.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/2.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/3.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/4.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/5.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/6.png" class="w-100 d-block" />
        </div>
        
      </div>
      
    </div>
 </div>

 <!-- check avilability form-->
 <div class="container availability-form">
 	<div class="row">
 		<div class="col-lg-12 bg-white shadow p-4 rounded">
 		<h5 class="col-lg-3">Check Booking Availability</h5>

 	<form action="includes/booking.inc.php" method="POST">
 		<div class="row align-items-end">

	 	<div class="col-lg-3 mb-3">
 			<label class="form-label" style="font-weight: 500;">Username</label>
 			<input type="text" name="username" placeholder="Username" class="form-control shadow-none">
 		</div>

 		<div class="col-lg-3 mb-3">
 			<label class="form-label" style="font-weight: 500;">Check-in</label>
 			<input type="date" name="checkin" placeholder="mm/dd/yyyy" class="form-control shadow-none">
 		</div>
 		<div class="col-lg-3 mb-3">
 			<label class="form-label" style="font-weight: 500;">Check-Out</label>
 			<input type="date" name="checkout" placeholder="mm/dd/yyyy" class="form-control shadow-none">
 		</div>

 		<div class="col-lg-3 mb-3">
 			<label class="form-label" style="font-weight: 500;">Adult</label>
 			<select class="form-select shadow-none" name = "ad">
  				
			 	<option value="none">None</option>
  				<option value="1">One</option>
  				<option value="2">Two</option>
  				<option value="3">Three</option>
				<option value="4">Four</option>
				</select>
		</div>
		<div class="col-lg-3 mb-3">
 			<label class="form-label" style="font-weight: 500;">Children</label>
 			<select class="form-select shadow-none" name = "ch">
  				
				<option value="none">None</option>
  				<option value="1">One</option>
  				<option value="2">Two</option>
  				<option value="3">Three</option>
				<option value="4">Four</option>
				</select>
		</div>

		<div class="col-lg-3 mb-3">
 			<label class="form-label" style="font-weight: 500;">Room type</label>
 			<select class="form-select shadow-none" name = "roomType">
  					
				<option value="1">One</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
				</select>
		</div>

		<div class="col-lg-3 mb-3">
 			<label class="form-label" style="font-weight: 500;">Number Of Rooms</label>
 			<select class="form-select shadow-none" name = "nubrOfRooms">
  					
				<option value="1">One</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
				<option value="4">Four</option>
				</select>
		</div>

 		<div class="col-lg-1 mb-lg-3 mt-2">
 			<button type="submit" name="su" class="btn text-white shadow-none custom-bg">Submit</button>
 		</div>
 		</div>
			 <?php
    		if(isset($_GET["error"])){
        		if($_GET["error"] == "emptyinput"){
            	echo '<div class="error">Fill in the all fields!</div>';
				}
				else if($_GET["error"] == "invaliduid"){
				echo '<div class="error">Invalid Username!</div>';
				}
				else if($_GET["error"] == "none"){
				echo '<div class="error">Booking successful!</div>';

				}else if($_GET["error"] == "wronguser"){
				echo '<div class="error">First log in before booking!</div>';
				}
			    else if($_GET["error"] == "stmtfailed"){
				echo '<div class="error">Somthing went wrong!</div>';
				}
				else if($_GET["error"] == "somthingwentwrong!"){
				echo '<div class="error">Somthing went wrong!</div>';
				}
			}
			?>
 	</form>
 		</div>
 	</div>
 </div>
 
 <!-- Our Rooms -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
 <div class="container">
 	<div class="row">

 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; max-height:646px; margin: auto;">
			  <img src="images/rooms/2.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title"><u>Standard Double Room(Type1)</u></h5>
			    <h6 class="mb-4"> price for 1 night - LKR 7,369</h6>
			    <div class="features mb-4">
			    	<h6 class="mb-1">Features</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 large double Bed
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Bathroom
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Balcony
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		2 Sofa
    				</span>
			    </div>
			    <div class="Facilities mb-4">
			    	<h6 class="mb-1">Facilities</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Wifi
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Television
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		AC
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Room Heater & iorn
    				</span>
    			</div>
    			<div class="guests mb-4">
			    	<h6 class="mb-1">Guests</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Price for - 2 people 
    				 </span>
    				<!-- <--<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		4 Children
    				</span> --> 
    			</div>	
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    					<a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    				</div>
			  </div>
			</div>
 		</div>

 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; max-height:652px; margin: auto;">
			  <img src="images/rooms/7.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title"><u>Standard Triple Room(Type2)</u></h5>
			    <h6 class="mb-4">price for 1 night - LKR 8,842</h6>
			    <div class="features mb-4">
			    	<h6 class="mb-1">Features</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		3 single beds
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Bathroom
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Balcony
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		3 Sofa
    				</span>
			    </div>
			    <div class="Facilities mb-4">
			    	<h6 class="mb-1">Facilities</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Wifi
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Television
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		AC
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
						Room Heater & iorn
    				</span>
					
					<br><br>
    				<div class="guests mb-4">
			    	<h6 class="mb-1">Guests</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						Price for - 3 people 
    				</span>
    				
    				</div>	
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    					<a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    				</div>
			    </div>
			  </div>
			</div>
 		</div>

 		<div class="col-lg-4 col-md-6 my-3">
 			<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
			  <img src="images/rooms/4.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title"><u>Duluxe Family Room(Type3)</u></h5>
			    <h6 class="mb-4">price for 1 night - LKR 15,148</h6>
			    <div class="features mb-4">
			    	<h6 class="mb-1">Features</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		2 single bed & 1 large double bed
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		2 Bathrooms
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		1 Balcony
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		4 Sofa
    				</span>
			    </div>
			    <div class="Facilities mb-4">
			    	<h6 class="mb-1">Facilities</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Wifi
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		Television
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
			    		AC
    				</span>
    				<span class="badge rounded-pill bg-light text-dark text-wrap">
						Room Heater & iorn
    				</span>

    				<div class="guests mb-4">
			    	<h6 class="mb-1">Guests</h6>
			    	<span class="badge rounded-pill bg-light text-dark text-wrap">
						Price for - 4 people 
    				</span>
    				</div>
    					
    				<div class="rating mb-4">

    					<h6 class="mb-1">Rating</h6>
    					<span class="badge rounded-pill bg-light">
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    						<i class="bi bi-star-fill text-warning"></i>
    					</span>
    				</div>
    				<div class="d-flex justify-content-evenly mb-2">
    					<a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
    					<a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
    				</div>
			    </div>
			  </div>
			</div>
 		</div>


 		<div class="col-lg-12 text-center mt-5">
 			<a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
 		</div>
 	</div>	
 </div>

 <!-- Our Facilities-->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

 <div class="container">
 	<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/wifi.svg" width="80px">
 			<h5 class="mt-3">Wifi</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/T.svg" width="80px">
 			<h5 class="mt-3">Television</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/AC.svg" width="80px">
 			<h5 class="mt-3">AC</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/H.svg" width="80px">
 			<h5 class="mt-3">Room Heater</h5>
 		</div>
 		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
 			<img src="images/Facilities/I.png" width="80px">
 			<h5 class="mt-3">Iron</h5>
 		</div>
 		<div class="col-lg-12 text-center mt-5">
 			<a href="facilities.php" class="btn btn-sm btn-outline-dark rounded rounded-0 fw-bold shadow-none">More Facilities >>></a>
 		</div>
 	</div>
 </div>

<!-- Testimonials -->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reviews</h2>

 <div class="container mt-5">
 	<!-- Swiper -->
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="images/facilities/stars.png" width="30px">
          	<h6 class="m-0 ms-2">W.P Wanninayaka</h6>
          </div>
          <p>
		  Absolutely had a marvelous and mesmerizing stay, 
		  very friendly staff with good food and its worth every penny. 
		  Accommodation was up to the standards. They arranged a safari 
		  to wilpattu national park which made it much easier for us. 
		  I would recommend this place 100%. This is the ideal spot for
		  you if you are looking for a friendly place to feel like home
		  with good food and good service.
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="images/facilities/stars.png" width="30px">
          	<h6 class="m-0 ms-2">Shalani Tharanga</h6>
          </div>
          <p>
		WOW! It is really interesting to see the kind of detailing the room has. Toothbrushes, paste, scissors. toothpick, paracetamol. Fans if you dont want to use AC. Iron. 
		The cost looks higher and at the same time I can not think of any hotel that has similar detailing. Absolutely clean place. The dining area is always ready, the fodd is available exactly at the time given. 
		Whatever we eat was of very high quality and sufficient quantity. Parotha, Chapathi, Kiri Bath, Dosa all were good and so were the accompaniments.
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
          	<img src="images/facilities/stars.png" width="30px">
          	<h6 class="m-0 ms-2">Sarath Roopasinghe</h6>
          </div>
          <p>
           I really like that the room service is 24/7. The food was fantastic and very
		   fast to arrive. The parking was easy, staff were lovely, rooms were sensational.
		   Bedding very comfortable and the bath tub was perfect.”
          </p>
          <div class="rating">
          	<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
    		<i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
 </div>

 <!-- REach us-->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Contact Us</h2>

 <div class="container">
 	<div class="row">
 		<div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
 		<iframe class="w-100 rounded" height="420px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.748424780809!2d79.82874877414325!3d8.024855703899977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afd17e8d7e34db5%3A0x1606baef4bc4fd08!2sPuttalam%20Beach%20Park!5e0!3m2!1sen!2slk!4v1702176279968!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
 		</div>
 		<div class="col-lg-4 col-md-4 ">
 			<div class="bg-white p-4 rounded">
 				<h5>Call us</h5>
 				<a href="tel: +94718799665" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 718799665</a>
 				<br>
 				<a href="tel: +94718799666" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 718799666</a>
 			</div>	
 			<div class="bg-white p-4 rounded">
 				<h5>Follow us</h5>
 				<a href="#" class="d-inline-block mb-3">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-twitter me-1"></i>Twitter
 					</span>
 				</a>
 				<br>
 				<a href="#" class="d-inline-block mb-3">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-facebook me-1"></i>Facebook
 					</span>
 				</a>
 				<br>
 				<a href="#" class="d-inline-block">
 					<span class="badge bg-light text-dark fs-6 p-2">
 						<i class="bi bi-instagram me-1"></i>Instagram
 					</span>
 				</a>
 			</div>
 		</div>
 	</div>
 </div>
<hr>
 <?php require('inc/footer.php') ?>
<!-- JavaScript Bundle with Popper -->


 <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

 <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
        	delay: 3500,
        	disableOnInteraction: false,
        }
      });

      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
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
        		slidesPerView: 2,
        	},
        	1024: {
        		slidesPerView: 3,
        	},
        }
      });
    </script>
</body>
</html>