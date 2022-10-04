<?php
        require_once "dbConnect.php";
        $sql = "SELECT NewId, Title, Image, Content FROM News WHERE NewId = ?;";
        $statement = mysqli_prepare($connection,$sql);
        mysqli_stmt_bind_param($statement, "s", $q);
        $q = $_REQUEST["q"];    
        mysqli_stmt_execute($statement);
        mysqli_stmt_store_result($statement);
    if (mysqli_stmt_num_rows($statement) > 0) {
        mysqli_stmt_bind_result($statement, $NewId, $Title,$Image, $Content);
        mysqli_stmt_fetch($statement); 
    }
?>
<!DOCTYPE html>
<head>
    <title>New Page</title>
    <link rel="stylesheet" href="StylesNewPage.css" type="text/css">
</head>
<body>
    <div class="container">
        <?php
               echo "<h2 class=\"title\">{$Title}</h2>
               <img class=\"image\" src=\"{$Image}\">
               <p class=\"content\">{$Content}</p>"
        ?>
        <a href="firstSample.php">Main page</a>
    </div>
</body>
</html>