<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
<!--
1. Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, 
разность, произведение и частное (результат деления).
-->  

<?php 

$a = 10;
$b = 2;

echo 'Сумма: ';
echo $a + $b;
echo '<br />';

echo "Разность: ";
echo $a - $b;
echo '<br />';


echo 'Произведение: ' . $a * $b;
echo '<br />';

$c = $a / $b;
echo "Частное: {$c}";
echo '<br />';


/* Даны три числа x = 2,y = 6 и z = 9. Найдите (x+1)4−2(z−2x^2+y^2) */ 

$x = 2;
$y = 6;
$z = 9;

$result = ($x+1) * 4 - 2 * ($z - 2 * $x ** 2 + $y ** 2);

echo 'Результат вычисления равен ' . $result;

echo '<br />';


/* 3. Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и 
результат присвойте переменной $c. Затем создайте переменную $d, 
присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите 
в переменную $result. Выведите на экран значение переменной $result. */

$a = 17;
$b = 10;

$c = $a - $b;

$d = 7;

$result = $c + $d;

echo $result;
echo '<br />';


/* 4. Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих 
переменных и операции сложения строк выведите на экран фразу 'Привет, 
Мир!'. */

$text1 = 'Привет, ';
$text2 = 'Мир!';

echo $text1 . $text2 . '<br />';
print "{$text1} {$text2}";

echo '<br />';


/* 5. Создайте переменную $name и присвойте ей ваше имя. Выведите на экран 
фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя. */

$name = 'Иван';

echo "Привет, {$name}!";

echo '<br />';


/* 6. Создайте переменную $num и присвойте ей значение '12345'. Найдите 
сумму цифр этого числа. */

$num = '12345';

$result1 = $num[0] + $num[1] +$num[2] + $num[3] +$num [4];

echo $result1;

echo '<br />';


/* 7. Напишите скрипт, который считает количество секунд в часе, в сутках, в 
месяце, в году и сколько прошло секунд с начала 2000 года. */

function n7() {

    $secInHour = 60 * 60;
    $secInDay = $secInHour * 24;
    $secInMonth = $secInDay * 30; 

    echo "Секунд в часе - " . $secInHour . ", cекунд в сутках - " . $secInDay . ", cекунд в месяце - " . $secInMonth . ' секунд.';
    echo '<br />';
    echo 'С 2000 года по этот год прошло - ' . (date("Y") - 2000) * ($secInMonth * 12); 
}

n7();

echo '<br />';


/* 8. Создайте три переменные - час, минута, секунда. С их помощью выведите 
текущее время в формате 'час:минута:секунда'. */

$hour = date("H");
$min = date("i");
$cecond = date("s");

echo "{$hour}:{$min}:{$cecond}";

echo '<br />';


/*9 Переделайте приведенный код так, чтобы в нем использовались операции 
+=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться. 
Код для переделки: 

$var = 1;
$var = $var + 12;
$var = $var - 14;
$var = $var * 5;
$var = $var / 7;
$var = $var + 1;
$var = $var - 1;
echo $var; 
*/

$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
++$var;
$var--;
echo $var; 

echo '<hr />';


/* 10. Создайте константу и присвойте ей значение - ваша фамилия, создайте 
соответствующие переменные со сл. значениями: ваше имя, ваше отчество, 
ваш возраст. Проверьте существует ли созданная константа, если да, то 
выведите фразу "Меня зовут <ваша фамилия> (сокр. <ваше имя> и сокр. 
ваше отчество). Мне <ваш возраст> лет". Каждая фраза должна начинаться с 
новой строки. Например:
"Меня зовут Иванов (И. И.).
Мне 5 лет."  */

define('SURNAME', "Внук");

//echo SURNAME;

$name = 'Иван';
$patr = 'Николаевич';
$age = 33;

if (defined('SURNAME')) {

    echo "\"Меня зовут " . SURNAME . " ({$name[0]}. {$patr[0]}.)." . '<br />' . 'Мне ' . $age . ' года."';
}

?>

</body>
</html>