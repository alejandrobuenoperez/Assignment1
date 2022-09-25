<?php
    session_start();
    //Redirect if logged in
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: adminPage.php");
        exit;
    }

    require_once "dbConnect.php";
    $username = $password = $userId = "";
    $loginError = "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty(trim($_POST["username"])) || empty(trim($_POST["password"]))){
            $loginError = "Username or password not defined";
        }else{
            $sqlQuery = "SELECT userId,Username, Password FROM Users WHERE Username = ?;";
            $statement = mysqli_prepare($connection,$sqlQuery);
            mysqli_stmt_bind_param($statement, "s", $usernameParam);
            $usernameParam = trim($_POST["username"]);
            $passwordParam = trim($_POST["password"]);
            mysqli_stmt_execute($statement);
            mysqli_stmt_store_result($statement);
            if(mysqli_stmt_num_rows($statement) == 1){ 
                mysqli_stmt_bind_result($statement, $userId, $username, $password);
                mysqli_stmt_fetch($statement);
                if($passwordParam===$password){
                    session_start();
                    $_SESSION["userId"] = $userId;
                    $_SESSION["loggedin"] = true;
                    $_SESSION["username"] = $username;
                    header("location: adminPage.php"); 
                }else{
                    $loginError = "Invalid user or password.";
                }
            }else{
                $loginError = "Not user found.";
            }
            mysqli_stmt_close($statement);
            mysqli_close($connection);
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