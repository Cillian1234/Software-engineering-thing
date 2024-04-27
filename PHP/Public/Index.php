<?php

require_once "templates/header.php"
?>

    <title>Home</title>

    <div class="grid-item main">
        <p id="Intro text"> To get started, hit the button below! </p>
        <hr>
        <a id="startButton" href="Editor.php"><input type="button" value="Begin editing"></a>

    </div>
    <div class="grid-item right">
        <h2>You're logged in <?php echo
        $_SESSION['Username'];?> ready to go!</h2>
    </div>
</div>
</body>

<?php
require_once "templates/footer.php";
?>
