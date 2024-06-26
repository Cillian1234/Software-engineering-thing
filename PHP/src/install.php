<?php
// Create necessary database and tables
global $username, $password, $options, $host, $sql;
require "config.php";

try {
    $connection = new PDO("mysql:host=$host", $username, $password,
        $options);
    $sql = file_get_contents("../../init.sql");
    $connection->exec($sql);
    echo "Database and table users created successfully.";
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>
