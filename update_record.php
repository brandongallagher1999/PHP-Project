
<?php

    require_once("db.php");
    try
    {
        $id = filter_input(INPUT_POST, "id");
        $username = filter_input(INPUT_POST, 'username');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $location = filter_input(INPUT_POST, "location");
        $skills = filter_input(INPUT_POST, "skills");

        $sql = "UPDATE user_info SET username = :username, email = :email, location = :location, skills = :skills WHERE id = :id";

        $statement = $db->prepare($sql);

        $statement->bindParam(":id", $id);
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":location", $location);
        $statement->bindParam(":skills", $skills);

        $statement->execute();

        $statement->closeCursor();

        echo "<p> Done </p>";


    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }

?>
