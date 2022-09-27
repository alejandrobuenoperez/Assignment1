<?php
    session_start();
    require_once "dbConnect.php";
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $sqlQuery = "INSERT INTO News(Title, Image, Content) VALUES (?,?,?);";
        $insertParameters = "";
        $jsonContent = "";
        $_SESSION["fileName"] = $_POST["file"];
        $fileName = $_POST["file"];
        $jsonContent = file_get_contents("NewsText/{$fileName}");
        $jsonDecoded = json_decode($jsonContent, true);
        $statement = mysqli_prepare($connection,$sqlQuery);
        $title = $image = $content ="";
        mysqli_stmt_bind_param($statement, "sss", $title,$image,$content);
        for($i=0;$i<=count($jsonDecoded["news"])-1;$i++){
            $title = $jsonDecoded["news"][$i]["title"];
            $image = $jsonDecoded["news"][$i]["imgurl"];
            $content = $jsonDecoded["news"][$i]["content"];
            mysqli_stmt_execute($statement);
        }
        mysqli_stmt_close($statement);
        mysqli_close($connection);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="StylesLogin.css"type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="divCentral">
                <form method='POST'>
                    <label>Select a file: </label>
                    <input type='file' id="fileInput" accept='.json' name="file"><br>
                    <input type='submit' id="btn-submit" value='Upload file'>
                </form>
                <a href="signOut.php">Sign out</a>
            </div>
        </div>
    </body>
    <script>
        var btnSubmit = document.getElementById('btn-submit');
        btnSubmit.style.display = "none";
        document.getElementById('fileInput').onchange = function () {
            btnSubmit.style.display = "block";
        };
    </script>
</html>