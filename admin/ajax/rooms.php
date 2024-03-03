<?php
require('../inc/db_config.php');
require('../inc/ess.php');

adminLogin();
  


if(isset($_POST['add_room'])){
    $features = filteration(json_decode($_POST['features']));
    $facilities = filteration(json_decode($_POST['facilities']));
    $frm_data = filteration($_POST);
    $flag = 0;
    
 

    $q1= "INSERT INTO `rooms`(`name`, `area`, `price`, `quantity`, `adult`, `children`, `description`) VALUES (?,?,?,?,?,?,?)";
    $values=[$frm_data['Name'],$frm_data['Area'],$frm_data['Price'],$frm_data['Quantity'],$frm_data['Adult'],$frm_data['Children'],$frm_data['desc']];


    if(insert($q1,$values,'siiiiis')){
        $flag = 1;
    }



    $room_id = mysqli_insert_id($con);

    $q2 = "INSERT INTO `room_facilities`(`room_īd`, `facilities_id`) VALUES (?,?)";

    if($stmt = mysqli_prepare($con,$q2)){
        foreach($facilities as $f){
            mysqli_stmt_bind_param($stmt,'ii',$room_id,$f);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
    }
    else{
        $flag = 0;
        die('quary not prepared --insart');
    }


    $q3 = "INSERT INTO `room_features`(`room_īd`, `features_id`) VALUES (?,?)";

    if($stmt = mysqli_prepare($con,$q3)){
        foreach($features as $f){
            mysqli_stmt_bind_param($stmt,'ii',$room_id,$f);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
    }
    else{
        $flag = 0;
        die('quary not prepared --insart');
    }
    
    if($flag){
        echo 1;
    }
    else{
        echo 0;
    }
}

if(isset($_POST['get_all_rooms'])){
   $res = selectAll('rooms');
   $i =1;

   $data ="";

  
   
   
   while($row =mysqli_fetch_assoc($res)){

    if($row['stutas']==1){
        $stutas = "<button onclick='toggle_stutas($row[id],0)' class='btn custom-bg shadow-none'>active</button>";
    }
    else{
        $stutas = "<button onclick='toggle_stutas($row[id],1)' class='btn btn-warning shadow-none'>inactive</button>";
    }

    $data.="
    <tr class= 'align-middle'>
       <td>$i</td>
       <td>$row[name]</td>
       <td>$row[area] Sq.ft.</td>
       <td>
       <span  class= 'bagde rounded-pill bg-light text-dark'>
       Adult:$row[adult]
       </span> <br>
       <span  class= 'bagde rounded-pill bg-light text-dark'>
       Children:$row[children]
       </span>
       </td>
       <td>₹$row[price]</td>
       <td>$row[quantity]</td>
       <td>$stutas</td>
       <td><button type='button' onclick='edit_details($row[id])' class='btn btn-sm bg-primary text-white' data-bs-toggle='modal'
       data-bs-target='#edit-room'>
       <i class='bi bi-pencil-square'></i></button></td>
    </tr>
    ";
    $i++;
   }
   echo $data;

}

if(isset($_POST['get_room'])){
    $frm_data =filteration($_POST);

    $res1 = select("SELECT * FROM `rooms` WHERE `id`=?",[$frm_data['get_room']],'i');
    $res3 = select("SELECT * FROM `room_features` WHERE `room_īd`=?",[$frm_data['get_room']],'i');
    $res2 = select("SELECT * FROM `room_facilities` WHERE `room_īd`=?",[$frm_data['get_room']],'i');

    $roomdata = mysqli_fetch_assoc($res1);
 
    $facilities = [];
    
    if(mysqli_num_rows($res2)>0)
    {
        while($row = mysqli_fetch_assoc($res2) ){
            array_push($facilities,$row['facilities_id']);
        }
    }
    
    $features = [];
    if(mysqli_num_rows($res3)>0)
    {
      while($row = mysqli_fetch_assoc($res3) ){
      array_push($features,$row['features_id']);
      }
    }
  
    $data =["roomdata" => $roomdata,"facilities" =>$facilities,"features" =>$features];
    $data =json_encode($data);

    echo $data;
 }



 if(isset($_POST['edit_room'])){

    $features = filteration(json_decode($_POST['features']));
    $facilities = filteration(json_decode($_POST['facilities']));
    $frm_data = filteration($_POST);
    $flag = 0;
    
 

    $q1= "UPDATE `rooms` SET`name`=?,`area`=?,`price`=?,`quantity`=?,`adult`=?,`children`=?,`description`=? WHERE `id`=?";
    $values=[$frm_data['Name'],$frm_data['Area'],$frm_data['Price'],$frm_data['Quantity'],$frm_data['Adult'],$frm_data['Children'],$frm_data['desc'],$frm_data['room_id']];


    if(update($q1,$values,'siiiiisi')){
        $flag = 1;
    }
    $del= "DELETE FROM `room_features` WHERE `room_īd`=?";
    $del_features = delete ($del, [$frm_data['room_id']],'i');
    $del_facilities = delete ("DELETE FROM `room_facilities` WHERE `room_īd`=?", [$frm_data['room_id']], 'i');

    if(!($del_features && $del_facilities)){
        $flag = 0;
    }

    $q2 = "INSERT INTO `room_facilities`(`room_īd`, `facilities_id`) VALUES (?,?)";

    if($stmt = mysqli_prepare($con,$q2)){
        foreach($facilities as $f){
            mysqli_stmt_bind_param($stmt,'ii',$frm_data['room_id'],$f);
            mysqli_stmt_execute($stmt);
        }
        $flag= 1;
        mysqli_stmt_close($stmt);
    }
    else{
        $flag = 0;
        die('quary not prepared --insart');
    }


    $q3 = "INSERT INTO `room_features`(`room_īd`, `features_id`) VALUES (?,?)";

    if($stmt = mysqli_prepare($con,$q3)){
        foreach($features as $f){
            mysqli_stmt_bind_param($stmt,'ii',$frm_data['room_id'],$f);
            mysqli_stmt_execute($stmt);
        }
        $flag= 1;
        mysqli_stmt_close($stmt);
    }
    else{
        $flag = 0;
        die('quary not prepared --insart');
    }

    
 }
?> 