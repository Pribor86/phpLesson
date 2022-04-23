<!DOCTYPE html>
<html>
<style>
    body {
        background-color: darkgray;
    }
    .wrapper{
        margin-left: auto;
        margin-right: auto;
        padding-left: 16px;
        padding-right: 16px;
        background-color: darkgray;
    }
    .container{
        max-width: 1170px;
        padding-top: 50px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 16px;
        padding-right: 16px;
        background-color: #d0e7da;
        border: 1px solid black;
        font-size: 16px;
    }
    li {
        list-style-type: none; /* Убираем маркеры в списке */
    }
</style>
<body>
<div class="wrapper">
    <h1>Тест</h1>
<div class="container">
<?php
$test = simplexml_load_file("test.xml");

//Паттерн для удаления двойных пробелов, я не использовал, так как на этапе преобразования
//XML фаила в объект, лишьние пробелы удалились.
//$patternBackspace = "/\s+/i";
//$replaceToHTMLBackspace = "&nbsp";
//preg_replace ($patternBackspace, $replaceToHTMLBackspace, $question);


//метод для переобразования первой буквы в строке в заглавную
//(так как с русской кодировкой ucfirst() не работает корректно)
function mb_ucfirst($text) {
    return mb_strtoupper(mb_substr($text, 0, 1)) . mb_substr($text, 1);
}


for ($i = 0; $i < count($test -> question); $i++){
    echo "<ul>";
    //вывод вопросов / удаление пробелов в начале и конце строки / преобразование HTML символов / Первый символ в первом слове заглавный
    echo "<li><b>" . $test -> question[$i] -> attributes() -> id. ". " .
        mb_ucfirst(htmlspecialchars(trim($test->question[$i] -> name))) .
        "</b><br><ul><br>";
    foreach($test -> question[$i] -> answer as $answer){
        //вывод ответов / удаление пробелов в начале и конце строки / преобразование HTML символов / Первый символ в первом слове заглавный
        echo "<li>" . $test -> question[$i] -> attributes() -> id . "." .
            $answer -> attributes() -> id . ". " .
            mb_ucfirst(htmlspecialchars(trim($answer))) . "</li><br>";
    }
    echo "</ul></li></ul>";
}
?>
</div>
</div>
</body>
</html>