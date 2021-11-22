<form method="post">
    <input type="input" placeholder="Введите первое значение" name="number1">
    <input type="input" placeholder="Введите второе значение" name="number2">
    <input type="submit" value="Сумма" name="sum">
    <input type="submit" value="Минус" name="min">
    <input type="submit" value="Умножить" name="mul">
    <input type="submit" value="Поделить" name="dev">
</form>

<?php

$link = mysqli_connect('localhost', 'root', '', 'gb');

if ($link) {
    if (isset($_POST["number1"]) && isset($_POST["number2"])) {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        $querySum = "SELECT $number1 + $number2;";
        $queryMin = "SELECT $number1 - $number2;";
        $queryMul = "SELECT $number1 * $number2;";
        $queryDev = "SELECT $number1 / $number2;";

        if (isset($_POST["sum"])) {
            $resultSum = mysqli_query($link, $querySum);
            while ($row = mysqli_fetch_array($resultSum)) {
                echo "Сумма $number1 + $number2 = $row[0]";
            }
        } else if (isset($_POST["min"])) {
            $resultMin = mysqli_query($link, $queryMin);
            while ($row = mysqli_fetch_array($resultMin)) {
                echo "Вычитание $number1 - $number2 = $row[0]";
            }
        } else if (isset($_POST["mul"])) {
            $resultMul = mysqli_query($link, $queryMul);
            while ($row = mysqli_fetch_array($resultMul)) {
                echo "Произведение $number1 * $number2 = $row[0]";
            }
        } else if (isset($_POST["dev"])) {
            if ($number1 == 0 || $number2 == 0) {
                echo "При деление на ноль число не определено. Попробуй поменять значения";
            } else {
                $resultDev = mysqli_query($link, $queryDev);
                while ($row = mysqli_fetch_array($resultDev)) {
                    echo "Деление $number1 / $number2 = $row[0]";
                }
            }
        }
    }
} else {
    die("Troubles connecting to BD");
};
