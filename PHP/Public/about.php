<?php
require "templates/header.php";

?>
<title>About</title>


    <div class="grid-item main">
        <p>This project took everything from me.</p>

    </div>
    <div class="grid-item right">
        <h2>Here is some information about your account!</h2>
        <p>
        <?php
        echo "Your name is " . $_SESSION['Username'];
        echo nl2br("\r\n Your email is " . $_SESSION['userEmail']);
        echo nl2br("\r\n Your age is " . $_SESSION['userAge']);
        echo nl2br("\r\n Your location is " . $_SESSION['userLocation']);
        ?>
        </p>
    </div>
</div>
</body>

<?php
require "templates/footer.php";