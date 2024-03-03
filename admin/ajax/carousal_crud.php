<?php
require('../inc/db_config.php');
require('../inc/ess.php');

adminLogin();
    
    if (isset($_POST["add_image"])) {

        $img_r =uploadImage($_FILES['image'],CAROUSAL_FOLDER);

        if ($img_r =='inv_img') {
         echo $img_r;
        }
        else if ($img_r == 'inv_size') {
            echo $img_r;
        }
        else if ($img_r == 'upd_faild') {
         echo $img_r;
        }
        else{
            $q = 'INSERT INTO `carousal`(`image`) VALUES (?)';
            $values = [$img_r];
            $res = insert($q, $values,'s');
            echo $res;
        }
    }
    if (isset($_POST['get_image'])) {
        $res = selectAll('carousal');

        while ($row = mysqli_fetch_array($res)) {
            $path = CAROUSAL_IMG_PATH;
               echo <<<data
                 <div class="col-md-3 mb-3">
                     <div class="card text-bg-dark">
                          <img src="$path$row[image]" class="card-img">
                         <div class="card-img-overlay text-end">
                             <button type="button" onclick="rem_image($row[sr_no])" class="btn btn-sm bg-danger"><i class="bi bi-trash3"></i> delete</button>
                          </div>
                     </div>
                  </div>
               data;
        }

    }
    if (isset($_POST['rem_image'])) {
         $frm_data=filteration($_POST);
         $values = [$frm_data['rem_image']];
         
         $pre_q ="SELECT * FROM `carousal` WHERE `sr_no`=?";
         $res = select($pre_q, $values,"i");
         $img = mysqli_fetch_assoc($res);
         
         if(deleteImage($img['image'],CAROUSAL_FOLDER)) {
          $q ="DELETE FROM `carousal` WHERE `sr_no`=?";
          $res = delete($q, $values,'i');
          echo $res;
        }
        else{
            echo "0";
        }
    }
?> 