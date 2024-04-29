<!-- Does not require header template -->

<?php
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

//      When form is submitted
        if(isset($_POST['Submit']))
        {
        // Sanitise entered info
        $Username = (escape($_POST['Username']));
        $Password = (escape($_POST['Password']));

            // Check to see if that username exists in DB
            try {
                $sql = "SELECT * FROM users WHERE Username = :Username";
                $statement = $connection->prepare($sql);
                $statement->bindParam(':Username', $Username, PDO::PARAM_STR);
                $statement->execute();
                $result = $statement->fetch();
            } catch(PDOException $error) {
                echo $sql . "<br>" . $error->getMessage();
            }

            // If it does and the password is correct with that entry of the username
            // Grab all info used elsewhere and store it in session variables and set password variable to null
            if ($result && password_verify($Password, $result['password'])) {
                $Password = null;
                $_SESSION['Username'] = $result['username'];
                $_SESSION['userID'] = $result['id'];
                $_SESSION['userEmail'] = $result['email'];
                $_SESSION['userAge'] = $result['age'];
                $_SESSION['userLocation'] = $result['location'];
                $_SESSION['Active'] = true;
                header("location:Index.php");
                exit;
            } else {
                // Else display error
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
            <!--link to sign up instead-->
            <p>Don't have an account? <a href="Signup.php">Sign up</a> instead.</p>
        </form>

    </div>
</div>
</body>
</html>


