<?php
// This uploads data to the database, both user and message data
class UploadToDatabase
{
    public function UploadToDatabase($DataToUpload, $Table, $connection) {

        try {
            $sql = sprintf("INSERT INTO %s (%s) values (%s)", $Table, implode(", ",
                array_keys($DataToUpload)), ":" . implode(", :", array_keys($DataToUpload)));

            $statement = $connection->prepare($sql);
            $statement->execute($DataToUpload);
        } catch (PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }

        if (strcmp($Table, "users") == 0)
            header("location:Login.php");
        else
            header("location:Editor.php");
        exit;
    }
}