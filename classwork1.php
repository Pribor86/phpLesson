<html>
<head>
    <title>Lesson</title>
</head>

<body>
<div>
    <?php


    $movies = array(
        "Drama" => array(
            "1" => "Titanic",
            "2" => "One",
            "3" => "Seven lives"
        ),
        "Comedy" => array(
            "1" => "Mean Girls",
            "2" => "Pulp Fiction",
            "3" => "Hot Fuzz"
        ),
        "Triller" => array(
            "1" => "The Guilty",
            "2" => "The Father",
            "3" => "The Beguiled"
        )
    );

    foreach ($movies as $key => $type){
        echo "<br>"."<b>$key</b>"."<br>";

        foreach ($type as $info){
            echo "<li>"."$info"."</li>";
        }
    }

    ?>



</div>
</body>
</html>