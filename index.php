<html>
<head>
    <title>Task 1</title>
    <style>
    table, th, td {
        border: 1px solid black;
        padding: 5px;
    }
    </style>
</head>
<body>
<div>
    <?php
    /* Описание скалярных переменных */
    $a = 15;# целое

    $fl = 3.14;   # с плавающей точкой
    $boo = TRUE;    # boolean
    $str = "stroka";   # строка
    $nol = 0;           # разбираемая строка
    $pusto = "";           # неразбираемая строка



    $s1 = "Переменная a = $a \n";
    $s2 = 'Переменная a = $a \n';
    /* Описание массива */
    $mas = array( "one" => TRUE,
        1   => -20,
        "three" => 3.14);
    $mas[]="two";
    $mas["four"]=4;

    /* Описание константы */
    define("HOST", "moodle.eek.ee");

    /* Вывод значения переменной на экран */
    echo $a, "\n";

    ?>
    <table>
        <tr>
            <th>
                Task number
            </th>
            <th>
                Implementation
            </th>
            <th>
                Result
            </th>
        </tr>
        <tr>
            <th>1</th>
            <td><pre>echo $a.", ".$fl.", ".$boo.", ".$str</pre></td>
            <td><?php echo $a.", ".$fl.", ".$boo.", ".$str?></td>
        </tr>
        <tr>
            <th>2</th>
            <td><pre>function Sum(){
                global $a, $str;
                $sum = $a + (integer)$str;
                echo $sum;
                }
                Sum();</pre></td>
            <td><?php
                function Sum(){
                global $a, $str;
                $sum = $a + (integer)$str;
                echo $sum;
                }
                Sum();
            ?></td>
        </tr>
        <tr>
            <th>3</th>
            <td><pre>function Compare(){
                    global $a, $str;
                    var_dump($a > $str);
                    echo "&lt;br&gt;";
                    var_dump($a < $str);
                    echo "&lt;br&gt;";
                    var_dump($a == $str);
                    echo "&lt;br&gt;";
                    var_dump((string)$a === $str);
                };
                Compare();</pre></td>


            <td><?php function Compare(){
                    global $a, $str;
                    var_dump($a > $str);
                    echo "<br>";
                    var_dump($a < $str);
                    echo "<br>";
                    var_dump($a == $str);
                    echo "<br>";
                    var_dump((string)$a === $str);
                };
                Compare();
                ?></td>
        </tr>
        <tr>
            <th>4</th>
            <td><pre>function Compare4(){
                    global $nol, $pusto;
                    var_dump($nol == $pusto);
                    echo "&lt;br&gt;";
                    var_dump($nol === (integer)$pusto);
                }
                Compare4();</pre></td>
            <td><?php function Compare4(){
                    global $nol, $pusto;
                    var_dump($nol == $pusto);
                    echo "<br>";
                    var_dump($nol === (integer)$pusto);
                }
                Compare4();
                ?></td>
        </tr>
        <tr>
            <th>5</th>
            <td><pre>echo (strcmp($s1, $s2));</pre></td>
            <td><?php
                echo (strcmp($s1, $s2));
                ?></td>
        </tr>
        <tr>
            <th>6</th>
            <td><pre>echo $mas["one"],", ", $mas[2],", ", $mas[3]; // $mas[3] не существует</pre></td>
            <td><?php
                echo $mas["one"],", ", $mas[2],", ", $mas[3]; // $mas[3] не существует
            ?></td>
        </tr>
        <tr>
            <th>7</th>
            <td><pre>var_dump($mas);</pre></td>
            <td><?php
                var_dump($mas);
                ?></td>
        </tr>
        <tr>
            <th>8</th>
            <td><pre>echo(implode(", ", $mas));</pre></td>
            <td><?php
                echo(implode(", ", $mas));
                ?></td>
        </tr>
        <tr>
            <th>9</th>
            <td><pre>$name = "a";
                echo "${$name}";</pre></td>
            <td><?php
                $name = "a";
                echo "${$name}";
                ?>
            </td>
        </tr>
        <tr>
            <th>10</th>
            <td><pre>$ref=&$a;
                echo '$a = ' . $a;
                echo "&lt;br&gt;" . '$ref = ' . $ref;
                $ref = 20;
                echo "&lt;br&gt;" . '$a = ' . $a;
                echo "&lt;br&gt;" . '$ref = ' . $ref;</pre></td>
            <td><?php
                $ref=&$a;
                echo '$a = ' . $a;
                echo "<br>". '$ref = ' . $ref;
                $ref = 20;
                echo "<br>" . '$a = ' . $a;
                echo "<br>" . '$ref = ' . $ref;
                ?></td>
        </tr>
        // "&lt;br&gt;"
        <tr>
            <th>11</th>
            <td><pre>echo HOST;</pre></td>
            <td><?php
                echo HOST;
                ?></td>
        </tr>
        <tr>
            <th>12</th>
            <td><pre>echo ($str . $nol . 1);</pre></td>
            <td><?php
                echo ($str . $nol . 1);
                ?></td>
        </tr>
        <tr>
            <th>13</th>
            <td><pre>$colours = array("каждый" =>"red", "охотник"=>"orange",
                "желает"=>"yellow", "знать"=>"green",
                "где"=>"cyan", "сидит"=>"blue", "фазан"=>"violet",);
                ksort($colours);
                echo "&lt;table&gt;";
                    echo "&lt;tr&gt;";
                        foreach($colours as $key => $value){
                        echo "&lt;td&gt;{$key}&lt;/td&gt;";
                        }
                        echo "&lt;/tr&gt;";
                    foreach($colours as $key=> $value){
                    echo "&lt;td bgcolor={$value}&gt;".$value."&lt;/td&gt;";
                    }
                    echo "&lt;/tr&gt;";
                        echo "&lt;/table&gt;";</pre>></td>
            <td><?php
                $colours = array("каждый" =>"red", "охотник"=>"orange",
                    "желает"=>"yellow", "знать"=>"green",
                    "где"=>"cyan", "сидит"=>"blue", "фазан"=>"violet",);

                ksort($colours);
                
                echo "<table>";
                echo "<tr>";
                foreach($colours as $key => $value){
                    echo "<td>{$key}</td>";
                }
                echo "</tr>";
                foreach($colours as $key=> $value){
                    echo "<td bgcolor={$value}>".$value."</td>";
                }
                echo "</tr>";
                echo "</table>";
                ?></td>
        </tr>
        <tr>
            <th>14</th>
            <td><pre>function f_color($numb = null){
                    if($numb == null){
                        echo 'число не задано';
                        return;
                    }
                    if($numb % 2 == 0){
                        echo '&lt;div style="color: green"&gt;'.$numb.' четное число&lt;/div&gt;&lt;br&gt;';
                    }else{
                        echo '&lt;div style="color: red"&gt;'.$numb.' нечетное число&lt;/div&gt;&lt;br&gt;';
                    }
                }
                f_color(8);
                f_color(9);
                f_color();</pre></td>
            <td><?php
                function f_color($numb = null){
                    if($numb == null){
                        echo 'число не задано';
                        return;
                    }
                    if($numb % 2 == 0){
                        echo '<div style="color: green">'.$numb.' четное число</div><br>';
                    }else{
                        echo '<div style="color: red">'.$numb.' нечетное число</div><br>';
                    }
                }
                f_color(8);
                f_color(9);
                f_color();
                ?></td>
        </tr>
    </table>
</div>

</body>
</html>
