<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TGM HOTAL -About</title>
    <?php require('inc/links.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    <?php require('inc/navbar.php') ?>
    <div class="my-4 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam id cupiditate
            repudiandae <br>
            culpa, dolores aspernatur repellat quaerat cum ducimus accusamus.</p>
    </div>
    <div class="container">
           <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Saepe corporis fuga aut laudantium, ipsum eligendi eos?</p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
               <img src="img/man.jpg" style="height: 300px;">
            </div>
            </div>
    </div>
    <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white shadow rouneded border-dark border-4 text-center">
                      <img src="img/r3.jpg" style="width: 170px; height: 170px;" >
                     <h5 class="text-bold mt-3">100+ Rooms</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white shadow rouneded border-dark border-4 text-center">
                      <img src="img/r3.jpg" style="width: 170px; height: 170px;" >
                     <h5 class="text-bold mt-3">200+ Customers</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white shadow rouneded border-dark border-4 text-center">
                      <img src="img/r3.jpg" style="width: 170px; height: 170px;" >
                     <h5 class="text-bold mt-3">150+ Reviews</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white shadow rouneded border-dark border-4 text-center">
                      <img src="img/r3.jpg" style="width: 170px; height: 170px;" >
                     <h5 class="text-bold mt-3">200+ Staffs</h5>
                    </div>
                </div>
            </div>
 </div>
<h3 class="my-5 text-center fx-bold h-font">MENEGEMENT TEAM</h3>
<div class="container px-4">
<div class="swiper swiper-about">
      <div class="swiper-wrapper mb-5">
        <?php 
        $about_r = selectAll('team_deteils');
        $path=ABOUT_IMG_PATH;

        while ($row = mysqli_fetch_array($about_r)) {
            echo<<<data
                  <div class="swiper-slide bg-white overflow-hidden rounded text-center">
                    <img src="$path$row[picture]" class="w-90 d-block" />
                    <h5 class="mt-2">$row[name]</h3>
                </div>
            data;
        }
        ?>
        
    </div>
    <div class="swiper-pagination">
    </div>
    
    </div>
   
</div>
<?php require('inc/footer.php')?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".swiper-about", {
        spaceBetween:40,
        pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
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