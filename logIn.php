<?php
    session_start();
    //Redirect if logged in
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: adminPage.php");
        exit;
    }
    $username =  "";
    $loginError = "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty(trim($_POST["username"])) || empty(trim($_POST["password"]))){
            $loginError = "Username or password not defined";
        }else{
            $username=$_POST["username"];
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            header("location: adminPage.php"); 
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Admin LogIn
        </title>
        <link rel="stylesheet" href="StylesLogin.css"type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="divCentral">
                <h1>Sign In</h1>
                <p>For admins only</p>
                <form method="POST">
                    <label >Username</label>
                    <input type="text" name="username"><br>
                    <label>Password</label>
                    <input type="password" id = "password"name ="password"><br/>
                    <input type="submit" id="buttonSubmit" value="LogIn">
                </form>
                <?php
                    if(!empty($loginError)){
                        echo "<div class=\"errorTextDiv\">
                        <p id=\"errorText\">{$loginError}</p>
                        </div>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>