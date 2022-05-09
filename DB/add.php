<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
echo '<link rel="stylesheet" type="text/css" href="styles/form.css"></head>';
echo '<div class="wrapper">';
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "user_DB";
$db_connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$string = "index.php";
// Check connection
if ($db_connect === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

function inputFormat($string): string
{
    return mb_strtoupper(mb_substr($string, 0, 1)) . mb_substr($string, 1);
}

function control_letter_length($string):bool {
    if(strlen($string) != 11) {
        echo ("<h2>Wrong isikukood.<br> It should be 11 symbols. <br> You have entered $string(".strlen($string))." symbols).<br> Please, Try Again</h2>";
//        echo "<script>setTimeout('history.go(-1)',3000);</script>";
        return false;
    }
    return true;
}

function control_email($string):bool {
    if(!filter_var($string, FILTER_VALIDATE_EMAIL)) {
        echo ("<h2>Wrong email.<br>You have entered $string.<br> Please, Try Again</h2>");
//        echo "<script>setTimeout('history.go(-1)',3000);</script>";
        return false;
    }
    return true;
}
if(!control_letter_length(mysqli_real_escape_string($db_connect, $_REQUEST['isikukood']))
    || !control_email(mysqli_real_escape_string($db_connect, $_REQUEST['email']))){
    echo "<script>setTimeout('history.go(-1)',3000);</script>";
    die($db_connect);

}

// Escape user inputs for security
$first_name = inputFormat(mysqli_real_escape_string($db_connect, $_REQUEST['first_name']));
$last_name = inputFormat(mysqli_real_escape_string($db_connect, $_REQUEST['last_name']));
$isikukood = mysqli_real_escape_string($db_connect, $_REQUEST['isikukood']);
$grade = mysqli_real_escape_string($db_connect, $_REQUEST['grade']);
$email = strtolower(mysqli_real_escape_string($db_connect, $_REQUEST['email']));
$message = mysqli_real_escape_string($db_connect, $_REQUEST['message']);

// attempt insert query execution
$insert_data = "INSERT INTO students (last_name, first_name, isikukood, grade, email, message) VALUES ('$last_name', '$first_name', '$isikukood', '$grade', '$email', '$message')";
if (mysqli_query($db_connect, $insert_data)) {
    echo "Records added successfully.";
    echo "<h2>$first_name $last_name, you have been added to the database.</h2>";

} else {
    echo mysqli_error($db_connect);
    echo "<script>setTimeout('history.go(-1)',3000);</script>";
}


// close connection
    mysqli_close($db_connect);
echo "<script>setTimeout(\"location.href = '$string';\",3000);</script>";
//function jump_to(string $string)
//    {
//        echo "<script>setTimeout(\"location.href = '$string';\",3000);</script>";
//    }
//    jump_to($string);
echo '</div>';
