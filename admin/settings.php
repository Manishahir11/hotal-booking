<?php 
require('inc/ess.php');
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel -Settings</title>
    <?php 
        require('inc/links.php');
        ?>
</head>

<body class="bg-light">
    <?php require('inc/hearder.php');?>
    <div class="container-fluid" id="main-contant">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4">
                <h3 class="mb-3">Settings</h3>
                <!-- general settings section -->

                <div class="card border-0 shadow-sm mb-2">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-sm bg-dark text-white" data-bs-toggle="modal"
                                data-bs-target="#general-st">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>

                        <h6 class="card-subtitle mb-1 fw-bold">Site title</h6>
                        <p class="card-text" id="site_title">content.</p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about">content.</p>

                    </div>
                </div>
                <!--general settings Modal -->
                <div class="modal fade" id="general-st" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="genetal_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">General Settings</h5>
                                </div>
                                <div class="modal-body">

                                    <div class="mb-3">
                                        <label class="form-label">Site title</label>
                                        <input type="text" name="site_title" id="site_title_inp"
                                            class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">About US</label>
                                        <textarea class="form-control shadow-none" id="site_about_inp" name="site_about"
                                            rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button"
                                        onclick="site_title.value=general_data.site_title, site_about.value=general_data.site_about"
                                        class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg shadow-none" onclick="">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--general shutdown site -->
                <div class="card border-0 shadow-sm mb-2">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <form>
                                    <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox"
                                        id="shutdonw-toggle">
                                </form>
                            </div>
                        </div>
                        <p class="card-text">No customers will be allowed to book hotal rooms, when shutdown mode is
                            turned on. </p>
                    </div>
                </div>
                <!-- contacts details section -->

                <div class="card border-0 shadow-sm mb-2">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Contacts Settings</h5>
                            <button type="button" class="btn btn-sm bg-dark text-white" data-bs-toggle="modal"
                                data-bs-target="#contacts-s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Call us</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-telephone"></i>
                                        <span id="pn1">+</span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone"></i>
                                        <span id="pn2">+c</span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                    <p class="card-text" id="email"></p>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">social Links</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-facebook me-1"></i>
                                        <span id="fb"></span>
                                    </p>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-instagram me-1"></i>
                                        <span id="insta"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-twitter"></i>
                                        <span id="tw"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">iframe</h6>
                                    <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- contacts settings Modal -->
                <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contacts_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Contacts Settings</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Address</label>
                                                <input type="text" name="address" id="address_inp"
                                                    class="form-control shadow-none" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Google map</label>
                                                <input type="text" name="gmap" id="gmap_inp"
                                                    class="form-control shadow-none" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">call us</label>

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i
                                                            class="bi bi-telephone"></i></span>
                                                    <input type="number" name="pn1" id="pn1_inp"
                                                        class="form-control shadow-none" required>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i
                                                            class="bi bi-telephone"></i></span>
                                                    <input type="number" name="pn2" id="pn2_inp"
                                                        class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">E-mail</label>
                                                <input type="email" name="site_email" id="email_inp"
                                                    class="form-control shadow-none" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Social links</label>

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                                                    <input type="text" name="fb" id="fb_inp"
                                                        class="form-control shadow-none" required>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i
                                                            class="bi bi-instagram"></i></span>
                                                    <input type="text" name="fb" id="insta_inp"
                                                        class="form-control shadow-none" required>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-twitter"></i></span>
                                                    <input type="text" name="tw" id="tw_inp"
                                                        class="form-control shadow-none">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">iframe</label>
                                                <input type="text" name="iframe" id="iframe_inp"
                                                    class="form-control shadow-none" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="contacts_inp(contacts_data)"
                                        class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg shadow-none" onclick="">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Management Team section -->

                <div class="card border-0 shadow-sm mb-2">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Management Team </h5>
                            <button type="button" class="btn btn-sm bg-dark text-white" data-bs-toggle="modal"
                                data-bs-target="#management-s">
                                <i class="bi bi-file-plus-fill"></i> Add
                            </button>
                        </div>
                        <div class="row" id="team-data">
                           
                            </div>

                        </div>
                    </div>
                    <!--Teaml settings Modal -->
                    <div class="modal fade" id="management-s" data-bs-backdrop="static" data-bs-keyboard="true"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form id="team_s_form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Add Team Member</h5>
                                    </div>
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="member_name" id="member_name_inp"
                                                class="form-control shadow-none" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Picture</label>
                                            <input type="file" accept=".jpg, .png, .jpeg, .webp" name="member_picture"
                                                id="member_pic_inp" class="form-control shadow-none" required>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="member_name_inp.value='',member_pic_inp.value=''" class="btn text-secondary shadow-none"
                                            data-bs-dismiss="modal">CANCEL</button>
                                        <button type="submit" class="btn custom-bg shadow-none">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require('inc/scripts.php');?>
        <script src="script/settings.js"></script>
</body>

</html>