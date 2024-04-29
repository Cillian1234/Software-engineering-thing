<?php
session_start();
class FindMessages
{
    public function SearchDatabase($userID, $connection) {

        try {
            $sql = sprintf("SELECT * FROM messages where userid = %s", $userID);

            $statement = $connection->prepare($sql);
            $statement->execute();
            $result = $statement->fetch();
        } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }

            $_SESSION['headerMessage'] = $result['headerMessage'];
            $_SESSION['main1Message'] = $result['main1Message'];
            $_SESSION['main2Message'] = $result['main2Message'];
            $_SESSION['aside1Message'] = $result['aside1Message'];
            $_SESSION['aside2Message'] = $result['aside2Message'];
    }
}