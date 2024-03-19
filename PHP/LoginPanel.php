<?php
$servername = "localhost";
$username = "Cillian";
$password = "Cillian80";

// Create connection
$conn = mysqli_connect($servername, $username, $password, "swe");

if (array_key_exists('submitLogin', $_POST)) {
    $WEBusername = $_POST['usernameInput'];
    $userpass = $_POST['passwordInput'];
    createUser($WEBusername, $userpass);
} 

function createUser($WEBusername2, $userpass2): void {
    global $conn;
    $sql = "INSERT INTO users (username, userpass)
            VALUES ('$WEBusername2', '$userpass2')";

    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/MainStyle.css">
    <link rel="stylesheet" href="../CSS/Login.css">
    <link rel="stylesheet" href="../CSS/flexnav.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
    <script src="../JavaScript/jquery.flexnav.min.js" type="text/javascript"></script>
    <title>Log in</title>
</head>

<body>
<div class="grid-container">
    <div class="grid-item header"><h1>Log in</h1></div>
    <div class="grid-item review1">
        <form method="post" action="">
            <label for="usernameInput">Enter username
                <input type="text" name="usernameInput">
            </label>
            <br>
            <label for="passwordInput">Enter password
                <input type="password" name="passwordInput">
            </label>
            <hr>
            <input type="submit" name="submitLogin" value="submitLogin">
        </form>
        <a href="Index.php"><input type="button" value="Back"></a>
    </div>
</div>
</body>
</html>
