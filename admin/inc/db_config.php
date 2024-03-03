<?php 

$hname='localhost';
$uname='root';
$pass='';
$dbname= 'tgm';
$con=mysqli_connect($hname,$uname,$pass,$dbname);
if (!$con) {
    die('connot connect to Database'.mysqli_connect_error());
}
function filteration ($data){
    foreach ($data as $key => $value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value= htmlspecialchars($value);
       
        $data[$key] =$value;
}
return $data;
}

function selectAll($table){
    $con = $GLOBALS['con'];
    $res = mysqli_query($con,"SELECT * FROM $table");
    return $res;
}
function select ($sql,$values,$datatypes){
   $con = $GLOBALS['con'];
   if ($stmt = mysqli_prepare($con,$sql))
    {
    mysqli_stmt_bind_param( $stmt,$datatypes,...$values);
    if(mysqli_stmt_execute($stmt)) {
        $res = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        return $res;
    }
    else {
        mysqli_stmt_close($stmt);
        die('query connot be executed -select');

    }
   }
   else {   
    die('query connot be prepare t') ;

}
}
function update ($sql,$values,$datatypes){
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con,$sql))
     {
     mysqli_stmt_bind_param($stmt,$datatypes,...$values);
     if(mysqli_stmt_execute($stmt)) {
        $res = mysqli_stmt_affected_rows($stmt);

         mysqli_stmt_close($stmt);
         return $res;
     }
     else {
         mysqli_stmt_close($stmt);
         die('query connot be executed -update');
 
     }
    }
    else {   
     die('query connot be prepare -update') ;
 
 }
}


function insert($sql,$values,$datatypes){
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con,$sql))
     {
     mysqli_stmt_bind_param( $stmt,$datatypes,...$values);
     if(mysqli_stmt_execute($stmt)) {
        $res = mysqli_stmt_affected_rows($stmt);
         mysqli_stmt_close($stmt);
         return $res;
     }
     else {
         mysqli_stmt_close($stmt);
         die('query connot be executed -insert');
 
     }
    }
    else {   
     die('query connot be prepare -insert') ;
 
 }
 }


 function delete ($sql,$values,$datatypes){
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con,$sql))
     {
     mysqli_stmt_bind_param($stmt,$datatypes,...$values);
     if(mysqli_stmt_execute($stmt)) {
        $res = mysqli_stmt_affected_rows($stmt);
         mysqli_stmt_close($stmt);
         return $res;
     }
     else {
         mysqli_stmt_close($stmt);
         die('query connot be executed -delete');
 
     }
    }
    else {   
     die('query connot be prepare -delete') ;
 
 }
}