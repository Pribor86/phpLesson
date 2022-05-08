<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="styles/form.css">
</head>
<body>
<div class="wrapper">
    <?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "user_DB";

    $db_connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // Check connection
    if ($db_connect === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    //find in db by first_name
    $sql = "SELECT * FROM students WHERE first_name = '$_POST[first_name]'";

    // Attempt select query execution
    if ($result = mysqli_query($db_connect, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>isikukood</th>";
            echo "<th>first_name</th>";
            echo "<th>last_name</th>";
            echo "<th>grade</th>";
            echo "<th>email</th>";
            echo "<th>message</th>";
            echo "<th>delete</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['isikukood'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['grade'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
                echo "<td><a href='delete.php?id=" . $row['isikukood'] . "' class='buttonDel'>delete</a></td>";
                echo "</tr>";
            }
            echo "</table>";
            // Free result set
            mysqli_free_result($result);
        } else {
            echo "No records matching your query were found.";
        }
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_connect);
    }
    // Close connection
    mysqli_close($db_connect);
    ?>
    <form action="index.php" method="post">
        <input class="button" type="submit" value="Back">
    </form>
    <form action="del.php" method="post">
        <input class="button" type="submit" value="Delete all">
    </form>
    <form action="getAllUser.php" method="post">
        <input class="button" type="submit" value="Get all persons">
    </form>
</div>
</body>
</html>
