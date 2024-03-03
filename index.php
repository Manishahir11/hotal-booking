<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TGM HOTAL -Home</title>
 <?php require('inc/links.php') ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<style>
  
</style>

<body class="bg-light">
   <?php require('inc/navbar.php') ?>
  <!-- Slider -->
  <div class="container-fluid m-3 p-3">
    
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">

      <?php 
              $res = selectAll('carousal');

              while ($row = mysqli_fetch_array($res)) {
                  $path = CAROUSAL_IMG_PATH;
                     echo <<<data
                            <div class="swiper-slide">
                              <img src="$path$row[image]" class="w-100 d-block" />
                          </div>
                     data;
              }
      
      ?>
      
        
     
    </div>
    </div>
   
  </div>
  
  <!-- Check Availability-form -->
  <div class="container Availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form action="">
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3" style="font-weight: 500;">
              <label class="form-label">Check-in</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3" style="font-weight: 500;">
              <label class="form-label">Check-out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3" style="font-weight: 500;">
              <label class="form-label">Adult</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3" style="font-weight: 500;">
              <label class="form-label">Children</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white shadow-none custum-bg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Rooms cards -->
  <h2 class="mt-5 pt-4 mb-4 text-center fx-bold h-font">Our Rooms</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
          <img src="img/r1.jpg" style="height: 200px;" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Simpal Room Name</h5>
            <h6 class="mb-4">Price: ₹800 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">features</h6>
              <span class="badge text-bg-light text-wrap">
                2 Rooms
              </span>
              <span class="badge text-bg-light text-wrap">
                1 BathRoom
              </span>
              <span class="badge text-bg-light text-wrap">
                1 Balcony
              </span>
              <span class="badge text-bg-light text-wrap">
                2 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge text-bg-light text-wrap">
                Wifi
              </span>
              <span class="badge text-bg-light text-wrap">
                Television
              </span>
              <span class="badge text-bg-light text-wrap">
                Ac
              </span>
              <span class="badge text-bg-light text-wrap">
                Room Heater
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge text-bg-light text-wrap">
                5 Adults
              </span>
              <span class="badge text-bg-light text-wrap">
                4 Children
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge text-bg-light text-wrap">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star "></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custum-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
          <img src="img/r1.jpg" style="height: 200px;" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Simpal Room Name</h5>
            <h6 class="mb-4">Price: ₹800 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">features</h6>
              <span class="badge text-bg-light text-wrap">
                2 Rooms
              </span>
              <span class="badge text-bg-light text-wrap">
                1 BathRoom
              </span>
              <span class="badge text-bg-light text-wrap">
                1 Balcony
              </span>
              <span class="badge text-bg-light text-wrap">
                2 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge text-bg-light text-wrap">
                Wifi
              </span>
              <span class="badge text-bg-light text-wrap">
                Television
              </span>
              <span class="badge text-bg-light text-wrap">
                Ac
              </span>
              <span class="badge text-bg-light text-wrap">
                Room Heater
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge text-bg-light text-wrap">
                5 Adults
              </span>
              <span class="badge text-bg-light text-wrap">
                4 Children
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge text-bg-light text-wrap">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star "></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custum-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
          <img src="img/r1.jpg" style="height: 200px;" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Simpal Room Name</h5>
            <h6 class="mb-4">Price: ₹800 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">features</h6>
              <span class="badge text-bg-light text-wrap">
                2 Rooms
              </span>
              <span class="badge text-bg-light text-wrap">
                1 BathRoom
              </span>
              <span class="badge text-bg-light text-wrap">
                1 Balcony
              </span>
              <span class="badge text-bg-light text-wrap">
                2 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge text-bg-light text-wrap">
                Wifi
              </span>
              <span class="badge text-bg-light text-wrap">
                Television
              </span>
              <span class="badge text-bg-light text-wrap">
                Ac
              </span>
              <span class="badge text-bg-light text-wrap">
                Room Heater
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge text-bg-light text-wrap">
                5 Adults
              </span>
              <span class="badge text-bg-light text-wrap">
                4 Children
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge text-bg-light text-wrap">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star "></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custum-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details >>></a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-12 mt-4 text-center">
        <a href="#" class="btn btn-sm btn-outline-dark fx-bold">More Rooms >></a>
      </div>
    </div>
  </div>
  <!-- Our Facilities -->
  <h2 class="mt-5 pt-4 mb-4 text-center fx-bold h-font">Our Facilities </h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="img/wifi.png" style="width: 80px; height: 80px;">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="img/wifi.png" style="width: 80px; height: 80px;">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="img/wifi.png" style="width: 80px; height: 80px;">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="img/wifi.png" style="width: 80px; height: 80px;">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="img/wifi.png" style="width: 80px; height: 80px;">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Facilities >>></a>

      </div>
    </div>
  </div>

  <!-- Testimonials -->
  <h2 class="mt-5 pt-4 mb-4 text-center fx-bold h-font">Testimonials</h2>
  <div class="container mt-5">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mt-4">
        <div class="swiper-slide bg-white mb-3 shadow">
          <div class="profile d-flex align-items-center p-4">
            <img src="img/mahdi.jpg" style="height: 50px;" />
            <h6 class="m-0 ms-2">Rendom user1</h6>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente officiis illo <br>
            repudiandae ea corporis mollitia,<br>
            necessitatibus iure veritatis qui quaerat!
          </p>
          <div class="rating">
            <span class="badge text-bg-light text-wrap">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star "></i>
            </span>
          </div>
        </div>
        <div class="swiper-slide bg-white mb-3 shadow">
          <div class="profile d-flex align-items-center p-4">
            <img src="img/mahdi.jpg" style="height: 50px;" />
            <h6 class="m-0 ms-2">Rendom user1</h6>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente officiis illo <br>
            repudiandae ea corporis mollitia,<br>
            necessitatibus iure veritatis qui quaerat!
          </p>
          <div class="rating">
            <span class="badge text-bg-light text-wrap">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star "></i>
            </span>
          </div>
        </div>
        <div class="swiper-slide bg-white mb-3 shadow">
          <div class="profile d-flex align-items-center p-4">
            <img src="img/mahdi.jpg" style="height: 50px;" />
            <h6 class="m-0 ms-2">Rendom user1</h6>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente officiis illo <br>
            repudiandae ea corporis mollitia,<br>
            necessitatibus iure veritatis qui quaerat!
          </p>
          <div class="rating">
            <span class="badge text-bg-light text-wrap">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star "></i>
            </span>
          </div>
        </div>
        <div class="swiper-pagination">
        </div>
      </div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Know More >>></a>

    </div>
