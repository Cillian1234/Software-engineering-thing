<?php
    require "../src/DBconnect.php";

if (isset($_POST['submit'])) {
    require "../src/common.php";
    require_once "../src/UploadToDatabase.php";
    require_once "../src/CheckDBForDupeUsername.php";

    $Upload = new UploadToDatabase();
    $DBChecker = new CheckDBForDupeUsername();

    $Username = escape($_POST['username']);
    $UsernameExists = $DBChecker->CheckUsername($Username, $connection);

    if ($UsernameExists) {
        $error = "Username already exists, Please choose a unique username";
    } else {
        $new_user = array(
            "username" => $Username,
            "password" => password_hash(escape($_POST['password']), PASSWORD_DEFAULT),
            "email" => escape($_POST['email']),
            "age" => escape($_POST['age']),
            "location" => escape($_POST['location'])
        );

        $Upload->UploadToDatabase($new_user, "users", $connection);
    }
}
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
    <title>Sign up</title>
</head>

<body>
<div class="grid-container">
    <div class="grid-item header"><h1>Sign up</h1></div>
        <div class="grid-item review1">
            <?php if (isset($error)) echo "<p>$error</p>"?>
            <form action="" method="post" name="Login_Form" class="form-signin">
                <label for="username">username</label>
                <input type="text" name="username" id="username" required> <br>
                <label for="password">password</label>
                <input type="password" name="password" id="password" required> <br>
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" required> <br>
                <label for="age">Age</label>
                <input type="text" name="age" id="age"> <br>
                <label for="location">Location</label>
                <input type="text" name="location" id="location"> <br>
                <input type="submit" name="submit" value="Submit">
                <p>Alread have an account? <a href="Login.php">Log in</a> instead.</p>
            </form>
        </div>

</div>
</body>
</html>

<?php
require "templates/footer.php";
?>