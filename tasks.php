<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28.05.2019
 * Time: 11:04
 */

//Отсортировать массив по 'price'
$arr = [
    '1' => [
        'price' => 10,
        'count' => 2
    ],
    '2' => [
        'price' => 5,
        'count' => 5
    ],
    '3' => [
        'price' => 8,
        'count' => 5
    ],
    '4' => [
        'price' => 12,
        'count' => 4
    ],
    '5' => [
        'price' => 8,
        'count' => 4
    ],
];
asort($arr);
foreach ($arr as $key => $value){
    foreach ($value as $k => $v) {
//        echo $k . ' - ' . $v . "</br>";
        /*  print_r($value);
          echo "</br>";*/
        echo $key.' - '. $k . " = " . $v . "\n";
        echo "</br>";
    }
}
array_multisort($arr);
print_r($arr);
//https://snipp.ru/view/110
echo "</br>";
echo "</br>";
$array = array(
    3 => 'яблоко',
    1 => 'апельсин',
    5 => 'виноград'
);

$array2 = array(
    3 => ['яблоко' => 5,
          'вишни' => 3
        ],
    1 => ['яблоко' => 2,
          'вишни' => 6
        ],
    5 => ['яблоко' => 1,
          'вишни' => 8
        ]
);

$array3 = ['яблоко', 'вишни', 'апельсины', 'помидоры', 'арбуз', 'грейтфрукт'];

krsort($array3);
print_r($array3);
echo "</br>";


sort($array2);
foreach ($array2 as $key => $value){
    print_r($value);
    echo "</br>";
}
echo "</br>";
asort($array);
foreach ($array as $value){
    print_r($value);
    echo "</br>";
}
echo "</br>";
//shuffle($array);
//natsort($array);
natcasesort($array);
print_r($array);

echo "</br>";

$array4 = array(-1, 0, 10, 'текст', 'a', 'b');
sort($array4);
print_r($array4);

echo "</br>";

natsort($array4);
$array4 = array_reverse($array4);
print_r($array4);

echo "</br>";
echo "</br>";
echo "---------------";
echo "</br>";

array_multisort($arr, SORT_ASC);
var_dump($arr);

echo "</br>";
echo "</br>";
echo "---------------";
echo "</br>";

$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar1, $ar2);
var_dump($ar1);
var_dump($ar2);
/*
https://snipp.ru/view/110
Чтобы сохранить ключи применяется функции asort() и arsort().
sort
rsort
ksort -  По возрастанию:
krsort -  По убыванию:
shuffle - перемешивает массив
natsort - сортирует массив без учета регистра символов. нет реверса, но можно применить
    natsort($array4);
    $array4 = array_reverse($array4);
    print_r($array4);
array_multisort - Сортировка многомерных массивов
*/



?>