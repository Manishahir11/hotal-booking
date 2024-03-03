<?php 
require('inc/ess.php');
require('inc/db_config.php');
adminLogin();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel -user query</title>
    <?php 
        require('inc/links.php');
        ?>
</head>

<body class="bg-light">
    <?php require('inc/hearder.php');?>
    <div class="container-fluid" id="main-contant">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4">
                <h3 class="mb-3">Features & Facilities</h3>



                <div class="card border-0 shadow-sm mb-3" style="height: 350px; overflow-y:scroll;">
                    
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Features</h5>
                            <button type="button" class="btn btn-sm bg-dark text-white" data-bs-toggle="modal"
                                data-bs-target="#features-st">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>

                        <div class="table-responsive-md">
                            <table class="table table-hover border">
                                <thead class="stikcy-top">
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="features-data" >
                                   
                                </tbody>
                            </table>
                        </div>

                    </div>
                        
                    
                </div>

                <div class="card border-0 shadow-sm mb-2" style="height: 350px; overflow-y:scroll;">
                    
                      <div class="card-body">
                         <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Fasilities</h5>
                            <button type="button" class="btn btn-sm bg-dark text-white" data-bs-toggle="modal"
                                data-bs-target="#facilities-st">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                          </div>

                          <div class="table-responsive-md">
                            <table class="table table-hover border">
                                <thead>
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">icon</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="fasilities-data">
                                   
                                </tbody>
                            </table>
                          </div>

                      </div>
                        
                    
                </div>

            </div>
        </div>
     </div>

     <div class="modal fade" id="features-st" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="features_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Add Features</h5>
                                </div>
                                <div class="modal-body">

                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="features_name" id="site_title_inp"
                                            class="form-control shadow-none" required>
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="reset"
                                        class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg shadow-none" onclick="">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
     </div>

     <div class="modal fade" id="facilities-st" data-bs-backdrop="static" data-bs-keyboard="true"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form id="fasilities_s_form">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Add Team Member</h5>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="facility_name" 
                                        class="form-control shadow-none" required>
                                        
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">icon</label>
                                    <input type="file" accept=".png" name="facility_icon"
                                        class="form-control shadow-none" >
                               </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Desciption</label>
                                    <textarea class="form-control shadow-none"  name="facility_desc"
                                        rows="3" required></textarea>
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
    <?php require('inc/scripts.php');?>

    <script src="script/features_facilities.js"></script>
</body>

</html>