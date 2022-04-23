<html>
  <head>
    <title>Lesson</title>
  </head>

<body>
 <div>
	<?php
  
	
	echo  "Hello, Dimon";
	echo "<BR>";

    print ("<br> Hi! <br>");

    //phpinfo();
    $a = 1; $b = 2; //global area

    function Test(){
        global $a; //link to variable in global area
        echo $a;
    }

    Test();

//    function Sum(){
//        global $a, $b;
//        $a = NULL; $b = 45; //global area
//        $b = $b + $a;
//        echo "<br>Sum: ";
//        echo $b; //3
//    }

    function Sum(){
        $GLOBALS["b"] = $GLOBALS["b"] + $GLOBALS["a"];
    }

    Sum();
    echo "<br>";
    echo $b;

    echo "<br>".$b."<br>"; //3
    echo "<br>"."$b"."<br>"; //3
    echo "<br>".'$b'."<br>"; //$b
    echo "<br>".'$b = '."$b"."<br>"; //$b = 3

    #Static variable

    function TestStatic(){
        static $a = 0;
        echo $a."<br>";
        $a++;
    }

    TestStatic();
    TestStatic();
    TestStatic();

    $a = "hello";
    $$a = "world";

    echo "$a $($a)"."<br>";
    echo "$a $hello"."<br>";

    //

    $foo = "0"; //строка (ASCI)

    echo gettype($foo)."<br>";

    $foo++; //string "1" (ASCI 49)

    echo $foo." = ".gettype($foo)."<br>";

    $foo = $foo + 1.3;

    echo $foo." = ".gettype($foo)."<br>";

//    $foo = $foo + "10 XXX";
//    echo $foo." = ".gettype($foo)."<br>"; //15 ???????

    define("PI", 3.14);
    define("password", "aleks123", true);
    echo PI."<br>";
    echo pi."<br>";

    echo Password."<br>";
    echo PassWord."<br>";

    //Демонстрация рабюоты некоторых спецификаторов типа

    $number = 5;
    printf("Decimal: %d<br>", $number);
    printf("Decimal: %5d<br>", $number);//???
    printf("Binary: %b<br>", $number);
    printf("substantial: %f<br>", $number); //5.00000
    printf("substantial: %.2f<br>", $number);//5.00

    $a = PHP_INT_MAX;

    echo $a."<br>";

    echo var_dump($a)."<br>";
    echo var_dump($a)."<br>";


	?>


 
 </div>
</body>
</html>
