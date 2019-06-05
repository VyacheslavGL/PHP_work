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
    for ($i = 0; $i<$count; $i++){
        $exp = explode('/', $type[$i]);
        if ($exp[0] === 'image' && size($size[$i])){
            echo "Файл добавлен $exp[1] - $size[$i] </br>";
        }else{
            echo "Файл не добавлен $exp[1] - $size[$i]</br>";
        }
    }
}

function size($size){
            if ($size <= 150000) {
                return true;
            } else {
                return false;
            }

}

type_size($type, $size);



