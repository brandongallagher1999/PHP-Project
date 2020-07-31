<?php

    require_once("db.php");
    $fileName = "";

    try
    {
        $username = filter_input(INPUT_POST, 'username');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $location = filter_input(INPUT_POST, "location");
        $skills = filter_input(INPUT_POST, "skills");
        $password = filter_input(INPUT_POST, "password");


        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
        $fileName = $_FILES["profile_image"]["name"];
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if(isset($_POST["submit"]))
        {
            $check = getimagesize($_FILES["profile_image"]["tmp_name"]);
            if($check !== false)
            {
                copy($_FILES['profile_image']['tmp_name'], $target_file);
                $uploadOk = 1;
                header("Location: login.php");
            }
            else
            {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }


    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
    

    try //database entry
    {
        $sql = "INSERT INTO user_info (username, email, location, skills, profile_image, social_media, password) VALUES (:username, :email, :location, :skills, :profile_image, :social_media, :password)";

        $statement = $db->prepare($sql);
    
        // hash password
        $newPass = password_hash($password, PASSWORD_DEFAULT);

        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":location", $location);
        $statement->bindParam(":skills", $skills);
        $statement->bindParam(":social_media", $social_media);
        $statement->bindParam(":password", $newPass);
        $statement->bindParam(":profile_image", $fileName);
    
        $statement->execute();
    
        echo "<p> Done </p>";
    
        $statement->closeCursor(); // close() is an old depricated method
    } 
    catch(Exception $e)
    {
        echo $e->getMessage();
    }



?>