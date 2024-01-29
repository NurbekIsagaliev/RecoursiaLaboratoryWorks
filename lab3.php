<?php

/*
Написать функцию проверяющую строку на палиндром. НА ДОМ ДО 22.07.2023
*/
/*Решение задачи 3:
*/
echo '<pre>';
echo 'Task3';
echo '</pre>';

$str = 'karsak';

function isPalindrom($str)
{

    if (strlen($str) % 2 == 0) {

        for ($i = 0; $i <  strlen($str) / 2; $i++) {

            if ($str[$i] != $str[strlen($str) - ($i + 1)]) {

                return 'Не палиндром!';
            }
        }

        return 'Палиндром!';
    } else {
        for ($i = 0; $i <  intdiv(strlen($str), 2); $i++) {

            if ($str[$i] != $str[strlen($str) - ($i + 1)]) {

                return 'Не палиндром!';
            }
        }

        return 'Палиндром!';
    }
}


          

echo isPalindrom($str) . '<br>';



/*
Дана строка состоящая из слов разделенных пробелами, 
найти количество слов и собрать массив из слов.
V trave sidel kuznechik
[
    0 => V,
    1 => trave,
    2 => sidel,
    3 => kuznechik
]
*/
$str = 'V trave sidel kuznechik';
$str = $str . ' ';
$wordArray = [];
$word = '';
$counter = 0;
// echo $str[8] . '<br>';
for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == ' ') {
        $wordArray[] = $word;
        $word = '';
        $counter++;
    } else {
        $word = $word . $str[$i];
    }
}
echo '<pre>';
print_r($wordArray);
echo '</pre>';
echo 'Количество слов в предложении = ' . $counter . '<br>';
//Дома сделать расшифровку четвертой задачи!!
//Расшифровка задачи  4:

/*
$str = 'V trave sidel kuznechik';
$str = $str . ' ';

$wordArray = []; 
$word = ''; 
$counter = 0; 

A: 
$i = 0;
if ($i < strlen($str)) {
    B: 
    $counter = 0;
    if ($str[$i] == ' ') {
        $wordArray[] = $word; 
        $word = ''; 
        $counter++;
        goto B; 
    } else {
        $word = $word . $str[$i]; 
        goto B; 
    }

    $i++;
    goto A; 
}

echo '<pre>';
print_r($wordArray); 
echo '</pre>';
echo 'Количество слов в предложении = ' . $counter . '<br>'; 





 */



