<?php
echo 'Task1<br>';
/*
 Создайте двумерный массив состоящий из 5 элементов каждый из которых состоит из 10 случайных чисел в 
 диапазоне от 0 до 100.
 */

$arr = [];
for ($i = 0; $i < 3; $i++) {
    $arr[] = [];
    for ($j = 0; $j < 5; $j++) {
        $arr[$i][] = rand(0, 10);
    }
}
echo '<pre>';
print_r($arr);
echo '<pre>';
/*
$i = 1;
$j = 5;
-----------------------
$i = 0;
A:
if ($i < 3) {
    $arr[] = [];
    $j = 0; 
    B:
    if ($j < 5) {
        $arr[$i][] = rand(0, 100);
        $j++;
        goto B;
    }
    $i++;
    goto A;
}
-----------------------
[
    0 => [
        0 => 6,
        1 => 65,
        2 => 1,
        3 => 15,
        4 => 100
    ],
    1 => [

    ]
]
*/

echo '<hr>Task2<br>';

/*
Найдите сумму всех элементов массива из задачи 1.
*/
$sum = 0;
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        $sum = $sum + $arr[$i][$j];
    }
}
echo '<pre>';
print_r($arr);
echo '</pre>';
// echo 'Sum = ' . $sum . '<br>';
/*
$i = 1;
$j = 0;
$sum = 474; // 64 + 27 // 91 + 60 // 151 + 63 // 214 + 25 // 259 + 63
322 + 88 // 410 + 64
---------------------------
$i = 0;
A:
if ($i < count($arr)) {
    $j = 0;
    B:
    if ($j < count($arr[$i])) {
        $sum = $sum + $arr[$i][$j];
        $j++;
        goto B;
    }
    $i++;
    goto A;
}
---------------------------
*/

echo '<hr>Task3<br>';
/*
Заполнить массив числами, кратными 5 в диапазоне от 0 до случайного числа (100 - 200).
*/
$a = rand(100, 200);
echo 'A = ' . $a . '<br>';
$limit = rand(0, $a);
echo 'Limit = ' . $limit . '<br>';
$arr3 = [];
for ($i = 0; $i < $limit; $i++) {
    if ($i % 5 == 0) {
        $arr3[] = $i;
    }
}
echo '<pre>';
print_r($arr3);
echo '</pre>';
//Домой сделать расшифровку
//Расшифровка задачи номер 5:
/*
$a = rand(100,200);
$a = 100;
$limit = rand(0,100);
$limit = 2;
---------------------------------
$i = 0;
$arr3 = [];
---------------------------------
A:
if($i < $limit){
   if( $i % 5 == 0) {
    $arr3[] = $i;
    
   }
   $i++;
   goto A;
}

[
    0 => 0,
]
 */


echo '<hr>Task4<br>';
/*
Дан массив состоящий из случайного количества случайных чисел в диапазоне от (-100 до 100).
Найти сумму отрицательных элементов. Сначала создать массив (1 цикл), следом считать сумму (1 цикл).
*/
$arr4 = [];
$limit = rand(1, 20);
for ($i = 0; $i < $limit; $i++) {
    $arr4[] = rand(-100, 100);
}

for ($i=0; $i < count($arr4) ; $i++) { 
    if( $arr4[$i] < 0 ) {
        $sum += $arr4[$i];
    }
    }
    
echo('<br>'.'Сумма отрицательных элементов  в  массиве  равна:  '.$sum).'<br>';

echo '<pre>';
print_r($arr4);
echo '</pre>';

//ЗАдача 5 на дом, сдать до 16.07.2023
//Задача5.Определить каких элементов  больше  из задачи 4: положительных или  отрицательных.
echo '<hr>Task5<br>';
$arr5 = [];
$limit = rand(1, 20);
$countNegative = 0;
$countPositive = 0;

for ($i = 0; $i < $limit; $i++) {
    $arr5[] = rand(-100, 100);
}

for ($i=0; $i <count($arr5) ; $i++) { 
    if ( $arr5[$i] > 0 ) {
        $countPositive++;
    } elseif ( $arr5[$i] < 0 ) {
      $countNegative++;
    }
}

echo 'В  массиве  всего количество элементов:  ' .count($arr5) . '<br>';
echo 'Положительных элементов : ' . $countPositive . '<br>';
echo 'Отрицательных элементов : ' . $countNegative . '<br>';

if( $countPositive > $countNegative ) {
    echo 'Положительных элементов  больше';
}  elseif( $countPositive < $countNegative ) {
    echo 'Отрицательных элементов  больше';
} else {
    echo 'В данном массиве Положительных и Отрицательных элементов равное количество: ' .$countNegative + $countPositive;
}




echo '<hr>Task6<br>';
/*
Требуется вывести массив из задачи 4 в обратном порядке.
*/
$arr6 = [];
for ($i = count($arr4) - 1; $i >= 0; $i--) {
    $arr6[] = $arr4[$i];
}
echo '<pre>';
print_r($arr6);
echo '</pre>';
/*
$i = 16;
-------------------
$i = count($arr4) - 1;
A:
if ($i >= 0) {
    $arr6[] = $arr4[$i];
    $i--;
    goto A;
}
-----------------------
[
    0 => 98,
    1 => 54,
    2 => -93,
    3 => 43,
]
*/

echo '<hr>Task7<br>';
$arr7 = [];
$n = 4;
$counter = 1;
for ($i = 0; $i < $n; $i++) {
    $arr7[$i] = [];
    if ($i % 2 == 0) {
        for ($j = 0; $j < $n; $j++) {
            $arr7[$i][$j] = $counter;
            $counter++;
        }
    } else {
        for ($j = $n - 1; $j >= 0; $j--) {
            $arr7[$i][$j] = $counter;
            $counter++;
        }
    }
} 

/*
$i = 1;
$j = 0;
$counter = 8;
------------------------
$n = 4;
$counter = 1;
$i = 0;
A:
if ($i < $n) {
    $arr7[$i] = [];
    if ($i % 2 == 0) {
        $j = 0;
        B:
        if ($j < $n) {
            $arr7[$i][$j] = $counter;
            $counter++;
            $j++;
            goto B;
        }
    } else {
        $j = $n - 1;
        B:
        if ($j >= 0) {
           $arr7[$i][$j] = $counter;
            $counter++;
            $j--;
            goto B;
        }
    }
    $i++;
    goto A;
}
----------------------------------
[
    0 => [
        0 => 1,
        1 => 2,
        2 => 3,
        3 => 4
    ],
    1 => [
        3 => 5,
        2 => 6,
        1 => 7,
        0 => 8
    ]
]
*/

echo '<table border="1">';
for ($i = 0; $i < count($arr7); $i++) {
    echo '<tr>';
    for ($j = 0; $j < count($arr7[$i]); $j++) {
        echo '<td>' . $arr7[$i][$j] . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
