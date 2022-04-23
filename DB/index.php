<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
<?php
require_once("create_DB.php");
?>
    <form action="add.php" method="post">
        <p>
            <label for="lastName">Last Name:</label>
            <input type="text" name="last_name" id="lastName">
        </p>
        <p>
            <label for="firstName">First Name:</label>
            <input type="text" name="first_name" id="firstName">
        </p>
        <p>
            <label for="isikukood">Isikukood:</label>
            <input type="number" name="isikukood" id="isikukood">
        </p>
        <p>
            <label for="grade">Grade:</label>
            <input type="number" name="grade" id="grade">
        </p>
        <p>
            <label for="emailAddress">Email Address:</label>
            <input type="text" name="email" id="emailAddress">
        </p>
        <input type="submit" value="Add Records">
    </form>
    <form action="getAllUser.php" method="post">
        <input type="submit" value="Get all persons">

    </form>
</div>


</body>
</html>
