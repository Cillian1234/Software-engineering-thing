<?php

require_once "templates/header.php"
?>

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
                <li><a href="GeneralEditor.php">Project Settings</a></li>
                <li><a href="Login.php">Log in</a></li>
            </ul>
        </nav>
        <script>$(".flexnav").flexNav();</script>
    </div>
    <div class="grid-item main">
        <p id="Intro text"> To get started, hit the button below! </p>
        <hr>
        <a id="startButton" href="Editor.php"><input type="button" value="Begin editing"></a>

    </div>
    <div class="grid-item right">
        <h1>Status: You are logged in <?php echo
        $_SESSION['Username'];?> </h1>
        <hr>
        <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
            <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
        </form>
    </div>
</div>
</body>

<?php
require_once "templates/footer.php";
?>
