<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <?php

    class baseCalculator{
        protected $num1;
        protected $num2;

        function setNum1($num1){
            $this->num1 = $num1;
        }
        function setNum2($num2){
            $this->num2 = $num2;
        }

        function calculate(){
            printf("num1 = %d <br> num2 = %d <br>", $this->num1, $this->num2);
        }
    }

    class addCalc extends baseCalculator {
        function calculate()
        {
            $result = $this->num1 + $this->num2;
            printf("%d + %d = %d <br>", $this->num1, $this->num2, $result);
        }
    }

    class minusCalc extends baseCalculator {
        function calculate(){
            $result = $this->num1 - $this->num2;
            printf("%d - %d = %d <br>", $this->num1, $this->num2, $result);
        }
    }

    $obj = new baseCalculator();
    $obj->setNum1(2);
    $obj->setNum2(10);
    $obj->calculate();
    $obj = new addCalc();
    $obj->setNum1(2);
    $obj->setNum2(10);
    $obj->calculate();
    $obj = new minusCalc();
    $obj->setNum1(2);
    $obj->setNum2(10);
    $obj->calculate();

    ?>
</div>


</body>
</html>