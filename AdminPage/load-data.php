<?php
    include_once 'php/database.php';
    $recordNewCount     =       $_GET['count'];

    $sql                 =       "SELECT * FROM booking limit $recordNewCount";
    $result              =       mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
           $data   =   mysqli_fetch_all($result,MYSQLI_ASSOC);
           echo json_encode($data);
       }       
 ?>