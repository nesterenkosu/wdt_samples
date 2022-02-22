<?php
	$user_name = "Vasya";
	echo "Текст в двойных кавычках: <b>Hello</b>, <i>$user_name</i>!<br/>";
	echo 'Текст в одинарных кавычках: <b>Hello</b>, <i>$user_name</i>!<br/>';
	
	$os_name = `ver`;
	echo "Вы используете $os_name<br/>";
	
	//Ссылки на переменные
	$a = 1;
	echo "a=$a<br/>";
	
	$b = &$a;//Жёсткая ссылка
	$b = 4;
	echo "a=$a<br/>";
	
	$c="a";
	$$c = 5; //Символьная ссылка
	echo "a=$a<br/>";
	
	$x = "10";
	$y = 10;
	
	if($x==$y)
		echo "Переменные равны<br/>";
	
	//Массивы
	//$my_arr = Array("one","two","three"); //PHP ver < 7
	
	//$my_arr = ["one","two","three"]; //PHP ver >= 7
	
	$my_arr = Array(
		10=>"one",
		20=>"two",
		30=>"three"
	);
	
	echo "<hr/>";
	
	echo "<h1>Список элементов массива (цикл for):</h1>";
	
	echo "<ul>";
	
	for($i=0;$i<count($my_arr);$i++) 
		echo "<li>".$my_arr[$i]."</li>";	
	
	echo "</ul>";
	
	echo "<hr/>";
	
	echo "<h1>Список элементов массива (цикл foreach):</h1>";
	
	echo "<ul>";
	
	foreach($my_arr As $v) 
		echo "<li>".$v."</li>";	
	
	echo "</ul>";
	
	echo "<ul>";
	
	foreach($my_arr As $k=>$v) 
		echo "<li>Индекс: $k Значение: $v</li>";	
	
	echo "</ul>";
	
	echo "<hr/>";
	
	echo "<h1>Просмотр массивов с помощью отладочных функций</h1>";
	echo "<h2>Функция print_r</h2>";
	
	echo "<xmp>";
	
	print_r($my_arr);
	
	echo "</xmp>";
	
	echo "<h2>Функция var_dump</h2>";
	
	
	echo "<xmp>";
	
	var_dump($my_arr);
	
	echo "</xmp>";
	

	
	//Многомерный массив
	$multi_dim= Array(
		Array("a","b","c"),
		Array("1","2"),
		Array(
			Array(1,2),Array(3,4)
		)
	);
	
	echo "<h3>Так выглядит многомерный массив</h3>";
	
	echo "<xmp>";
	
	var_dump($multi_dim);
	
	echo "</xmp>";
	