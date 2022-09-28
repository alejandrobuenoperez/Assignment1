<?php
    $json = file_get_contents('php://input');
    echo "json" .$json;
    $data = json_decode($json, true);
    echo 'a' .$data;
?>
<!DOCTYPE html>
<head>
    <title>New Page</title>
    <link rel="stylesheet" href="StylesNewPage.css" type="text/css">
</head>
<body>
    <div class="container">
        <?php
               echo "<h2 class=\"title\">{$data["Title"]}</h2>
               <img class=\"image\" src=\"{$data["Image"]}\">
               <p class=\"content\">{$data["Content"]}</p>"
        ?>
    </div>
</body>
</html>