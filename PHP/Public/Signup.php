<?php
if (isset($_POST['submit'])) {
    require "../src/common.php";
    try {
        require_once "../src/DBconnect.php";
        $new_user = array(
            "firstname" => escape($_POST['firstname']),
            "lastname" => escape($_POST['lastname']),
            "email" => escape($_POST['email']),
            "age" => escape($_POST['age']),
            "location" => escape($_POST['location'])
        );

        $sql = sprintf( "INSERT INTO %s (%s) values (%s)", "users", implode(", ",
            array_keys($new_user)), ":" . implode(", :", array_keys($new_user)) );

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);

    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
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
            <form action="" method="post" name="Login_Form" class="form-signin">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" required>
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" required>
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" required>
                <label for="age">Age</label>
                <input type="text" name="age" id="age">
                <label for="location">Location</label>
                <input type="text" name="location" id="location">
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>

</div>
</body>
</html>

<?php
require "templates/footer.php";
?>