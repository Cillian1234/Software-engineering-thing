<?php
session_start(); // Messages found are saved to session variables
require "../../PHP/src/DBconnect.php";
require "../../PHP/src/FindMessages.php";
$SearchDB = new FindMessages();

// DB has been populated with some messages under userID 2

// Test Case = invalid userID
// Expected outcome = Failure
$SearchDB->SearchDatabase(4, $connection);

echo $_SESSION['headerMessage'] . " ";
echo $_SESSION['main1Message'] . " ";
echo $_SESSION['main2Message'];