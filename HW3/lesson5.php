<?php


//1
//Напишите функцию, которая принимает массив,
//а возвращает сумму его элементов.
//Если передан не массив, либо в нём нет элементов,
//либо некоторые элементы не являются числами,
//то должно возвращаться false.


$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr1 = [0];
$num = 1;
function arraySum()
{
    $sum = 0;
    $arg = func_get_args();
    if (empty($arg)) return "Input your arguments";
    foreach ($arg as $num) {
        if(empty($num)) return "Its empty array";
        foreach ($arg as $k => $value) {
            if (!is_array($value)) return "It's not a array";
            foreach ($value as $num) {
                if (!is_numeric($num)) return "It's not a numeric array!";
                $sum += $num;
            };
        };
        return "Elements sum are {$sum}.";
    }
};

echo arraySum($arr);
echo '<br>';
echo arraySum($num);
echo '<br>';
echo arraySum($arr1);
echo '<br>';

//2
//Анониманая функция
$averagedArray = function(array $arr): int
{
    return array_sum($arr) / sizeof($arr);
};

echo $averagedArray([20, 40, 30]);
echo '<br>';


function arrayGenerator(array $arr, callable $callback){
    foreach ($arr as $a) {
        yield $callback($a);
    }
}

$array2 = array(
    array(4, 5, 6),
    array(7, 8, 9),
    array(8, 9, 10),
    array(9, 10, 11)
);

foreach (arrayGenerator($array2, $averagedArray) as $num) {
    echo "$num<br>";
}








