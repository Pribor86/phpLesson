<html>

<head>
    <title>l6. HTML-form, calling himself the code </title>
</head>
<body>
<div>
    <?php
     if ( ! empty( $_POST['guess'] ) ) {
       print "Last answer: " . $_POST['guess'];
     }
   ?>

    <form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
        <p>
            Enter your answer: <input type="text" name="guess" />
        </p>
    </form>
</div>
</body>
</html>