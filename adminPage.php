<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        header("location: firstSample.php");
        $_SESSION["fileName"] = $_POST["file"];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
    </head>
    <body>
        <form method='POST'>
            <label>Select a file: </label>
            <input type='file' id="fileInput" accept='.json' name="file"><br>
            <input type='submit' id="btn-submit" value='Apply Changes'>
        </form>
        <a href="signOut.php">Sign out</a>
    </body>
    <script>
        var btnSubmit = document.getElementById('btn-submit');
        btnSubmit.style.display = "none";
        document.getElementById('fileInput').onchange = function () {
            btnSubmit.style.display = "block";
        };
    </script>
</html>