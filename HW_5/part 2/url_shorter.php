<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>url_shorter</title>
</head>
<body>

<?php
$post = $_POST;
var_dump($post['link']);
$mylink = 'https://qps.ru/';
$link = $post['link'];

if (!filter_var($link, FILTER_VALIDATE_URL)){
    echo "Ссылка не валидна </br>"; return;
}
//создаем короткую ссылку
$short_link = substr(md5($post['link']),27);
//var_dump($short_link);

$url = 'data.txt';
//читает файл в массив.
$db_arr = file($url, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$add = 0;
$mod = 0;
for($i=0;$i<count($db_arr);$i++){
//    var_dump(strstr($db_arr[$i], ' : ', 3));
    if(strstr($db_arr[$i], ' : ', 3) == $post['link']){
        echo 'Короткая ссылка существует: '.$mylink.substr(strstr($db_arr[$i], ' : '), 3);
        $add++;
    }
}

if(!$add){
    for($i=0;$i<count($db_arr);$i++){
        if($short_link == substr(strstr($db_arr[$i], ' : '), 3)){
            $short_link.=$mod;
            echo 'Новая короткая ссылка после регенерации : '.$short_link;
            $mod++;
        }
    }
    if(!$mod){
        file_put_contents($url, $post['link'].' : '.$short_link.PHP_EOL, FILE_APPEND | LOCK_EX);
        echo 'Новая короткая ссылка : '.$mylink.$short_link;
    }
}

$current = file_get_contents($url);
var_dump($current);
?>
<p><a href="index.php">назад</a></p>

</body>
</html>