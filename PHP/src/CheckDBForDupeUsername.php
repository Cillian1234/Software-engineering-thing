<?php
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
                return true;
            } else {
                return false;
            }
        } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
            return false;
        }
    }
}