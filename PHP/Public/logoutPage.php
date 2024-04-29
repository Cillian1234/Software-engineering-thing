<?php
session_start();
// end session and destroy session variables
    if(isset($_POST['Submit'])) {
        require_once '../src/session.php';
        $session = new session();
        $session->forgetSession();
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/MainStyle.css">
    <link rel="stylesheet" href="../../CSS/HomeGrid.css">
    <link rel="stylesheet" href="../../CSS/flexnav.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
    <title>Log out</title>
</head>

<body>
<div class="grid-container">
    <div class="grid-item footer">
        <h2>Are you sure you'd like to log out <?php echo
            $_SESSION['Username'];?>? </h2>
        <hr>
        <form action="" method="post" name="Logout_Form" class="form-signin">
            <button name="Submit" value="Logout" class="button" type="submit">Yes, Log out.</button>
        </form>
        <input type="button" onclick="window.location='Index.php'" value="No, Stay logged in.">
    </div>
</div>
