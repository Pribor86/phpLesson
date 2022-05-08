<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "user_DB";
$db_connect = mysqli_connect($db_host, $db_user, $db_pass);



// Check connection
if($db_connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt create database query execution
$sql = "CREATE DATABASE $db_name";
if(mysqli_query($db_connect, $sql)){
//    echo "Database created successfully";
} else{
//    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_connect);
}

$db_connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$student_SQL = file_get_contents('students.sql');
if(mysqli_query($db_connect, $student_SQL)){
//    echo "Table created successfully";
} else{
//    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_connect);
}

// Close connection
mysqli_close($db_connect);



?>