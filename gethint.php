<?php
    if(!session_id()) session_start();
    $news = $_SESSION["data"];
    $result = "";
    $q = $_REQUEST["q"];
    $countOfNews = 0;
    for($i=0;$i<=count($news)-1;$i++){
        if(strpos(strtoLower($news[$i]["Title"]), strtoLower($q)) !== false){
            $result .= $news[$i]["Title"] ." %%%%%%%";
            $countOfNews++;
        }
        if($countOfNews===5){
            $i= count($news);
        }
    }
    echo "Results: " .$result;
?>