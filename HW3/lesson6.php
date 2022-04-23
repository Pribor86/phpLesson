<!DOCTYPE html>
<html>
<head>Lesson 6</head>
<body>

<div></div>

<?php
//print_r($_SERVER);
//echo '<hr>';
//echo 'IP_adress: '.$_SERVER['REMOTE_ADDR'] . "<br>";
//echo 'Bro: '.$_SERVER['HTTP_USER_AGENT'] . "<br>";
//echo 'Address apps: '.$_SERVER['SCRIPT_FILENAME'] . "<br>";
//foreach ($_SERVER as $item => $value) {
//    print "\$_SERVER[\"$item\"]: == $value <br />";
//}
 <form action="l2.php" method="get">

            <!--    <form action="l2.php" method="post">-->
            <p><input type="text" name="User" /></p>
            <p>
                <textarea name="Address" rows="5" cols="40"></textarea>
            </p>
            <p><input type="submit" value="Ok" /></p>
        </form>


print "Hello, <b>" . $_GET['User'] . "</b><br/>\n\n";

print "Your address: <br /><b>" . $_GET['Address'] . "</b>";
?>
</div>
</body>

</html>



