<?php
require('inc/ess.php');
require('inc/db_config.php');

session_start();
    if((isset($_SESSION["adminLogin"]) && $_SESSION["adminLogin"] ==true)) {
       redirect("dashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require('inc/links.php'); ?>
</head>
<style>
    .login-form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
    }
</style>

<body class="bg-light">
    <div class="login-form text-center rounded overflow-hidden bg-white shadow">
        <h4 class="text-white bg-dark rounded overflow-hidden mb-2 py-2">Admin panel</h4>
        <form method="POST">
            <div class="p-4">
                <div class="mb-3">
                    <input type="text" required name="admin_name" class="form-control shadow-none text-center" placeholder="name">
                </div>
                <div class="mb-3">
                    <input type="password" required name="admin_pass" class="form-control shadow-none text-center" placeholder="password">
                </div>
                <button class="btn text-white custom-bg text-center" name="login" type="submit">LOGIN</button>
            </div>
        </form>
    </div>
    <?php 
    if(isset($_POST['login'])) {
        $frm_data= filteration($_POST);
        
        $query = "SELECT * FROM  `admin_tgm` WHERE `admin_name`=? AND `admin_pass`=?";
        $values = [$frm_data['admin_name'], $frm_data['admin_pass']];
        $datatypes ="ss";

         $res =select($query, $values, $datatypes);
         if($res->num_rows==1) {
            $row = mysqli_fetch_assoc($res);
            
            $_SESSION["adminLogin"] = true;
            $_SESSION["adiminid"] = $row["sr_no"];
            redirect('dashboard.php') ;
         }
         else {
            alert('error','login failed - invalid credentials');
         }
        //  print_r($res);
    }
    
    ?>

    <?php require('inc/scripts.php'); ?>
</body>

</html>