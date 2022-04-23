<?php

//1
function bighello(){
    print "<h1>HELLO</h1>";
}
bighello();

//

$num = -321;
$numNew = abs($num);
print $numNew."</br>";

//

//функция с дним аргументом
function printBR($txt){
    //
    print $txt."<br>";
}

printBR("Lesson 3");

function printBR1($txt = ""){
    //
    print $txt."<br>";
}

printBR1();

function headingWrap($txt, $level = 3){
    print "<h$level>".$txt."</h$level>".'<br>';
}
for ($i = 1; $i < 7; $i++) {
    headingWrap("Dimon", $i);
}

function addFive($num){
    if(is_int($num)) {
        $num += 5;
        print "<br>addFive: num = " . $num . "<br>";
    } else {
        print "Error";
    }
}

function _addFive(&$num){
    if(is_int($num)) {
        $num += 5;
        print "<br>addFive: num = " . $num . "<br>";
    } else {
        print "Error";
    }
}
 addFive(10);

$number = 10;
addFive("a");
addFive(10);

echo "Test";
_addFive($number); //перезаписывает значение входяыщей переменной


print $number.printBR1();

//7
function addNums($firstNum, $secondNum){ //функция  возвращает значение
    return $firstNum + $secondNum;
}

$a = addNums(33, 66);
print $a.printBR1();

function &returnAddFive(&$num){
    $num += 5;
    return $num;
}
printBR1();
$num1 = 10; print $num1."<br>";  // 10
$num1Return = &returnAddFive($num1);
print "num1Return = ".$num1Return."<br>";//
print "num1 = ".$num1."<br>";
//

$num1 += 10;
print "num1Return = ".$num1."<br>";
print "num1 = ".$num1Return."<br>";
printBR1();

// простая анонимная функция
$my_func = create_function('$a, $b', 'return $a + $b;');
print $my_func(3,9);
printBR1();

//анонимная функция

$hello = function($string){
    echo "$string"."<br>";
};

$hello("Dimon toxic");
echo gettype($hello);

function get_array(){
    return array(10, "string", true);
}
printBR1();
printBR1();

$arr = get_array();
foreach($arr as $item){
    echo $item."<br>";
}
echo "<br>";

list($var1, $var2, $var3) = get_array();
echo $var1."<br>".$var2."<br>".$var3."<br>";

list($var1, $var2) = get_array();
echo $var1."<br>".$var2."<br>";

// строгая типизация

function square(int $number){
    return $number * $number;
}
echo square(5); //25
echo square(3.9); //9

function sum(int $a, float $b){
    return $a + $b;
}
printBR1();
echo sum(5, 10);//15
printBR1();
echo sum(1.5, 10);//11
printBR1();

echo sum(1, 1.5);//2.5

printBR1();
var_dump(sum(1.5, 10));
printBR1();

//указание типа возвращаемого значения

function supply():array{
    return array(75, 3.14159, "PHP", True);
}
 var_dump(supply());
$arr = supply();
printBR1();
foreach($arr as $data){
    echo $data."<br>";
}
echo "<br>";

function subscript($txt){
    return "<sub>$txt</sub><br>";
}

function tagWrap($tag, $txt, $func = ""){
    if(function_exists($func)){
        $txt = $func($txt);
    }
    return "<$tag>$txt</$tag><br>";
}
echo tagWrap("b", "Dimon toxic");
echo tagWrap("i", "Dimon toxic");
echo tagWrap("i", "Dimon toxic", "subscript");

print tagWrap('i', '"Курсив в ковычках"', create_function('$txt', 'return "<h1>$txt</h1>";'));

function summaN(){
    if(func_num_args() == 0){
        echo "Необходимы параметры!";
        return;
    }
    $summa = 0;
    for($i = 0;$i < func_num_args(); $i++){
        $arg = func_get_arg($i);
        if(!is_numeric($arg)){
            echo "Необходимы числа";
            return;
        }
        $summa += $arg;
    }
    return $summa;
}
 echo summaN(1, 2, 3);