<?php 
require('inc/ess.php');
require('inc/db_config.php');
adminLogin();

if (isset($_GET['seen'])) {
$frm_data = filteration($_GET);

if($frm_data['seen']== 'all'){
    $q="UPDATE `users_query` SET `seen`=?";
    $values= [1];
    if(update($q,$values,'i')) {
      alert('success','Marked as read!');
    }
    else {
        alert('error','Operation failed!');
    }
} 
else {
$q="UPDATE `users_query` SET `seen`=? WHERE `sr_no`=?";
$values= [1,$frm_data['seen']];
if(update($q,$values,'ii')) {
  alert('success','Marked all read!');
}
else {
    alert('error','Operation failed!');
}

}
}
if (isset($_GET['del'])) {
    $frm_data = filteration($_GET);
    
    if($frm_data['del']== 'all'){
        $q="DELETE FROM `users_query`";
        $values= [$frm_data['del']];
        if(mysqli_query($con,$q)) {
            alert('success',' All Data Deleted!');
        }
        else {
            alert('error','Operation failed!');
        }
    } 
    else {
    $q="DELETE FROM `users_query` WHERE `sr_no`=?";
    $values= [$frm_data['del']];
    if(delete($q,$values,'i')) {
        alert('success',' Data Deleted!');
    }
    else {
        alert('error','Operation failed!');
    }
    
    }
    }
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
                <h3 class="mb-3">Users query</h3>



                <div class="card border-0 shadow-sm mb-2" style="height: 450px; overflow-y:scroll;">
                    <div class="card-body">
                        <div class="text-end mb-2">
                        <a href="?seen=all" class="btn rounded-pill btn-dark btn-sm">Mark all read</a>
                            <a href="?del=all" class="btn rounded-pill btn-danger btn-sm">Delete all</a>
                        </div>
                        <div class="table-responsive-md">
                            <table class="table table-hover border">
                                <thead class="stikcy-top">
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col" width="20%">Subject</th>
                                        <th scope="col" width="30%">Message</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $q ="SELECT * FROM `users_query` ORDER BY  `sr_no`DESC";
                                    $data= mysqli_query($con, $q); 
                                    $i =1; 
                                    while ($row=mysqli_fetch_assoc($data)) {
                                         $seen=""; 
                                         if ($row['seen']!=1) {
                                          $seen= "<a href='?seen=$row[sr_no]' class='btn rounded-pill btn-primary btn-sm mb-2'>Mark us read</a><br>
                                         ";
                                         }
                                         $seen.=" <a href='?del=$row[sr_no]' class='btn rounded-pill btn-danger btn-sm'>Delete</a>";
                                        
                                        echo<<<query
                                             <tr>
                                                <td>$i</td>
                                                <td>$row[name]</td>
                                                <td>$row[email]</td>
                                                <td>$row[subject]</td>
                                                <td>$row[message]</td>
                                                <td>$row[date]</td>
                                                <td>$seen</td>
                                                </tr>
                                          query;
                                          $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php require('inc/scripts.php');?>
</body>

</html>