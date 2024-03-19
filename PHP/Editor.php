<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/MainStyle.css">
    <link rel="stylesheet" href="../CSS/EditorGrid.css">
    <link rel="stylesheet" href="../CSS/flexnav.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="../JavaScript/jquery.flexnav.min.js" type="text/javascript"></script>
    <script src="../JavaScript/Basket.js"></script>
    <script src="../JavaScript/JQuery.js"></script>
    <title>Editor</title>
</head>

<body>
<div class="grid-container">
    <div class="grid-item header">
        <h1 id="checkheader">Simple Website Editor</h1>
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

        <div class="grid-item item1">
            <div class="item-grid-container Style1">
                <p>Plain text piece</p>
            </div>
        </div>

        <div class="grid-item item2">
            <div class="item-grid-container Style2">
                <p>Text + image piece</p>
                <img src="../Images/DropMenuIcon.png">
            </div>
        </div>

        <div class="grid-item item3">
            <div class="item-grid-container Style3">
                <p>Text + image + button piece</p>
                <img src="../Images/DropMenuIcon.png">
                <input type="button" value="Button">
            </div>
        </div>

        <div class="grid-item item4">
            <div class="item-grid-container Style1">
                <img src="../Images/DropMenuIcon.png">
            </div>
        </div>

        <div class="grid-item item5">
            <div class="item-grid-container Style2">
                <img src="../Images/DropMenuIcon.png">
                <input type="button" value="Button">
            </div>
        </div>

        <div class="grid-item item6">
            <div class="item-grid-container Style1">
                <input type="button" value="Button">
            </div>
        </div>
    </div>

    <div class="grid-item-right">
        <div class="grid-item template">
            Drop template piece here
        </div>
        <div class="grid-item template">
            Drop template piece here
        </div>
        <div class="grid-item template">
            Drop template piece here
        </div>
        <div class="grid-item template">
            Drop template piece here
        </div>
        <div class="grid-item template">
            Drop template piece here
        </div>
        <div class="grid-item template">
            Drop template piece here
        </div>
        <div class="grid-item template">
            Drop template piece here
        </div>
        <div class="grid-item template">
            Drop template piece here
        </div>
        <div class="grid-item template">
            Drop template piece here
        </div>
    </div>

    <div class="grid-item footer">
        <p>
            Footer stuff, eventually finish editing and export buttons
        </p>
    </div>

</div>
</body>
</html>
