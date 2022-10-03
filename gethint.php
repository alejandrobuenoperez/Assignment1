<?php
    if(!session_id()) session_start();
    require_once "dbConnect.php";
    $sqlQuery = "SELECT Title, NewId FROM News WHERE Title LIKE ? ORDER BY NewId DESC LIMIT 5;";
    $statement = mysqli_prepare($connection,$sqlQuery);
    $q ="%".$_REQUEST["q"]."%"; 
    mysqli_stmt_bind_param($statement, "s", $q);
    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }  
    }
    
    if(count($data)>0){
        header("Content-Type: application/json");
        echo json_encode($data);
    }else{
       echo "No result";    
    }
?>