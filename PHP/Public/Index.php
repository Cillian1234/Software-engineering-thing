<?php
require_once "templates/header.php"
?>

    <title>Home</title>

    <div class="grid-item main">
        <p id="Intro text"> To get started, navigate to the editor! </p>
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
