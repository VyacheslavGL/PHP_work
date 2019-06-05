<?php
$post = $_POST;

$file = $_FILES;

var_dump($file);

$type = $file['picture']['type'];
var_dump($type);

$size = $file['picture']['size'];
var_dump($size);

function type_size($type, $size){
    $count = count($type);
    for ($i = 0; $i<$count; $i++) {
        $exp = explode('/', $type[$i]);
       echo ($exp[0] === 'image') ? size($size[$i]) : "Файл не добавлен из-за недопустимого формата файла</br>";
    }
}


function size($size){
    if ($size <= 150000){
       return "Файл добавлен </br>";
    }else{
    return "Файл не добавлен из-за большого размера</br>";
    }
}

type_size($type, $size);



