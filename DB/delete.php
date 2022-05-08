<?php

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
mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$sql_inject = "DELETE FROM students WHERE isikukood = '$_GET[id]'";
if(mysqli_query($db_connect, $sql_inject)){
    echo "Records deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql_inject. " . mysqli_error($db_connect);
}
mysqli_close($db_connect);
function jump_to(string $string)
{
    echo "<script>setTimeout(\"location.href = '$string';\",3000);</script>";
}
jump_to($string);
echo '</div>';