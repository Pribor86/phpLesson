<?php
$num_to_guess = 0;
$message = "";
$arr = [];
$num_tries = 0;
$guess = 0;
$num_tries_history = "";

if ( ! isset( $_POST['guess'] ) ) {
    $message = "Hello!";
    $num_to_guess = mt_rand( 1, 1001);
//    echo $num_to_guess;
} else {
    $num_tries = (int) $_POST['num_tries'];
    $guess = (int) $_POST['guess'];
    $num_to_guess = (int) $_POST['num_to_guess'];
    $num_tries_history = $_POST['num_tries_history'];


    if ( $_POST['guess'] > $num_to_guess ) {
        $message = $_POST['guess'] . " is bigger!";
    }
    else if ( $_POST['guess'] < $num_to_guess ) {
        $message = $_POST['guess'] . " is smaller!";
    }
    else {
        $message = "OK!";


    }
    $num_tries_history = $num_tries_history . " " . $_POST['guess'];

}

?>

<html>
<head>
    <title>l8. </title>
</head>
<body>
<div>
    <h1><?php $num_to_guess ?></h1>
    <h1>

        <?php print $message ?>
    </h1>
    Attempts done: <?php print $num_tries++; ?> <br />

    <form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
        <p>
            <input type="hidden" name="num_to_guess" value="<?php print $num_to_guess?>" />
            <input type="hidden" name="num_tries" value="<?php print $num_tries?>" />
            <input type="hidden" name="num_tries_history" value="<?php print $num_tries_history?>" />
            Input number: <input id="myInput" type="number" name="guess" onfocus="this.value='' " autofocus />
            <input type="submit" value="Input"/><br>
            <div class="history_tries" style="background: rgba(0,255,187,0.32);">
            <b>Your history:</b> <?php print $num_tries_history; ?>
            </div><br>
                <div style="border: 1px solid black; width: 60px; height:20px; padding: 5px; background-color: cadetblue; text-align: center;">
                     <a href="<?php $_SERVER['PHP_SELF']; ?>" style="text-decoration: none;">RESET</a>
                </div>
        </p>
    </form>
</div>
</body>
</html>