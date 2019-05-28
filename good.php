<?php
$get = $_GET;
$id = $get['id'];
//var_dump($id);

$goods = [
    [
        'id' => 1,
        'title' => 'piano',
        'price' => 4341,
        'img' => 'roland-v-piano-virtualnoe-fortepiano.jpg'
    ],
    [
        'id' => 2,
        'title' => 'Guitar',
        'price' => 1250,
        'img' => 'ede27c1a0a4e1de9bd0b9474986107dc.jpg'
    ],
    [
        'id' => 3,
        'title' => 'Baraban',
        'price' => 2345,
        'img' => '3c7c8e1272332818d7108b39d4e598d6.jpg'
    ]
];

$good = $goods[$id-1];
//var_dump($good['price']);
$auth = false;

$user = $user ?? '123';

if($user){
    $auth = true;
}
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>goods</title>
</head>
<style>
    img{
        width: 300px;
        height: auto;
    }
</style>
<body>

<section>
    <h3><?php echo $good['title']; ?></h3>
    <img src="img/<?php echo $good['img'];?>" alt="Картинки">
    <p><?php echo $good['price'];?></p>
    <?php if($auth): ?>
    <textarea cols="50" rows="20">Тут ваш текст</textarea></br>
    <input type="submit" value="Отправить">
    <?php endif; ?>
<!--Добавление товара-->
</section>

Отображение блока комментария для авторизированного пользователя


</body>
</html>