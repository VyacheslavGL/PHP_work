<?php
$post = $_POST;

$file = $_FILES;

var_dump($file);

$type = $file['picture']['type'];
var_dump($type);

$size = $file['picture']['size'];
var_dump($size);

function type_size($type, $size){
    for ($i = 0; $i<count($type); $i++){
        $exp = explode('/', $type[$i]);
        if ($exp[0] === 'image' && size($size)){
            echo "Файл добавлен</br>";
        }else{
            echo "Файл не добавлен size</br>";
        }
    }
}

function size($size)
{
    foreach ($size as $key => $value) {
        var_dump($value);
        if ($value <= 150000) {
            return true;
        } else {
            return false;
        }
    }
}

type_size($type, $size);

/*$name = $file['picture']['name'];
//var_dump($name);

//echo "type";
$type = $file['picture']['type'];
//var_dump($type);

$size = $file['picture']['size'];*/
//var_dump($size);
//echo "explode";
//$explode = explode('/', $type);

//var_dump($explode[0]);

/*echo "explode foreach";
foreach ($explode as $value){
    var_dump($value);
}*/

/*echo "type size </br>";

function type_size($type, $size){
    foreach ($type as $key => $value){
        $exp = explode('/', $value);
        foreach ($exp as $value){
            if ($value == 'image'){
//            echo "Файл добавлен</br>";
                size($size);
            }
        }
    }
}

function size($size){
    foreach ($size as $key => $value){
      if($value < 150000){
          echo "Файл $value добавлен</br>";return;
      }else{
          echo "Файлы не добавлены</br>";return;
      }
    }
}

type_size($type, $size);*/
//size($size);


//echo "type size </br>";
/*
function type_size($type, $size){
    foreach ($type as $key => $value){
        $exp = explode('/', $value);
        var_dump($value);
        foreach($exp as $key1=>$value1){
            var_dump($value1);
            if (($value1 == 'image') && size($size)){
                echo "Файл добавлен</br>";
            } else{
                echo "Файл не добавлен size</br>";
            }
        }

    }
}

//echo "Файл не добавлен size</br>";

function size($size){
    foreach ($size as $key => $value){
        //var_dump($value);
        if($value < 150000){
            return true;
        }else{
            return false;
        }
    }
}

type_size($type, $size);
//size($size);*/