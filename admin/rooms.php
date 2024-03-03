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
                <h3 class="mb-3">ROOMS</h3>
                <div class="card border-0 shadow-sm mb-2" style="height: 650px; overflow-y:scroll;">

                    <div class="card-body">
                        <div class="text-end mb-4">

                            <button type="button" class="btn btn-sm bg-dark text-white" data-bs-toggle="modal"
                                data-bs-target="#add-room">
                                <i class="bi bi-plus-square"></i>Add
                            </button>
                        </div>

                        <div class="table-responsive-md">
                            <table class="table table-hover border">
                                <thead>
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Area</th>
                                        <th scope="col">Guests</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Stutas</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="room-data">

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="add-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="add_room_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add Room</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="Name" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Area</label>
                                <input type="number" min="1" name="Area" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Price</label>
                                <input type="number" min="1" name="Price" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Quantity</label>
                                <input type="number" min="1" name="Quantity" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Adult</label>
                                <input type="number" min="1" name="Adult" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Children</label>
                                <input type="number" min="1" name="Children" class="form-control shadow-none" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Features</label>
                                <div class="row">
                                    <?php 
                                    $res= selectAll('features');
                                    while ($opt = mysqli_fetch_assoc($res)) {
                                          echo"
                                          <div class='col-md-3'>
                                              <label class='form-label'>
                                              <input type='checkbox' value='$opt[id]' name='features' class='form-check-input'>
                                              $opt[name]
                                              </label>
                                         </div>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Facilities</label>
                                <div class="row">
                                    <?php 
                                    $res= selectAll('facilities');
                                    while ($opt = mysqli_fetch_assoc($res)) {
                                          echo"
                                             <div class='col-md-3'>
                                                <label class='form-label'>
                                              <input type='checkbox' value='$opt[id]' name='facilities' class='form-check-input'>
                                              $opt[name]
                                                </label>
                                             </div>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="desc" class="form-control shadow-none" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn custom-bg shadow-none">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- edit-modal -->
    
    <div class="modal fade" id="edit-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="edit_room_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Room</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="Name" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Area</label>
                                <input type="number" min="1" name="Area" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Price</label>
                                <input type="number" min="1" name="Price" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Quantity</label>
                                <input type="number" min="1" name="Quantity" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Adult</label>
                                <input type="number" min="1" name="Adult" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Children</label>
                                <input type="number" min="1" name="Children" class="form-control shadow-none" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Features</label>
                                <div class="row">
                                    <?php 
                                    $res= selectAll('features');
                                    while ($opt = mysqli_fetch_assoc($res)) {
                                          echo"
                                          <div class='col-md-3'>
                                              <label class='form-label'>
                                              <input type='checkbox' value='$opt[id]' name='features' class='form-check-input'>
                                              $opt[name]
                                              </label>
                                         </div>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Facilities</label>
                                <div class="row">
                                    <?php 
                                    $res= selectAll('facilities');
                                    while ($opt = mysqli_fetch_assoc($res)) {
                                          echo"
                                             <div class='col-md-3'>
                                                <label class='form-label'>
                                              <input type='checkbox' value='$opt[id]' name='facilities' class='form-check-input'>
                                              $opt[name]
                                                </label>
                                             </div>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="desc" class="form-control shadow-none" rows="2"></textarea>
                            </div>
                            <input type="hidden" name="room_id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn custom-bg shadow-none">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <?php require('inc/scripts.php');?>

    <script>
        let add_room_form = document.getElementById('add_room_form');

        add_room_form.addEventListener('submit', function (e) {
            e.preventDefault();
            add_room();
        });

        function add_room() {
            let data = new FormData();
            data.append('add_room', '');
            data.append('Name', add_room_form.elements['Name'].value);
            data.append('Area', add_room_form.elements['Area'].value);
            data.append('Price', add_room_form.elements['Price'].value);
            data.append('Quantity', add_room_form.elements['Quantity'].value);
            data.append('Adult', add_room_form.elements['Adult'].value);
            data.append('Children', add_room_form.elements['Children'].value);
            data.append('desc', add_room_form.elements['desc'].value);
            
            let facilities = [];
            add_room_form.elements['facilities'].forEach(el => {
                if (el.checked) {
                    facilities.push(el.value);
                }
            });
            let features = [];

            add_room_form.elements['features'].forEach(el => {
                if (el.checked) {
                    features.push(el.value);
                }
            });
           

            data.append('features', JSON.stringify(features));
            data.append('facilities', JSON.stringify(facilities));

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);


            xhr.onload = function () {

                var myModal = document.getElementById('add-room')
                var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
                modal.hide();
                if (this.responseText == 1) {
                    alert('success', 'new room added');
                    add_room_form.reset();
                    get_all_rooms();
                }

                else {
                    alert('error', 'Server down!');
                }
            }
            xhr.send(data);

        }

        function get_all_rooms() 
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


            xhr.onload = function () {

                document.getElementById('room-data').innerHTML = this.responseText;
            }
            xhr.send('get_all_rooms');
        }

        let edit_room_form = document.getElementById('edit_room_form');
        function edit_details(id)
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


            xhr.onload = function () {

                 let data = JSON.parse(this.responseText); 
                 edit_room_form.elements['Name'].value =data.roomdata.name;
                 edit_room_form.elements['Area'].value =data.roomdata.area;
                 edit_room_form.elements['Price'].value =data.roomdata.price;
                 edit_room_form.elements['Quantity'].value =data.roomdata.quantity;
                 edit_room_form.elements['Adult'].value =data.roomdata.adult;
                 edit_room_form.elements['Children'].value =data.roomdata.children;
                 edit_room_form.elements['desc'].value =data.roomdata.description;
                 edit_room_form.elements['room_id'].value =data.roomdata.id;

   
                 edit_room_form.elements['features'].forEach(el => {
                    if (data.features.includes(Number(el.value))) {
                        el.checked = true;
                    }
                  });
                  edit_room_form.elements['facilities'].forEach(el => {
                    if (data.facilities.includes(Number(el.value))) {
                        el.checked = true;
                    }
                  });
            }
            xhr.send('get_room='+id);

        }


        edit_room_form.addEventListener('submit', function (e) {
            e.preventDefault();
            submit_edit_room();
        });

        function submit_edit_room(){
            let data = new FormData();
            data.append('edit_room', '');
            data.append('room_id', edit_room_form.elements['room_id'].value);
            data.append('Name', edit_room_form.elements['Name'].value);
            data.append('Area', edit_room_form.elements['Area'].value);
            data.append('Price', edit_room_form.elements['Price'].value);
            data.append('Quantity', edit_room_form.elements['Quantity'].value);
            data.append('Adult', edit_room_form.elements['Adult'].value);
            data.append('Children', edit_room_form.elements['Children'].value);
            data.append('desc', edit_room_form.elements['desc'].value);


            let features = [];

            edit_room_form.elements['features'].forEach(el => {
                if (el.checked) {
                    features.push(el.value);
                }
            });
            let facilities = [];
            edit_room_form.elements['facilities'].forEach(el => {
                if (el.checked) {
                    facilities.push(el.value);
                }
            });

            data.append('features', JSON.stringify(features));
            data.append('facilities', JSON.stringify(facilities));

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);


            xhr.onload = function () {

                var myModal = document.getElementById('edit-room')
                var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
                modal.hide();
                if (this.responseText == 1) {
                    alert('success', 'Room data edited!');
                    edit_room_form.reset();
                    get_all_rooms();
                }

                else {
                    alert('error', 'Server down!');
                }
            }
            xhr.send(data);

        }
        function toggle_stutas(id, val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/rooms.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
               if(this.responseText ==1){
                alert('success','stutas toggle');
                get_all_rooms();

               }
               else{
                alert('error','Server down!');

               }
            }
            xhr.send('toggle_stutas='+id+'&value='+val);
        }
        
        window.onload = function () {
            get_all_rooms();
        }
    </script>
</body>

</html>