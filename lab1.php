<?php
echo '<hr>Task3<br>';
/*
Даны целые числа A и B (A < B). 
Вывести все целые числа от A до B включительно; 
при этом число A должно выводиться 1 раз, 
число A + 1 должно выводиться 2 раза и т. д.
$a = 4;
$b = 9;
4
5 5
6 6 6 
7 7 7 7
8 8 8 8 8
9 9 9 9 9 9 
*/
$a = rand(1, 5);
$b = rand(6, 10);
echo 'A = ' . $a . '<br>';
echo 'B = ' . $b . '<br>';
$n = 0;
for ($i = $a; $i <= $b; $i++) {
    $n++;
    for ($k = 1; $k <= $n; $k++) {
        echo $i . ' ';
    }
    echo '<br>';
}
//Дома сделать расшифровку
/*Самостоятельная работа,Расшифровка Task3:

/*
$a = 4;
$b = 9;
$n = 0;
$k = 1;
$i = $a;

A: if( $i <= $b ){
    $n++;
    $k = 1;
    B:
    if( $k <= $n ){
      echo $i . ' ';
      $k++;
      goto B;

    }
    echo '<br>';
    $i++;
    goto A;
}


*/

//Task 6 Домой. Сдать до 08.07.2023
echo '<hr>Task6<br>';
$a = rand(1, 5);
$b = rand(6, 10);
echo 'A = ' . $a . '<br>';
echo 'B = ' . $b . '<br>';
$sum = 0;
for ($i=$a; $i <=$b ; $i++) { 
    if ($i % 2 != 0) {
        $sum = $sum + $i;
    }
}
echo '<br>Summa= '.$sum;

/*
$a = 4;
$b = 8;
$sum = 0;
$i = $a;
A:
if( $i <= $b){
    if( $i % 2 ! = 0){
        $sum = $sum + $i;
    }
    $i++;
    goto A;
}
echo '<br>Summa= '.$sum;
--------------------
4 5 6 7 8
$i = 5;
$sum = $sum +$i = 0 + 5 = 5;
$i = 7;
$sum = $sum +$i = 5 + 7 = 12;
$sum = 12;
 */


 echo '<hr>Task7<br>';
/*
Дано трехзначное число. Найти сумму и произведение его цифр. 
Вывести число, полученное при прочтении исходного числа 
справа налево. Вывести число, полученное при перестановке 
цифр сотен и десятков исходного числа 
(например, 123 перейдет в 213).
$a = 123;
$sum = 1 + 2 + 3;
$proizv = 1 * 2 * 3;
321
213
*/
$a = rand(100, 999);
echo 'A = ' . $a . '<br>';
$x = intdiv($a, 100);
$y = intdiv($a % 100, 10);
// $y = intdiv($a, 10) % 10;
$z = $a % 10;
echo 'X = ' . $x . '<br>';
echo 'Y = ' . $y . '<br>';
echo 'Z = ' . $z . '<br>';
$sum = $x + $y + $z;
$proizv = $x * $y * $z;
echo 'Sum = ' . $sum . '<br>';
echo 'Proizv = ' . $proizv . '<br>';
echo $z . $y . $x . '<br>';
echo $y . $x . $z;

/*
$a = 123;
$x = intdiv(123,100)=1;
$y = intdiv(123%100,10)=intdiv(23,10)=2;
$z = 123 % 10 =3;
echo 'X = ' . $x . '<br>';
echo 'Y = ' . $y . '<br>';
echo 'Z = ' . $z . '<br>';
$sum = $x + $y + $z;
$proizv = $x * $y * $z;
echo 'Sum = ' . $sum . '<br>';
echo 'Proizv = ' . $proizv . '<br>';
echo $z . $y . $x . '<br>';
echo $y . $x . $z;

*/
 
