<?php
if (isset($_POST['submit'])) {
    require "../src/DBconnect.php";
    require_once "../src/UploadToDatabase.php";
    
    $Upload = new UploadToDatabase();
    
    $new_messages = array(
        "headerMessage" => $_POST['headerMessage'],
        "main1Message" => $_POST['main1Message'],
        "main2Message" => $_POST['main2Message'],
        "aside1Message" => $_POST['aside1Message'],
        "aside2Message" => $_POST['aside2Message']
    );
    
    $Upload->UploadToDatabase($new_messages, "messages", $connection);
}

require_once "templates/header.php"
?>
    <link rel="stylesheet" href="../../CSS/EditorGrid.css">
    <link rel="stylesheet" href="../../CSS/EditorStyle.css">
    <title>Editor</title>

    <div class="grid-item main">
        <form action="" method="post" name="CustomMessages">
            <div class="CustomiseItems" style="border-color: red">
                <div class="CustomiseSubItems">
                    <h3>Edit heading</h3>
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

    <div class="grid-item-right">
        <div class="EditorArea">
            <div class="EditorItem heading" style="border-color: red">
                <div class="EditorSubItem">
                    <p id="CustomHeader">Heading</p>
                </div>
            </div>
            <div class="EditorItem" style="border-color: green">
                <div class="EditorSubItem">
                    <p>Main Text 1</p>
                </div>
                <div class="EditorSubItem">
                    <p>Main Text 2</p>
                </div>
            </div>
            <div class="EditorItem" style="border-color: blue">
                <div class="EditorSubItem">
                    <p>Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1</p>
                </div>
                <div class="EditorSubItem">
                    <p>Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1 Aside Text 1</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-item footer">
        <p>
            Footer stuff, eventually finish editing and export buttons
        </p>
        <form method = "post">
            <input type="submit" value="test" name="test">
        </form>
    </div>


<?php
require_once "templates/footer.php";
?>
