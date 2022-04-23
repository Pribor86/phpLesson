<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
<?php
class Figure{
    protected $square;
    protected $color;
    const SIDES = 0;

    function infoAboutFigure(){
        echo "I am a Figure. I have ".self::SIDES." sides. My color is ".$this->color." and my square is ".$this->square.".";
    }
}
class Rectangle extends Figure {
    const SIDE = 4;
    private $a;
    private $b;
    function setA($a) {
        $this->a = $a;
    }

    function setB($b) {
        $this->b = $b;
    }

    function getArea($a, $b) {
        $result = $this->a * $this->b;

        printf("S = %d * %d<br>",
            $this->a = $a, $this->b = $b);

        return printf($result);

    }
}
class Square extends Figure {
    const SIDE = 4;
    private $a;
    function setA($a) {
        $this->a = $a;
    }

    function getArea($a) {
        $result = $this->a * $this->a;

        printf("S = %d * %d<br>",
            $this->a = $a, $this->a = $a);

        return printf("S = %d <br>", $result);

    }
}
class Triangle extends Figure {
    const SIDE = 3;
    private $a;
    private $b;
    private $c;
    function setA($a) {
        $this->a = $a;
    }

    function setB($b) {
        $this->b = $b;
    }

    function setC($c) {
        $this->c = $c;
    }

    public function getArea() {
        $p = ($this->a + $this->b + $this->c) / 2;
        $result = sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));

        printf("S = %d * %d * %d<br>", $this->a, $this->b, $this->c);

        return printf("S = %d <br>", $result);

    }

}

$obj = new Rectangle();
$obj->setA(10);
$obj->setB(20);
$obj->getArea(10, 20);
$obj = new Square();
$obj->setA(10);
$obj->getArea(10);
$obj = new Triangle();
$obj->setA(10);
$obj->setB(20);
$obj->setC(40);
$obj->getArea();


 ?>
<!--    Задача

 1)* Создать класс Figure - плоская геометрическая фигура.
 У этого класса есть свойства: площадь, цвет.
 И константа: количество сторон.

 2)* Для класса Figure написать метод infoAbout().
 Этот метод возвращает сообщение: "Это геометрическая фигура!".

 3) От класса Figure унаследовать классы: Rectangle, Triangle, Square.

 4) Добавить для Rectangle приватные свойства a,b - длины сторон.

 5) Добавить для Square приватное свойство a - длина стороны.

 6) Добавить для Triangle приватные свойства a, b, c - длины сторон.

 7) Для каждого из классов Rectangle, Triangle, Square
 определить значение константы: количество сторон.

 8) Создать конструкторы для классов Rectangle, Triangle, Square для
 инициализации значений длин сторон.

 9) Для каждого из классов Rectangle, Triangle, Square
 реализовать метод getArea() - подсчет площади
 Методы возвращают значение площади (return $result)

 10) Для каждого из классов Rectangle, Triangle, Square
 переопределить метод infoAbout() так,
 что б он возвращал строку такого содержания
 (пример для квадрата):"Это класс квадрата. У него 4 стороны".
 Аналогично для других классов.

 11) Сделать методы infoAbout() финальными.

 10) Для каждого класса Rectangle, Triangle, Square создать по 2 объекта
 (с передачей значений длин сторон).

 11) Вызвать для всех объектов методы getArea().


Подсказки по математике:
1) Площадь прямоугольника: S = a * b;
2) Площадь квадрата:       S = a * a;
3) Площадь треугольника:   http://www-formula.ru/index.php/2011-09-19-02-39-2..-->

</div>


</body>
</html>
