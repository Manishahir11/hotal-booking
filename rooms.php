<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TGM HOTAL -Rooms</title>
    <?php require('inc/links.php') ?>
</head>

<body>
    <?php require('inc/navbar.php') ?>
    <div class="my-4 px-4">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch mt-2">
                        <h4 class="mt-2">FILITERS</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#FilterNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch" id="FilterNav">
                            <div class="bg-light p-3 border rounded mt-4 mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none">
                                <label class="form-label mt-3">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="bg-light p-3 border rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                                <div class="mb-3">
                                    <input type="checkbox" id="f1" class="form-check-input me-1 shadow-none">
                                    <label class="form-label" for="f1">Facilities one</label> <br>
                                    <input type="checkbox" id="f2" class="form-check-input me-1 shadow-none">
                                    <label class="form-label" for="f2">Facilities two</label> <br>
                                    <input type="checkbox" id="f3" class="form-check-input me-1 shadow-none">
                                    <label class="form-label" for="f3">Facilities three</label>
                                </div>
                            </div>
                            <div class="bg-light p-3 border rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Aduls</label> <br>
                                        <input type="number" class="form-control me-1 shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">childran</label> <br>
                                        <input type="number" class="form-control me-1 shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                      <div class="col-md-5 ">
                        <img src="https://media.istockphoto.com/id/1254278086/photo/mountain-rock-stone-wall-in-luxurious-apartment-master-bedroom-interior.jpg?s=1024x1024&w=is&k=20&c=Spc6SvLIrbdXj2MIPaBvfzVEUbt0s7IKTt8PaI1i9nA=" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-5 px-md-3 px-0">
                        <div class="card-body">
                          <h5 class="mb-3">Simple Room Naam</h5>
                          <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
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
                        </div>
                        

                      </div>
                      <div class="col-md-2 text-center">
                        <h6 class="mb-4 text-center">Price: ₹800 per night</h6>
                        <div class="mb-2">
                            <a href="#" class="btn btn-sm text-white w-100 custum-bg shadow-none mb-3">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark w-100 shadow-none">More details</a>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                      <div class="col-md-5 ">
                        <img src="https://media.istockphoto.com/id/1254278086/photo/mountain-rock-stone-wall-in-luxurious-apartment-master-bedroom-interior.jpg?s=1024x1024&w=is&k=20&c=Spc6SvLIrbdXj2MIPaBvfzVEUbt0s7IKTt8PaI1i9nA=" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-5">
                        <div class="card-body">
                          <h5 class="mb-3">Simple Room Naam</h5>
                          <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
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
                        </div>
                        

                      </div>
                      <div class="col-md-2 ">
                        <h6 class="mb-4 text-center">Price: ₹800 per night</h6>
                        <div class="mb-2">
                            <a href="#" class="btn btn-sm text-white w-100 custum-bg shadow-none mb-3">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark w-100 shadow-none">More details</a>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                      <div class="col-md-5 ">
                        <img src="https://media.istockphoto.com/id/1254278086/photo/mountain-rock-stone-wall-in-luxurious-apartment-master-bedroom-interior.jpg?s=1024x1024&w=is&k=20&c=Spc6SvLIrbdXj2MIPaBvfzVEUbt0s7IKTt8PaI1i9nA=" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-5">
                        <div class="card-body">
                          <h5 class="mb-3">Simple Room Naam</h5>
                          <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
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
                        </div>
                        

                      </div>
                      <div class="col-md-2 ">
                        <h6 class="mb-4 text-center">Price: ₹800 per night</h6>
                        <div class="mb-2">
                            <a href="#" class="btn btn-sm text-white w-100 custum-bg shadow-none mb-3">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark w-100 shadow-none">More details</a>
                          </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php')?>
</body>

</html>