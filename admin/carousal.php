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
                <h3 class="mb-3">Carousal</h3>
              
        

                <div class="card border-0 shadow-sm mb-2">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Image </h5>
                            <button type="button" class="btn btn-sm bg-dark text-white" data-bs-toggle="modal"
                                data-bs-target="#carousal-s">
                                <i class="bi bi-file-plus-fill"></i> Add Image
                            </button>
                        </div>
                        <div class="row" id="carousal-data">
                           
                            </div>

                        </div>
                    </div>
                    <!--Teaml settings Modal -->
                    <div class="modal fade" id="carousal-s" data-bs-backdrop="static" data-bs-keyboard="true"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form id="carousal_s_form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Add Image</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">Image</label>
                                            <input type="file" accept=".jpg, .png, .jpeg, .webp" name="carousal_img"
                                                id="carousal_img_inp" class="form-control shadow-none" required>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="carousal_img_inp.value=''" class="btn text-secondary shadow-none"
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
        <script src="script/carousal.js"></script>
</body>

</html>