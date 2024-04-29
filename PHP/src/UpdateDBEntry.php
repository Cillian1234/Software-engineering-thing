<?php

class UpdateDBEntry
{
    public function UpdateDBEntry($DataToUpdate, $connection) {
        try {
            $sql = "UPDATE messages 
                SET headerMessage = :headerMessage,
                main1Message = :main1Message,
                main2Message = :main2Message,
                aside1Message = :aside1Message,
                aside2Message = :aside2Message
                WHERE userID = :userID";

            $statement = $connection->prepare($sql);
            $statement->execute($DataToUpdate);
        } catch (PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }

        header("location:Editor.php");
    }
}