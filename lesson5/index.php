<html>
<head>
    <title>Lesson</title>
</head>

<body>
<div>
    <?php

    define("C", "c");

    class test{
        const A = 10;
        function show_A(){
            define("B","b");
            echo "A = ".self::A."<br>";  //внутри класса
            echo B.", ".C."<br>";

        }
    }//end class test

    echo "test::A = ".test::A."<br>";  //по имени класса

    //$a = new test();
    $a = new test;

    $a -> show_A();

    echo $a::A."<br>";  // через объект (PHP > 5.3.0)

    echo C."<br>";
    echo B."<br>";

    echo "<br> <br><br><br>";
    //********************************************************
    //1
    class Item{
        //private $name ="Item";
        protected $name ="Item";

        // класс с конструктором
        /*
        function Item($name = "NewItem"){
            $this->name = $name;
        }
        */
        // конструктор PHP - 5
        function __construct($name = "NewItem"){
            $this->name = $name;
        }


        function getName(){
            //доступ к свойству класса из метода
            return $this->name;
        }

        function setName($n){
            //изменение свойства класса из метода
            $this->name = $n;
        }

        function printItem(){
            print "<br> Item:".$this->name."<br>";
        }
    } // end class Item

    // Создание класса унаследованного от другого класса

    class PriceItem extends Item{
        private $price;

        function __construct($name, $price = 0){

            parent::__construct($name);

            $this->price = $price;

        }
        //переопределене метода родительского класса
        function getName(){
            //return "(PriceItem: ) ".$this->name;
            //return "(PriceItem: ) ".parent::getName();

        }

        function printItem(){
            print "<br> Item:".$this->name."-- price:".$this->price."<br>";
        }
    }

    /*******************************************/

    $item = new Item();
    echo $item->getName();		//"Item"
    echo "<br>";
    $item->setName("Item 2021");
    print $item->getName();     //"Item 2021"
    echo "<br>";

    $item->printItem();

    //******

    $item = new PriceItem("PriceItem 1111");
    print $item->getName()."<br>";

    $item = new PriceItem("PriceItem 1111", 5.50);
    print $item->getName()."<br>";

    //***************
    $objectArray = array();
    array_push($objectArray, new PriceItem("1", 5.50));
    array_push($objectArray, new Item("2"));
    array_push($objectArray, new PriceItem("3", 25.50));

    //выяснение класса объекта
    foreach($objectArray as $obj){
        if(get_class($obj)  == "PriceItem"){
            print "<br> ok! <br>";

            print $obj->getName()."<br>";
            $obj->printItem();

        }else{

            //die("<br> error>".get_class($obj) ."<br>");
            print ("<br> error>".get_class($obj) ."<br>");
            $obj->printItem();
        }
    }





    ?>



</div>
</body>
</html>