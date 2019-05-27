<?php

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
sort($arr);
foreach ($arr as $key => $value){
    foreach ($value as $k => $v) {
//        echo $k . ' - ' . $v . "</br>";
      /*  print_r($value);
        echo "</br>";*/
        echo ($key+1).' - '. $k . " = " . $v . "\n";
        echo "</br>";
    }
}

array_multisort($arr);
print_r($arr);


//https://snipp.ru/view/110

?>
