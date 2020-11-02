<?php
// HW_2_1
/* Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
Ноль можно считать положительным числом. */

    $a = rand(-6, 6);
    $b = rand(-6, 6);

    echo "a = ${a} <br>";
    echo "b = ${b} <br>";

    if ($a >= 0 && $b >= 0){
        $c = $a - $b;
		echo "Результат разницы: ${c} <br>";
	} else if ($a < 0 && $b < 0){
		$c = $a * $b;
		echo "Результат произведения: ${c} <br>";
	} else if ($a >= 0 && $b < 0 || $a < 0 && $b >= 0){
		$c = $a + $b;
		echo "Результат суммы: ${c} <br>";
    } else
        echo "Упс! Ошибка";
?>

<?php
// HW_2_2
/* Присвоить переменной $а значение в промежутке [0..15].
С помощью оператора switch организовать вывод чисел от $a до 15. */

    $a = rand(0, 15);

    echo "<br> a = ${a} <br>";

    switch($a) {
        case "${a}":
            echo "Счастливое число: ${a} <br>";
            break;
    }
?>

<?php
// HW_2_3
/* Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
Обязательно использовать оператор return. */

    function sum($x, $y){
        return $x + $y;
    }
    function subtraction($x, $y){
        return $x - $y;
    }
    function multiplication($x, $y){
        return $x * $y;
    }
    function division($x, $y){
        return $x / $y;
    }
    $a = rand(1, 8);
    $b = rand(1, 8);
    echo "<br> a = ${a} <br>";
    echo "b = ${b} <br>";

    $c = sum($a, $b);
    echo "Сложение = ${c} <br>";

    $d = subtraction($a, $b);
    echo "Вычитание = ${d} <br>";

    $f = multiplication($a, $b);
    echo "Умножение = ${f} <br>";

    $g = division($a, $b);
    echo "Деление = ${g} <br>";
?>

<?php
// HW_2_4
/* Реализовать функцию с тремя параметрами: 
function mathOperation($arg1, $arg2, $operation),
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
В зависимости от переданного значения операции выполнить одну из арифметических операций 
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch). */

    function mathOperation($arg1, $arg2, $operation){
        switch($operation){
            case 'сложение':
                return $arg1 + $arg2;
                break;
            case 'вычитание':
                return $arg1 - $arg2;
                break;
            case 'деление':
                return $arg1 / $arg2;
                break;
            case 'умножение':
                return $arg1 * $arg2;
                break;
        }
    }
    $x = rand(1, 5);
    $y = rand(1, 5);
    $z = 'сложение';

    $u = mathOperation($x, $y, $z);

    echo "<br> arg1 = ${x} <br>";
    echo "arg2 = ${y} <br>";
    echo "operation = ${z} <br>";
    echo "Арифметическая операция: ${z} = ${u} <br>";
?>

<?php
// HW_2_6
/* *С помощью рекурсии организовать функцию возведения числа в степень.
Формат: function power($val, $pow), 
где $val – заданное число, $pow – степень.*/

    function power($val, $pow){
        if ($pow === 1) {
            return $val;
        } else {
            return $val * power($val, $pow - 1);
        }
    }
    $x = rand(1, 5);
    $y = rand(1, 5);
    $u = power($x, $y);
    echo "<br> Результат возведения числа ${x} в степень ${y} = ${u} <br>";
      
?>

<?php
// HW_2_5
/* Посмотреть на встроенные функции PHP.
Используя имеющийся HTML-шаблон,
вывести текущий год в подвале при помощи встроенных функций PHP.*/

    $today = date("Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <hr>
    <footer>
        <p> <?= $today ?> </p>
    </footer>

</body>
</html>