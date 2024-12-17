<?php

include('database.php');
$db=$conn;// database connection  

//legal input values
 $roomname = legal_input($_POST['roomname']);
 $roomtype = legal_input($_POST['roomtype']);
 $roomdetail = legal_input($_POST['roomdetail']);
   
if(!empty($roomname) && !empty($roomtype) && !empty($roomdetail)){
    //  Sql Query to insert user data into database table
    Insert_data($roomname,$roomtype,$roomdetail);
}else{
 echo "All fields are required";
}
 
// convert illegal input value to ligal value formate
function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

// // function to insert user data into database table
 function insert_data($roomname,$roomtype, $roomdetail){
 
     global $db;

      $query="INSERT INTO tbroom VALUES(null,'$roomname','$roomdetail','$roomtype')";

     $execute=mysqli_query($db,$query);
     if($execute==true)
     {
       echo "Room data was inserted successfully";
       echo "<META HTTP-EQUIV='refresh' CONTENT='3;'>";
     }
     else{
      echo  "Error: " . $sql . "<br>" . mysqli_error($db);
     }
 }

?>