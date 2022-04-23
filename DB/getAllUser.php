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

// Attempt select query execution
$sql = "SELECT * FROM students";
if ($result = mysqli_query($db_connect, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr style='background-color: cadetblue'>";
        echo "<th>isikukood</th>";
        echo "<th>first_name</th>";
        echo "<th>last_name</th>";
        echo "<th>grade</th>";
        echo "<th>email</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td style='background-color: cadetblue'>" . $row['isikukood'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['grade'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
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
