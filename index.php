<?php
$integerFirst = 24;		//Откорректировал название переменных в соответствии с  camelCase-стилем
$integerSecond = 6;
$floatFirst = 3.14;
$floatSecond = 4.13;
$stringFirst = "Текст первой строки";
$stringSecond = "Текст второй строки";
$booleanFirst = True;
$booleanSecond = False;
$arrSongs = ['Deutschland', 'Ausländer', 'Sonne'];
echo "Строки: $stringFirst, $stringSecond;" . '<br>' . "Целые числа: $integerFirst, $integerSecond;" . '<br>' . "Числа с плавающей точкой: $floatFirst, $floatSecond;" . '<br>' . "Двоичные данные (True/false):  $booleanFirst, $booleanSecond" . '<br>';
print_r($arrSongs);
echo '<br>';
$arrNames = ['Preston', 'John', 'Mike'];
print_r($arrNames);
echo '<br>';

// Пример однострочного комментария

# Пример однострочного комментария №2

/*Пример 
многострочного
 комментария*/

$hello = 'Hello ';			
$world = $hello . 'world.';
Echo "$world";
echo '<br>';
$helloWorld = "Привет, ";
$helloWorld .= "Мир.";
Echo "$helloWorld";
echo '<br>';
echo "$integerFirst" / "$integerSecond";
echo '<br>';
echo "$integerFirst" * "$integerSecond";
echo '<br>';
$arrNumbers = ['10', '11', '12'];
echo "Первые два элемента массива: $arrNumbers[0], $arrNumbers[1]";
echo '<br>';
$arrNumbers[3] = "13";
print_r($arrNumbers);
echo '<br>';
$arrDog = ['age' => '9', 'name' => 'Hachiko'];
		
echo 'Значение под ключом "age": '. $arrDog['age']; // Исправил обращение к именнованому индексу ассоциативного массива
echo '<br>';
$arrayDate = ['months' => ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август'], 
				'days' => ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Субботу', 'Воскресенье', 'День X']
			];
echo '3 элемент первого подмассива: ' . $arrayDate['months'][2];
echo '<br>';
echo '5 элемент второго подмассива: ' . $arrayDate['days'][4];
echo '<br>';
echo 'элемент по индексу 7 второго подмассива: ' . $arrayDate['days'][7];
?>

