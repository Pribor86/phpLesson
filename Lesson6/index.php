<html>
  <head>
    <title>Lesson String</title>
  </head>

<body>
 <div>
  <?php
		// Демонстрация работы некоторых спецификаторов типа
		$number = 543;
     printf ("Десятичное:   %d<br />"   , $number );
	 printf ("Двоичное:     %b<br />"   , $number );

	 printf ("Вещественное: %f<br />"   , $number );
	 printf ("Вещественное: %.2f<br />"   , $number );


	 printf ("Восьмеричное: %o<br />"   , $number );
     printf ("Строка:       %s<br />"   , $number );
     printf ("Шестнадцатеричное (строчные): %x<br />" , $number );
     printf ("Шестнадцатеричное (прописные): %X<br />", $number );

	 print "<pre>";
	 printf ("Вещественное: |%8.2f| <br/>"   , $number );
	 printf ("Десятичное:   |%8d| <br/>"   , $number );
	 printf ("Десятичное:   |%-8d|<br/>"   , $number );


	  // Использование функции printf()  для форматирования списка цен на изделия

	 $products = array (
                        "Кресло зеленое"  => 222.4,
                        "Подсвечник"      =>   4  ,
                        "Столик кофейный" => 80.6
               );

	 print "<pre>";

	  printf ("%-20s %23s\n", "Наименование", "Цена");
      printf ("%' -43s\n", "");


	 foreach ( $products as $key => $val ) {
	         printf ( "%20s%23.2f \n", $key, $val );
     }

	   printf ("%'=43s\n", "");

   	   $dosh = sprintf("%.2f", 2.334454);
       print "$dosh долларов\n\n";


	  $dates = array (
               array ( 'mon' => 12, 'mday' => 25, 'year' => 2001 ),
               array ( 'mon' =>  5, 'mday' => 23, 'year' => 2000 ),
               array ( 'mon' => 10, 'mday' => 29, 'year' => 2001 )
               );


		$format = include("local_format.php");

      foreach( $dates as $date ) {
         printf( "$format", $date['mon'], $date['mday'], $date['year'] );
      }

	  //  Разделение строки на лексемы  с помощью функции strtok()

    $test  = "Alex,Pavel  , Petr;Kirill";
    $delims = ",;";
    $word = strtok( $test, $delims );

	print "<pre>";

	while ( is_string( $word ) ) {
        if ( $word ) {
            print "$word <br/>";
        }
        $word = strtok( $delims );
    }


	//strstr — Находит первое вхождение подстроки
	$email  = 'name@example.com';
    $domain = strstr($email, '@');
    echo $domain; // выводит @example.com

	print "<pre>";  //!!!!

	$user = strstr($email, '@', true); // Начиная с PHP 5.3.0
    echo $user; // выводит name

	print "<pre>";
  	$test = "String";
      print $test[0]; // Выводит "S"
      print $test[2]; // Выводит "r"

	  //print "<pre>";
	  $string  = "<p>Это <i> пример </i> текста,<br/>который ";
      $string .= "переходит на новую строку</p><b>===Конец===</b>";
      print strip_tags($string, "<p>");
		// strip_tags — Удаляет HTML и PHP-теги из строки


	  $text = "\t\t\tСтроку надо почистить     ";
      print "<pre>$text</pre>";
      $text = ltrim ($text);
      print "<pre>$text</pre>";

	  // rtrim ($text)


  ?>



 </div>
</body>
</html>