</div>


  

    <!-- Reach Us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fx-bold h-font">Reach Us</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
          <iframe class="w-100 rounded"
            src="<?php echo $contact_r['iframe'] ?>"
            height="350" loading="lazy"></iframe>
        </div>
        <div class="col-lg-4 col-md-4 p-4 mb-lg-0 mb-3">
          <div class="bg-white p-4 mb-4 rounded">
            <h5>Call us</h5>
            <a href="#tel:<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                class="bi bi-telephone"></i> +<?php echo $contact_r['pn1'] ?></a> <br>
            <a href="#tel: +<?php echo $contact_r['pn2'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                class="bi bi-telephone"></i> +<?php echo $contact_r['pn2'] ?></a>
          </div>
          <div class="bg-white p-4 mb-4 rounded">
            <h5>follow us</h5>
            <?php  
            if ($contact_r['tw']!= '') {

              echo<<<data
                    <a href="$contact_r[tw]" class="d-inline-block mb-3" target="_blank">
                    <span class="badge bg-light text-dark fs-6 p-2">
                      <i class="bi bi-twitter me-1"></i>Twitter
                    </span>
                  </a> <br>
              data;
            }
            ?>
            
            <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block mb-3" target="_blank">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-instagram me-1"></i>Instagaram
              </span>
            </a> <br>
            <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3" target="_blank">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-facebook me-1"></i>Facebook
              </span>
            </a> <br>
          </div>
        </div>

      </div>
    </div>

<?php require('inc/footer.php')?>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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

      var swiper = new Swiper(".mySwiper", {
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
            slidesPerView: "1",
          },
          320: {
            slidesPerView: "1",
          },
          768: {
            slidesPerView: "2",
          },
          1024: {
            slidesPerView: "3",
          },
        }
      });

    </script>
</body>

</html>