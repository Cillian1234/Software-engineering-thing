<!-- Does not require header template -->


<!--DB populated with user "Tim" with password 1-->
<!-- Test case = correct login credentials -->
<!-- Expected outcome = success -->




<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
    require_once "../../PHP/src/common.php";
    require_once '../../PHP/src/DBconnect.php';

    // When form is submitted
    if(isset($_POST['Submit']))
    {
        $Username = "Tim";
        $Password = "1";

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
        if ($result && password_verify($Password, $result['password'])) {
            echo "Success";
        } else {
            // Else display error
            $error = "Failure";
        }
    }
    ?>

    <div class="grid-item header"><h1>Log in</h1></div>
    <div class="grid-item review1">
        <?php if (isset($error)) echo "<p>$error</p>"; ?>
        <form action="" method="post" name="Login_Form" class="form-signin">
            <button name="Submit" value="Login" class="button" type="submit">Log in</button>
        </form>

    </div>
</div>
</body>
</html>


