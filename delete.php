<!DOCTYPE html>

<html>

    <head>
        <title>Display Info Page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css" crossorigin="anonymous">
    </head>

    <body>
        
        <div style="font-size: 20px;">
            <p>DELETE </p>
            <form action="delete_record.php" method="post">

                <label for="id">ID of user</label>
                <input type="number" name="id" id="id">

                <input type="submit" name="submit" class="button is-danger" value="Delete">

            </form>

            <br>
            <br>

            <p>UPDATE</p>
            <form action="update_record.php" method="post">
                <label for="id">ID of user </label>
                <input type="number" name="id" id="id">
                <br>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
                <br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <br>
                <label for="location">Location</label>
                <input type="text" name="location" id="location">
                <br>
                <label for="skills">Skills </label>
                <input type="text" name="skills" id="skills">

                <input type="submit" name="submit" class="button is-danger" value="Update">
            </form>
        </div>
    </body>



</html>
