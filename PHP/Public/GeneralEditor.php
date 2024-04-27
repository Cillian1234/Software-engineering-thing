<?php
require_once "templates/header.php"
?>
    <title>Project settings</title>
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
        <p id="Intro text">Here you can change various settings of your project!</p>
        <hr>
        <p>Font, background colour, etc.</p>

    </div>
    <div class="grid-item right">
        <h2>Settings</h2>
        <label for="background colour">Background colour</label>
        <input type="color" name="background colour"><br>

        <label for="background colour">Font</label>
        <select name="font select" id="font select">
            <option value="Times New Roman">Times New Roman</option>
            <option value="Arial">Arial</option>
            <option value="other font">other font</option>
        </select><br>

        <label for="background colour">Background colour</label>
        <input type="color" name="background colour"><br>
    </div>
</div>
</body>
<?php
require_once "templates/footer.php";
?>