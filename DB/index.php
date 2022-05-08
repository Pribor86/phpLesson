<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/valid.js"></script>
    <link rel="stylesheet" href="styles/form.css">
</head>
<body>
<div class="wrapper">
<div>
<?php
require_once("create_DB.php");
?>

    <form action="add.php" method="post">

        <p>
            <label for="firstName">First Name:</label>
            <input type="text" name="first_name" id="firstName" required>
        </p>
        <p>
            <label for="lastName">Last Name:</label>
            <input type="text" name="last_name" id="lastName" required>
        </p>
        <p>
            <label for="isikukood">Isikukood:</label>
            <input type="number" name="isikukood" id="isikukood" required>
        </p>
        <p>
            <label for="grade">Grade:</label>
            <input type="number" name="grade" id="grade" required>
        </p>
        <p>
            <label for="emailAddress">Email Address:</label>
            <input type="text" name="email" id="emailAddress" required>
        </p>
        <p>
            <label for="message">Message:</label>
            <textarea name="message" id="message" cols="30" rows="2"></textarea>
        </p>
        <input class="button" type="submit" value="Submit">
        <input class="button" type="reset" value="Clear Form">
    </form>
</div>
<div>
    <form action="getAllUser.php" method="post">
        <input class="button" type="submit" value="Get all persons">
    </form>
</div>
</div>


</body>
</html>
