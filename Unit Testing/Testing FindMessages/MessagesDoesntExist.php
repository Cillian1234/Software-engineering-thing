<?php
session_start(); // Messages found are saved to session variables
require "../../PHP/src/DBconnect.php";
require "../../PHP/src/FindMessages.php";
$SearchDB = new FindMessages();

// DB has been populated with null messages under userID 3

// Test Case = Valid userID with no messages
// Expected outcome = Failure
$SearchDB->SearchDatabase(3, $connection);

echo $_SESSION['headerMessage'] . " ";
echo $_SESSION['main1Message'] . " ";
echo $_SESSION['main2Message'];