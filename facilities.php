<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TGM HOTAL -Facilities</title>
    <?php require('inc/links.php') ?>
</head>
<style>
    .pop:hover {
        border-top-color: var(--teal) !important;
        transform: scale(1.03);
        transition: all 0.3s;
    }
</style>

<body>
    <?php require('inc/navbar.php') ?>
    <div class="my-4 px-4">
        <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam id cupiditate
            repudiandae <br>
            culpa, dolores aspernatur repellat quaerat cum ducimus accusamus.</p>
    </div>
    <div class="container">
        <div class="row">

            <?Php 
           $res = selectAll('facilities');
           $path = FACILITIES_IMG_PATH;

           while($row = mysqli_fetch_assoc($res)){
            echo<<<data
                       <div class="col-lg-4 col-md-6 mb-5 px-4">
                         <div class="bg-white rouneded shadow p-4 border-top border-4 border-dark pop">
                      <div class="d-flex align-items-center mb-3">
                        <img src="$path$row[icon]" style="width: 40px; height: 40px;">
                        <h5 class="m-0 ms-3">$row[name]</h5>
                      </div>
                        <p>$row[decs]</p>
                          </div>
                     </div>
                 data;
           }
           ?>

            
        </div>
    </div>

    <?php require('inc/footer.php')?>
</body>

</html>