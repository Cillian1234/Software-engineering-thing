<?php


include "templates/header.php"
?>
    <link rel="stylesheet" href="../../CSS/Login.css">
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

<?php
include "templates/footer.php";
?>
