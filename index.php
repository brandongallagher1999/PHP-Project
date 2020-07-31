<?php
    require_once("session.php");
?>


<!DOCTYPE html>

<html>

    <head>
        <title> Register </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css" crossorigin="anonymous">
    </head>

    <body>
        <?php
            if (!isset($_SESSION["logged"]))
            {   
                $html = <<<hm
                <p style="font-size: 25px;"> Register </p>
                <form action="submit.php" method="post" enctype="multipart/form-data">>
                <label for="username"> Username </label>
                <input type="text" name="username" id="name"><br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password"><br>
                <label for="email"> Email </label>
                <input type="email" name="email" id="email"><br>
                <label for="location"> Location </label>
                <input type="text" name="location" id="location"><br>
                <label for="skills"> Skills </label>
                <input type="text" name="skills" id="skills"><br>
                <label for="profile_image">Profile Image</label>
                <input type="file" name="profile_image" id="profile_image" accept="image/png, image/jpeg"><br>
                <label for="social_media">Social Media</label>
                <input type="text" name="social_media" id="social_media"><br><br>
                <input type="submit" name="submit" value="Register User" class="button is-primary">
                </form>
                <br>
                <br>
                
                hm;
                echo $html;
            }
        ?>
        <a href="view_records.php" class="button is-warning">Go to Display User Info</a>
        <a href="delete.php" class="button is-danger">Go to Update / Delete Page</a>
        <form action="delete_session.php" method="post">
            <input type="submit" class="button is-danger" name="submit" value="Delete Session">
        </form>
    </body>


</html>
