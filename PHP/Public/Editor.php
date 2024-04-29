<?php
require "templates/header.php";

// This uses your userID to get any messages you may have saved in the DB
    require "../src/DBconnect.php";
    require "../src/FindMessages.php";
    $SearchDatabase = new FindMessages();
    $SearchDatabase->SearchDatabase($_SESSION['userID'], $connection);

// When the form is submitted this will either create a new entry in the messages table
// for you or if you already have an entry there it will update that entry with the new
// info you entered
if (isset($_POST['submit'])) {
    require_once "../src/SearchDatabase.php";
    require_once "../src/UploadToDatabase.php";
    require_once "../src/UpdateDBEntry.php";

    $Upload = new UploadToDatabase();
    $Update = new UpdateDBEntry();

    // Save newly entered data to array
    $new_messages = array(
        "userID" => $_SESSION['userID'],
        "headerMessage" => $_POST['headerMessage'],
        "main1Message" => $_POST['main1Message'],
        "main2Message" => $_POST['main2Message'],
        "aside1Message" => $_POST['aside1Message'],
        "aside2Message" => $_POST['aside2Message']
    );

    // Try to find your userID in the messages table
    try {
        $sql = sprintf("SELECT * FROM messages where userid = %s", $_SESSION['userID']);

        $statement = $connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetch();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

    // If your userID is found, update that entry. If not, create a new one
    if (!$result)
        $Upload->UploadToDatabase($new_messages, "messages", $connection);
    else
        $Update->UpdateDBEntry($new_messages, $connection);

}
?>
    <link rel="stylesheet" href="../../CSS/EditorGrid.css">
    <link rel="stylesheet" href="../../CSS/EditorStyle.css">
    <title>Editor</title>

<!-- Here you enter text into the boxes and submit the form,
 the text is then saved to the database using your unique userID and
 displayed on the right side of the page.
 Your userID is also used to allow you to log out and log back in,
 and pick up where you left off-->
    <div class="grid-item main">
        <form action="" method="post" name="CustomMessages">
            <div class="CustomiseItems" style="border-color: red">
                <div class="CustomiseSubItems">
                    <h3>Edit Header</h3>
                    <input type="text" name="headerMessage" id="headerMessage" style="width: 100%">
                </div>
            </div>
            <div class="CustomiseItems" style="border-color: green">
                <div class="CustomiseSubItems">
                    <label for="EditMainText">Edit Main text 1</label>
                    <input type="text" name="main1Message" id="main2Message" style="width: 100%">
                    <hr>
                    <label for="EditMainText2">Edit Main text 2</label>
                    <input type="text" name="main2Message" id="main2Message" style="width: 100%">
                </div>
            </div>
            <div class="CustomiseItems" style="border-color: blue">
                <div class="CustomiseSubItems">
                    <label for="EditMainText">Edit Aside Text 1</label>
                    <input type="text" name="aside1Message" id="aside1Message" style="width: 100%">
                    <hr>
                    <label for="EditMainText2">Edit Aside Text 2</label>
                    <input type="text" name="aside2Message" id="aside2Message" style="width: 100%">
                </div>
            </div>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

<!-- This is the area of the page that gets updated, just uses php echos because I'm out of time -->
    <div class="grid-item-right">
        <div class="EditorArea">
            <div class="EditorItem heading" style="border-color: red">
                <div class="EditorSubItem">
                    <p id="CustomHeader">
                        <?php echo $_SESSION['headerMessage']; ?>
                    </p>
                </div>
            </div>
            <div class="EditorItem" style="border-color: green">
                <div class="EditorSubItem">
                    <p><?php echo $_SESSION['main1Message']; ?></p>
                </div>
                <div class="EditorSubItem">
                    <p><?php echo $_SESSION['main2Message']; ?></p>
                </div>
            </div>
            <div class="EditorItem" style="border-color: blue">
                <div class="EditorSubItem">
                    <p><?php echo $_SESSION['aside1Message']; ?></p>
                </div>
                <div class="EditorSubItem">
                    <p><?php echo $_SESSION['aside2Message']; ?></p>
                </div>
            </div>
        </div>
    </div>

<?php
require_once "templates/footer.php";
?>
