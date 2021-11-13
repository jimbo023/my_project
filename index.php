<?php
/*
1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
Ноль можно считать положительным числом.
*/

function math($a, $b){
    if($a >= 0 && $b >= 0) {
        return $a - $b;
    } else if ($a < 0 && $b <0) {
        return $a * $b;
    } else {
        return $a + $b;
    }
}

echo math(-5,5);



/*
2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать
 вывод чисел от $a до 15.
*/

$c = 5;

switch($c){
    case 0:
        echo "0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
        break;
    case 1:
        echo "1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
        break;
    case 2:
        echo "2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
        break;
    case 3:
        echo "3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
        break;
    case 4:
        echo "4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
        break;
    case 5:
        echo "5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
        break;
    case 6:
        echo "6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
        break;
    case 7:
        echo "7, 8, 9, 10, 11, 12, 13, 14, 15";
        break;
    case 8:
        echo "8, 9, 10, 11, 12, 13, 14, 15";
        break;
    case 9:
        echo "9, 10, 11, 12, 13, 14, 15";
        break;
    case 10:
        echo "10, 11, 12, 13, 14, 15";
        break;
    case 11:
        echo "11, 12, 13, 14, 15";
        break;
    case 12:
        echo "12, 13, 14, 15";
        break;
    case 13:
        echo "13, 14, 15";
        break;
    case 14:
        echo "14, 15";
        break;
    case 15:
        echo "15";
        break;    
}

// на уроке было требование сделать с break, поэтому такой код вышел =)

/*
3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. 
Обязательно использовать оператор return.
*/

function sum($arg1, $arg2) {
    return $arg1 + $arg2;
}

function minus($arg1, $arg2) {
    return $arg1 - $arg2;
}

function multiplay($arg1, $arg2) {
    return $arg1 * $arg2;
}

function share($arg1, $arg2) {
    return $arg1 / $arg2;
}

echo sum(2,2);
echo minus(2,2);
echo multiplay(2,2);
echo share(2,2);


/*
4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
 где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
 В зависимости от переданного значения операции выполнить одну из арифметических операций
 (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/

function mathOperation($arg1, $arg2, $operation=null) {
    switch($operation){
        case "sum":
            return $arg1 + $arg2;
            break;
        case "minus":
            return $arg1 - $arg2;
            break;
        case "multiplay":
            return $arg1 * $arg2;
            break;
        case "share":
            return $arg1 / $arg2;
            break;
        default:
            return "operation is not valid or operation missing";
     }
 }

echo mathOperation(1,2); 


/*
6. *С помощью рекурсии организовать функцию возведения числа в степень. 
Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
*/

function power($val, $pow){
    if($pow === 0){
        return 1;
    };

    return $val * pow($val, $pow - 1);
}

echo power(5, 3);


/*
7. *Написать функцию, 
которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
*/

function time_d(){
    $h = date('H');
    $m = date('m');

    if($h === 1 || $h === 21) {
        echo "$h час ";
    } else if ($h === 2 || $h === 3 || $h === 4 || $h === 22 || $h === 23 || $h === 24){
        echo "$h часа ";
    } else {
        echo "$h часов ";
    }

    if($m === 1 || $m === 11 || $m === 21 || $m === 31 || $m === 41 || $m === 51){
        echo "$m минута ";
    } else if ($m === 2 || $m === 3 || $m === 4 || $m === 22 || $m === 23 || $m === 24 || $m === 32 || $m === 33 || 
    $m === 34 || $m === 42 || $m === 43 || $m === 44 || $m === 52 || $m === 53 || $m === 54) {
        echo "$m минуты ";
    } else { 
        echo "$m минут ";
    }
};
time_d();
//