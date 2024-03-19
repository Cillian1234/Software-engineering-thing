<?php
$servername = "localhost";
$username = "Cillian";
$password = "Cillian80";

// Create connection
$conn = mysqli_connect($servername, $username, $password, "swe");

// Check connection
if (!$conn) {
    echo "Connection error" . mysqli_connect_error();
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/MainStyle.css">
    <link rel="stylesheet" href="../CSS/HomeGrid.css">
    <link rel="stylesheet" href="../CSS/flexnav.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
    <script src="../JavaScript/jquery.flexnav.min.js" type="text/javascript"></script>
    <title>Home</title>
</head>
<body>
<div class="grid-container">
    <div class="grid-item header">
        <h1>Simple Website Builder</h1>
        <div class=menu-button>
            Menu
        </div>
        <nav>
            <ul data-breakpoint-em="50" class="flexnav">
                <li><a href="Index.php">Home</a></li>
                <li><a href="404.php"></a></li>
                <li><a href="Editor.php">Editor</a></li>
                <li><a href="404.php"></a></li>
                <li><a href="LoginPanel.php">Log in</a></li>
            </ul>
        </nav>
        <script>$(".flexnav").flexNav();</script>
    </div>
    <div class="grid-item main">
        <p id="Intro text"> To get started, hit the button below! </p>
        <hr>
        <a id="startButton" href="Editor.html"><input type="button" value="Begin editing"></a>

    </div>
    <div class="grid-item right">
        <p>Log in here to save your work!</p>
        <hr>
        <a href="LoginPanel.html"><input type="button" value="Log in"></a>
    </div>
    <div class="grid-item footer">
        <p>
            Blah blah blah blah, blah blah. Blah blah blah! Blah.
        </p>
        <hr>
        <p id="contactinfo">
            Phone number - 000-000-0000<br>
            Email - <a href="mailto:dontcare@taketheL.com">dontcare@taketheL.com</a>
        </p>
    </div>
</div>
</body>
</html>
