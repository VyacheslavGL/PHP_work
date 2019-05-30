<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 30.05.2019
 * Time: 10:49
 */

//1. Дана строка, содержащая полное имя файла (например, 'C:\OpenServer\testsite\www\someFile.txt'). Написать функцию, которая сможет выделить из подобной строки имя файла без расширения.
$string = 'C:\OpenServer\testsite\www\someFile.txt';

//$pice = explode("\\", $string);
//$pice2 = str_split($string);
//
//var_dump($pice);
////var_dump(count($pice2));
//
//$price_and = explode(".", $pice[4]);
//var_dump($price_and[0]);

//echo "-------------second 2-----------";

echo '------Задание 1-------';
function str($q){
    $pice = explode("\\", $q);
    $price_and = explode(".", $pice[4]);
    var_dump($price_and[0]);
}

str($string);

echo '------Задание 2-------';
//Написать функцию - конвертер строки. Возможности (в зависимости от второго аргумента - флаг, который указывает, какую именно операцию следует выполнить):
// 1) перевод всех символов в верхний регистр,
// 2) перевод всех символов в нижний регистр,
// 3) перевод всех символов в нижний регистр и первых символов слов в верхний регистр.

$str = "Каждый оХотНИк Желает зНаТь ГДЕ сиДит ФАЗан";

function strNew($str, $reg){
    switch ($reg){
    case 1:
        $apper = mb_strtoupper($str, "UTF-8");
        var_dump($apper); break;
    case 2:
        $lower = mb_strtolower($str, "UTF-8");
        var_dump($lower); break;
    case 3:
        $words = mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
        var_dump($words); break;
    default:
        var_dump('Вы ввели неправильный параметр');
    }
}

strNew($str, 1);
strNew($str, 2);
strNew($str, 3);
strNew($str, 4);


echo '------Задание 3-------';
//3.Создать функцию по преобразованию нотаций: строка вида 'this_is_string' преобразуется в 'thisIsString' (CamelCase-нотация)

$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
var_dump($onlyconsonants);

$dz = 'this_is_string';
//$Fullstr = str_replace($dz, "_", mb_convert_case($dz, MB_CASE_TITLE, "UTF-8"));
$Fullstr = str_replace($dz, "_", 'ThisIsString');
var_dump($Fullstr);

echo '------Задание 4-------';
//4.Сгенерировать 5 массивов из случайных чисел. Вывести массивы и сумму их элементов на экран. Найти массив с максимальной суммой элементов. Вывести его на экран еще раз. Генерация массива и подсчет суммы - разные функции

function arr_step(){
    $arr_sum = [];
    foreach(range(5, 150, rand(30,100)) as $value){
        array_push($arr_sum, $value);
    }
    var_dump($arr_sum);
    var_dump(array_sum($arr_sum));

}

function five_arr($a){
    for ($i=0; $i<$a; $i++){
        arr_step();
    }
}

five_arr(5);










echo "-------------test-----------";
$pass = 'mypassword2';
$hash = crypt($pass, rand(0, 1000).'$1$rasmusle$');

var_dump($hash);

$orig = "I'll \"walk\" the <b>dog</b> now";

$a = htmlentities($orig);

$b = html_entity_decode($a);

var_dump($a);
var_dump($b);

$a1 = array("1","2","3");
$a2 = array("a");
$a3 = array();

echo "a1 is: '".implode("','",$a1)."'<br>";
echo "a2 is: '".implode("','",$a2)."'<br>";
echo "a3 is: '".implode("','",$a3)."'<br>";


/*
str_replace - Заменяет все вхождения строки поиска на строку замены
substr -
strrpos
str_split - Преобразует строку в массив
crypt - Необратимое хеширование строки

htmlentities - Преобразует все возможные символы в соответствующие HTML-сущности
html_entity_decode - оставляет все как есть

htmlspecialchars - Преобразует специальные символы в HTML-сущности


strtoupper
strtolower

mb_strtolower;
mb_strtoupper() - Приведение строки к верхнему регистру
mb_convert_case() - Производит смену регистра символов в строке
strtolower() - Преобразует строку в нижний регистр
*/

?>