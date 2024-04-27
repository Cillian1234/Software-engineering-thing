<?php
global $Username, $Password;
require ('../src/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/MainStyle.css">
    <link rel="stylesheet" href="../../CSS/HomeGrid.css">
    <link rel="stylesheet" href="../../CSS/flexnav.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
    <script src="../../JavaScript/jquery.flexnav.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../../CSS/Login.css">
    <title>Log in</title>
</head>

<body>
<div class="grid-container">
    <div class="grid-item header"><h1>Log in</h1></div>
    <div class="grid-item review1">
        <form action="" method="post" name="Login_Form" class="form-signin">
            <h2 class="form-signin-heading">Please log in</h2>
            <label for="inputUsername" >Username</label>
            <input name="Username" type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
            <br>
            <label for="inputPassword">Password</label>
            <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button name="Submit" value="Login" class="button" type="submit">Log in</button>
            <p>Don't have an account? <a href="Signup.php">Sign up</a> instead.</p>
        </form>

        <?php
        session_start();
        require_once "../src/common.php";

        if(isset($_POST['Submit']))
        {
            if((escape($_POST['Username']) == $Username) && (escape($_POST['Password']) == $Password)) {
                $_SESSION['Username'] = $Username;
                $_SESSION['Active'] = true;
                header("location:Index.php");
                exit;
            } else {
                echo 'Incorrect Username or Password';
            }
        }
        ?>

    </div>
</div>
</body>
</html>


