<?php


include "templates/header.php"
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
                <li><a href="404.php"></a></li>
                <li><a href="LoginPanel.php">Log in</a></li>
            </ul>
        </nav>
        <script>$(".flexnav").flexNav();</script>
    </div>
    <div class="grid-item main">
        <p id="Intro text"> To get started, hit the button below! </p>
        <hr>
        <a id="startButton" href="Editor.html"><input type="button" value="Begin editing"></a>

    </div>
    <div class="grid-item right">
        <p>Log in here to save your work!</p>
        <hr>
        <a href="LoginPanel.html"><input type="button" value="Log in"></a>
    </div>
</div>
</body>

<?php
include "templates/footer.php";
?>
