<?php
require "../../PHP/src/DBconnect.php";
require "../../PHP/src/CheckDBForDupeUsername.php";
$UsernameCheck = new CheckDBForDupeUsername();

// Database has been populated with 3 usernames, "Tim", "Bob", and "Jack"

// Test Case = Username does exist in database
// Expected outcome = success finding username
$UsernameExists = $UsernameCheck->CheckUsername("Bob", $connection);
echo $UsernameExists; // Should echo 1 if username is found in DB
