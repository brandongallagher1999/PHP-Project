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
                    echo "<table class='table'>";
                    echo "<thead>";
                    echo "<th>ID</th>";
                    echo "<th>Username</th>";
                    echo "<th>Email</th>";
                    echo "<th>Location</th>";
                    echo "<th>Profile Image</th>";
                    echo "<th>Skills</th>";
                    echo "<th>Social Media</th>";
                    echo "</thead>";
                    echo "<tbody>";
                    $sql = "SELECT * FROM user_info";

                    $statement = $db->prepare($sql);
                    $statement->execute();

                    $rows = $statement->fetchAll();
                    foreach($rows as $row)
                    {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["username"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["location"] . "</td>";
                        echo "<td><img src='uploads/" .$row["profile_image"] . "' width='500' height='500'></td>";
                        echo "<td>" . $row["skills"] . "</td>";
                        echo "<td>" . $row["social_media"] . "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";

                }
            }
            else
            {
                header("Location: login.php");
            }
        ?>
    </body>

</html>