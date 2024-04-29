<?php
require "../../PHP/src/DBconnect.php";
require "../../PHP/src/CheckDBForDupeUsername.php";
$UsernameCheck = new CheckDBForDupeUsername();

// Database has been populated with 3 usernames, "Tim", "Bob", and "Jack"

// Test Case = Malformed username entered
// Expected outcome = failure to find username
$UsernameExists = $UsernameCheck->CheckUsername("Bob? by", $connection);
echo $UsernameExists; // Should echo 1 if username is found in DB
