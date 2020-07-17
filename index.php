<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    echo 'Task 1 <br />';
    $a = 10;
    if ($a == 10) echo 'Верно';
    else echo 'Неверно';
    echo '<hr />';

    echo 'Task 2 <br />';
    $a = '1';
    // $a = 1; Не верно
    // $a = 3; Не верно
    if ($a === '1') echo 'Верно';
    else echo 'Неверно';
    echo '<hr />';

    echo 'Task 3 <br />';
    $a = '';
    // $a = 1;
    // $a = 3; 
    // $a = -3; 
    // $a = 0; 
    // $a = null; 
    // $a = true; 
    // $a = '0'; 
    if (isset($a) === true) echo 'Верно';
    else echo 'Неверно';
    echo '<hr />';
// Исходя из лекции, функцию empty надо было использовать для 3 задания, т.к. она проверяет переменную на пустое значение, а функция isset предназначена для задания 4 (проверяет существует ли переменная), однако isset не проверяет СУЩЕСТВОВАНИЕ переменной. По логике из лекции я мог просто создать переменную $b; и проверить ее через var_dump(isset($b)); и мне должно было бы выдать true, но выдает false.     "isset — Определяет, была ли установлена переменная значением, отличным от NULL"
    echo 'Task 4 <br />';
    $b;
    // var_dump(isset($b));
    if (empty($b) == true) echo 'Верно';
    else echo 'Неверно';
    echo '<hr />';

    echo 'Task 5 <br />';
    $a = 122;
    echo fmod($a, 5) . '<br />';
    echo fmod($a, 3);
    echo '<hr />';

    echo 'Task 6 <br />';
    $a = 5;
    if ($a > 10) echo $a + 100;
    else  echo $a - 30;
    echo '<hr />';

    echo 'Task 7 <br />';
    $a = 123;
    $b = (string) $a;
    $b[1] = '0';
    echo +$b;
    echo '<hr />';

    echo 'Task 8 <br />';
    $a = 3;
    if ($a > 0 && $a < 5) echo 'Верно';
    else echo 'Неверно';
    echo '<hr />';

    echo 'Task 9 <br />';
    $a = 1;
    $b = 3;
    if ($a <= 1 && $b >= 3) echo $a + $b;
    else echo $a - $b;
    echo '<hr />';

    echo 'Task 10 <br />';
    $a = 31;
    $b = 46;
    $c = 57;
    echo ($a + $b + $c) / 3 . '<br />';
    echo $a * 2 + $c * 2 - $b * 3;
    echo '<hr />';

    echo 'Task 11 <br />';
    $a = 25;
    echo $a * 9 / 5 + 32;
    echo '<hr />';

    echo 'Task 12 <br />';
    $a = 'abcde';
    if ($a[0] == 'a') echo 'DA';
    else echo 'NET';
    echo '<hr />';

    echo 'Task 13 <br />';
    $a = 1;
    $b = 31;
    if ($a > 30 || $b > 30) echo 'DA';
    else echo 'NET';
    echo '<hr />';

    echo 'Task 14 <br />';
    $a = 6;
    $b = 7;
    $c = 6;
    $d = 4;
    // $prov = fmod($c, 6)
    if ($a > 5 && $b > 5 && fmod($c, 6) == 0 && fmod($d, 3) > 0) echo 'DA';
    else echo 'NET';
    echo '<hr />';

    echo 'Task 15 <br />';
    $a = 'You are welcome! ';
    for ($i = 1; $i <=10; $i++) echo $i . $a;
    echo '<hr />';

    echo 'Task 16 <br />';
    $a = '123123';
    if (+$a[0] + +$a[1] + +$a[2] == +$a[3] + +$a[4] + +$a[5]) echo 'DA';
    else echo 'NO';
    echo '<hr />';

    echo 'Task 17 <br />';
    $a = 6;
    $b = -7;
    $c = 14;
    $d = 0;
    if ($a > 1) $d++;
    if ($b > 1) $d++;
    if ($c > 1) $d++;
    echo 'Колличество положительных чисел: ' . $d;
    echo '<hr />';

    echo 'Task 18 <br />';
    $a = 3;
    switch($a) {
        case(1):
            $result = 'Зима';
        break;
        case(2):
            $result = 'Весна';
        break;
        case(3):
            $result = 'Лето';
        break;
        case(4):
            $result = 'Осень';
        break;
    }
    echo $result;
    echo '<hr />';

    echo 'Task 19 <br />';
    $year = 2020;
    if ((fmod($year, 4) == 0 && fmod($year, 100) > 0) || fmod($year, 400) == 0) echo $year . ' - Високосный год';
    else echo $year . ' - Невисокосный год';
    echo '<hr />';

    echo 'Task 20 <br />';
    $lang = 'en';
    $arrRu = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
    $arrEn = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

    switch($lang) {
        case('ru'):
            print_r($arrRu);
        break;
        case('en'):
            print_r($arrEn);
        break;
    }
    echo '<hr />';

    echo 'Task 21 <br />';
    $degree = 260;
    echo 'Прошло ' . floor($degree / 15) . ' Часов ';
    echo fmod($degree, 15) * 2 . ' Минут';
    echo '<hr />';


    echo 'Task 22 <br />';
    $time = 4;
    for($i = 0; $i <= 60; $i++) {
        if ($i == 4) $i += 3;
        elseif ($i == 10) $i += 3;
        elseif ($i == 16) $i += 3;
        elseif ($i == 22) $i += 3;
        elseif ($i == 28) $i += 3;
        elseif ($i == 34) $i += 3;
        elseif ($i == 40) $i += 3;
        elseif ($i == 46) $i += 3;
        elseif ($i == 52) $i += 3;
        elseif ($i == 58) break;
        if ($time == $i) echo ' Green';
    }
    for($i = 0; $i <= 60; $i++) {
        if ($i == 1) $i += 3;
        elseif ($i == 7) $i += 3;
        elseif ($i == 13) $i += 3;
        elseif ($i == 19) $i += 3;
        elseif ($i == 25) $i += 3;
        elseif ($i == 31) $i += 3;
        elseif ($i == 37) $i += 3;
        elseif ($i == 43) $i += 3;
        elseif ($i == 49) $i += 3;
        elseif ($i == 55) $i += 3;
        if ($time == $i) echo ' Red';
    }
    echo '<hr />';

    echo 'Task 23 <br />';
    $a = 0;
    for($i = 20; $i <= 45; $i++) {
        if (fmod($i, 5) == 0) $a += $i;
    }
    echo $a;
    echo '<hr />';

    echo 'Task 25 <br />';
    for($i = 0; $i <= 100; $i++) {
        echo $i . '<br />';
    }
    echo '<hr />';

    echo 'Task 26 <br />';
    $a = 12345;
    $str = (string)$a;
    for($i = 0; $i < 5; $i++) {
        if(fmod(+$str[$i], 2) == 0) $str[$i] = '0';
    }
    echo +$str;
    echo '<hr />';

    echo 'Task 27 <br />';
    for($i = 11; $i <= 33; $i++) {
        echo $i . '<br />';
    }
    echo '<hr />';

    echo 'Task 28 <br />';
    $a = 123;
    $str = (string)$a;
    for($i = 2; $i >= 0; $i--) echo +$str[$i];
    echo '<hr />';

    echo 'Task 29 <br />';
    $num = 1000;
    $a = 0;
    // while($num >= 50) {
    //     $num /= 2;
    //     $a++;
    // }
    // echo $num . ' Колл. итераций: ' . $a;

    for(;$num >= 50; $num /=2) {
        $a++;
    }
    echo $num . ' Колл. итераций: ' . $a; 
    echo '<hr />';

    echo 'Task 30 <br />';
    $num = 442158755745;
    $str = (string)$num;
    $a = 0;
    for($i = 0; $i < 12; $i++) {
        if ($str[$i] == '5') $a++;
    }
    echo $a;
    echo '<hr />';

    echo 'Task 31 <br />';
    $a = 5;
    $b = 8;
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 8; $j++) {
            echo 'A';
        }
        echo '<br />';
    }
    echo '<hr />';

    echo 'Task 32 <br />';
    $a = 0;
    $b = 2;
    $c = 5;

    $arrA = [];
    $arrB = [];
    $arrC = [];
    array_push($arrA, $a);
    array_push($arrB, $b);
  
    $a += $b;
    $b = $c - $arrA[0];
    $c = $arrA[0] + $arrB[0] + $c;

    echo $a . ' ' . $b . ' ' . $c;
    echo '<hr />';

    echo 'Task 33 <br />';
    $candy = 1000;
    $cookie = 1000;
    echo 'Покупка А: ' . ($candy * 0.3 + $cookie * 0.4);
    echo '<br />Покупка B: ' . ($candy * 2 + $cookie * 1.8) * 3;
    echo '<hr />';

    echo 'Task 34 <br />';
    $a = 13;
    $b = -1;
    if ($a == 11 && $b == -1 || $a == 14 && $b == 0 || $a == 13 && $b == 1) echo 'Восток';
    if ($a == 12 && $b == -1 || $a == 11 && $b == 0 || $a == 14 && $b == 1) echo 'Север';
    if ($a == 13 && $b == -1 || $a == 12 && $b == 0 || $a == 11 && $b == 1) echo 'Запад';
    if ($a == 14 && $b == -1 || $a == 13 && $b == 0 || $a == 12 && $b == 1) echo 'Юг';
    echo '<hr />';

    echo 'Task 35 <br />';
    $a = 5;
    for ($i = 1; $i <= $a; $i++) {
        for ($j = 1; $j <= $a; $j++) {
            echo '*';
        }
        echo '<br />';
    }
    echo '<hr />';
    
    echo 'Task 36 <br />';
    for ($i = 1001; $i <= 1025; $i += 3) {
        echo $i . ' ';
    }
    echo '<hr />';

    echo 'Task 37 <br />';
    for ($i = 100; $i >= 0; $i -= 4) {
        echo $i . ' ';
    }
    echo '<hr />';

    echo 'Task 38 <br />';
    $a = 10;
    $b = 0;
    for ($i = 1; $i <= 20; $i++) {
        $b += $a;
        $a *= 1.1;
        if ($i == 3) echo 'Пробег лыжника за второй день: ' . round($a, 1) . ' км.';   
        if ($i == 10) echo '<br />Пробег лыжника за десятый день: ' . round($a, 1) . ' км.';
        if ($i == 7) echo '<br />Пробег лыжника за первые семь дней: ' . round($b, 1) . ' км.';
        if ($b >= 80 && $b <= 95) echo '<br />На ' . ($i - 1) . ' день ему следует прекратить увеличивать пробег.';
    } 
    echo '<hr />';

?>
</body>
</html>