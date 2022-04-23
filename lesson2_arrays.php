<html>
<head>
    <title>Lesson</title>
</head>

<body>
<div>
    <?php
    $number[] = "1";
    $number[] = "2";
    $number[] = "3";
    echo $number[0]."<br>";
    echo "count = ".count($number)."<br>";

    //structure of array
    print_r($number);

    $number[5] = "5";
    $number[7] = "2";
    $number[] = "8";
    $number[] = "9";

    echo "<br>";
    print_r($number);
    echo $number[4]."<br>"; //undefined

    $number_n[2] = "1";
    $number_n[0] = "2";
    $number_n[5] = "3";

    echo "<br>";
    print_r($number_n);
    echo "<br>";

    $number_n = array_values($number_n);
    print_r($number_n);
    echo "<br>";

    //*****************

    $number = array("1","2","3");
    echo "<br>";
    echo $number[1]."<br>"; //2

    $number[] = 40;
    $number[10] = 40;

    echo "<br>";

    print_r($number);
    echo "<br>";
    echo "count = ".count($number)."<br>";

    //Index with operator =>
    $mas = array(1, 3, 5=>10, 20, 30);
    echo "<br>";
    print_r($mas);
    echo "count = ".count($mas)."<br>";

    $mas = array_values($mas);
    print_r($mas);

    // Delete

    unset($mas[2]);
    echo "<br>";
    print_r($mas);

    //ассоциативные массивы

    echo "<br>";
    $mas = array("one"=>"25", "two"=>"2");
    print_r($mas);

    echo "<br>";

    $d = array(10, "2"=>20, "a"=>30, 40, "b"=>50);
    echo "<br>";
    print_r($d);
    echo "<br>";

    var_dump($d[0]); //10
    echo "<br>";
    var_dump($d['a']); //30
    echo "<br>";
    var_dump($d[2]); //20
    echo "<br>";

    $mas = array("mon"=>"monday", "th"=>"thursday", "fr"=>"friday");

    foreach($mas as $key => $val) {
        echo ("Element ".$key." equals ".$val."<br>");
    }

    foreach($mas as $index => $value) {
        echo ("Element ".$index." equals ".$value."<br>");
    }

    //Создание многомерных массивов

    $arr = array(
            "Ivanov" => array(
                    "name" => "Ivan",
                    "age" => "25",
                    "email" => "ivanov@hot.ee"
            ),
            "Petrov" => array(
                    "name" => "Petja",
                    "age" => "30",
                    "email" => "petrov@hot.ee"
            )
    );
    echo $arr["Petrov"]["email"]."<br>";
    print_r($arr);

        //вывод основных массивов
    foreach ($arr as $key => $type){
        echo "<br>"."<b>$key</b>"."<br>";
    }

    foreach ($arr as $key => $type){
        echo "<br>"."<b>$key</b>"."<br>";

        foreach ($type as $info){
            echo "<li>"."$info"."</li>";
        }
    }


    echo "<br>";

    print_r($arr["Ivanov"]);
    echo "<br>";

    foreach ($arr["Ivanov"] as $key => $value){
        echo "<br>"."$key - $value"."<br>";
    }

    echo "<br>".'count($arr)='.count($arr)."<br>";
    //*********************************

    $array = [[1,2],[3,5,7]];

    print_r($array);
    echo "<br>";

    for ($i = 0; $i < count($array); $i++){
        for ($j = 0; $j <count($array[$i]); $j++){
            echo $array[$i][$j]." ";
        }
        echo "<br>";

    }
    echo "</br>";

    $number = array("2", "1", "0", "5", "8");

    for ($i = 0; $i < count($number); $i++){
        echo $number[$i]." ";
    }
    echo "<br>";

    sort($number);

    for ($i = 0; $i < count($number); $i++){
        echo $number[$i]." ";
    }
    echo "<br>";

    rsort($number);

    for ($i = 0; $i < count($number); $i++){
        echo $number[$i]." ";
    }
    echo "<br>";


    $array1 = $array2 = array(
            "file12.txt", "file10.txt", "file2.txt", "file1.txt", "file7.txt"
    );

    print_r($array1);
    echo "<br>";

    sort($array1);
    print_r($array1);
    echo "<br>";

    natsort($array2);
    print_r($array2);
    echo "<br>";

    $a = array(10, 20, 30);
    $b = array(1 => 20, 0 => 10, 30); //$b = array("10 ",20,30);
    if ($a <> $b){
        echo "Not Equals<br>";
    }else {
        echo "Equals<br>";
    }
    if ($a !== $b){
        echo "Not Equals <br>";
    }else {
        echo "Equals<br>";
    }

    ?>



</div>
</body>
</html>