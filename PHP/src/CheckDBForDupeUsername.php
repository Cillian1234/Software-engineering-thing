<?php
// This function checks if a username exists within the database already
// This is to prevent the repeated use of one username, which causes all sorts of issues
class CheckDBForDupeUsername
{
    public function CheckUsername($Username, $connection): bool
    {

        try {
            $sql = "SELECT username FROM users WHERE Username = :Username";
            $statement = $connection->prepare($sql);
            $statement->bindParam(':Username', $Username, PDO::PARAM_STR);
            $statement->execute();
            $result = $statement->fetch();

            if ($result && $result['username'] === $Username){
                return true; // If the username exists, return true
            } else {
                return false; // else false
            }
        } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
            return false;
        }
    }
}