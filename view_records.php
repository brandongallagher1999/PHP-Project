<?php
    require_once("session.php");
    require_once("db.php");
?>


<!DOCTYPE html>

<html>

    <head>
        <title>View Users Page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css" crossorigin="anonymous">
    </head>

    <body>
        <?php
            if (isset($_SESSION["logged"]))
            {
                if($_SESSION["logged"] == "true")
                {
                    
                    
                }
            }
            else
            {
                header("Location: login.php");
            }
        ?>
    </body>

</html>