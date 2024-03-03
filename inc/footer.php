    <!-- Footer -->
    <div class="container-fluid bg-white shadow m-0 mt-5">
      <div class="row">
        <div class="col-lg-4 p-4">
          <h3 class="h-font fw-bold fs-3 mb-2">TGM Hotal</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Soluta dignissimos eligendi at laborum natus aliquid error,
            vero quisquam commodi voluptates blanditiis est
            eveniet porro atque dicta nostrum quam consequuntur veritatis.
          </p>
        </div>
        <div class="col-lg-4 p-4">
          <h5 class="mb-3 h-font fw-bold fs-3">links</h5>
          <a class="d-inline-block mb-3 text-dark text-decoration-none " href="index.php">Home</a><br>
          <a class="d-inline-block mb-3 text-dark text-decoration-none " href="rooms.php">Rooms</a><br>
          <a class="d-inline-block mb-3 text-dark text-decoration-none " href="facilites.php">facilite</a><br>
          <a class="d-inline-block mb-3 text-dark text-decoration-none " href="contact.php">contact us</a><br>
          <a class="d-inline-block mb-3 text-dark text-decoration-none " href="about.php">About</a>
        </div>
        <div class="col-lg-4 p-3">
          <h5 class=" mb-3 h-font fw-bold fs-3">Follow Us</h5>
          <?php 
          if($contact_r['tw']!=""){
            echo<<<data
                  <a href="$contact_r[tw]" class="d-inline-block mb-3">
                  <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-twitter me-1"></i>Twitter
                  </span>
                </a> <br>
            data;
          }
          
          ?>
          
          <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-1"></i>Instagaram
            </span>
          </a> <br>
          <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block ">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-1"></i>Facebook
            </span>
          </a>

        </div>
      </div>
    </div>
    <h6 class="bg-dark text-white p-3 m-0 text-center w-100">Designed and Developed by Manish Ambaliya</h6>
    <h6 class="bg-dark text-white m-0 text-center w-100"><i class="fa fa-copyright" aria-hidden="true"></i>copyright 2024</h6>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>

      <script>

        function setActive(){
          let navbar =document.getElementById('nav-bar');
        let a_tags =navbar.getElementsByTagName('a');

        for(i=0;i<a_tags.length;i++){
          let file = a_tags[i].href.split('/').pop();
          let file_name = file.split('.')[0];

          if(document.location.href.indexOf(file_name)>=0){
            a_tags[i].classList.add('active')

          }
        

        }
        }
        setActive();
      </script>