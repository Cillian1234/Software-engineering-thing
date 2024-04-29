<?php
session_start();
if($_SESSION['Active'] == false){
    header("location:Login.php");
    exit;
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
     <script src="../JavaScript/jquery.flexnav.min.js" type="text/javascript"></script>
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
                 <li><a href="Editor.php">Editor</a></li>
                 <li><a href="ProjectSettings.php">Project Settings</a></li>
                 <li><a href="about.php">About</a></li>
                 <li><a href="logoutPage.php">Log out</a></li>
             </ul>
         </nav>
         <script>$(".flexnav").flexNav();</script>
     </div>