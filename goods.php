<?php
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
    <?php foreach ($goods as $good):?>
    <h3><?php echo $good['title']; ?></h3>
    <img src="/img/<?php echo $good['img']; ?>" alt="Картинка">
    <p><?php echo $good['price']; ?></p>
    <a href="good.php?id=<?php echo $good['id']; ?>">Подробнее</a>
    <?php endforeach; ?>
</section>

</body>
</html>