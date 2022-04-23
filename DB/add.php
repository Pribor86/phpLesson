<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "user_DB";
$db_connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$string = "index.html";
// Check connection
if ($db_connect === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$first_name = mysqli_real_escape_string($db_connect, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($db_connect, $_REQUEST['last_name']);
$isikukood = mysqli_real_escape_string($db_connect, $_REQUEST['isikukood']);
$grade = mysqli_real_escape_string($db_connect, $_REQUEST['grade']);
$email = mysqli_real_escape_string($db_connect, $_REQUEST['email']);

// attempt insert query execution
$insert_data = "INSERT INTO students (last_name, first_name, isikukood, grade, email) VALUES ('$last_name', '$first_name', $isikukood, $grade, '$email')";
if (mysqli_query($db_connect, $insert_data)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $insert_data. " . mysqli_error($db_connect);
}

// close connection
mysqli_close($db_connect);
function jump_to(string $string)
{
    header("Location: $string");
}

jump_to($string);


