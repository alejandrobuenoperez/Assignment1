<?php
    if(!session_id()) session_start();
    $news = $_SESSION["data"];
    $q = $_REQUEST["q"];
    $countOfNews = 0;
    for($i=0;$i<=count($news)-1;$i++){
        if(strpos(strtoLower($news[$i]["Title"]), strtoLower($q)) !== false){
            $result[] = $news[$i];
            $countOfNews++;
        }
        if($countOfNews===5){
            $i= count($news);
        }
    }
    if(count($result)>0){
        header("Content-Type: application/json");
        echo json_encode($result);
    }else{
        echo "No result";    
    }
?>