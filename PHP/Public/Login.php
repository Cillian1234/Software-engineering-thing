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
        <?php
        session_start();
        require_once "../src/common.php";
        require_once '../src/DBconnect.php';

        if(isset($_POST['Submit']))
        {
        $Username = (escape($_POST['Username']));
        $Password = (escape($_POST['Password']));

            try {
                $sql = "SELECT id, username, password FROM users WHERE Username = :Username";
                $statement = $connection->prepare($sql);
                $statement->bindParam(':Username', $Username, PDO::PARAM_STR);
                $statement->execute();
                $result = $statement->fetch();
            } catch(PDOException $error) {
                echo $sql . "<br>" . $error->getMessage();
            }

            if ($result && password_verify($Password, $result['password'])) {
                $_SESSION['Username'] = $result['username'];
                $_SESSION['Active'] = true;
                header("location:Index.php");
                exit;
            } else {
                $error = "Invalid username or password, try sign up instead";
            }
        }
        ?>

    <div class="grid-item header"><h1>Log in</h1></div>
    <div class="grid-item review1">
        <?php if (isset($error)) echo "<p>$error</p>"; ?>
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

    </div>
</div>
</body>
</html>


