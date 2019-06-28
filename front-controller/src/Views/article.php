<h1>Наши статьи!</h1>

<div id="article">
    <?php foreach ($articles as $article):?>
        <div>
            <!--заголовок статьи-->
            <h2><?php echo $article['title']; ?> - <?php echo $article['yearCreated']; ?></h2>
<!--            <a href="/article/show/--><?php //echo $article['id'];?><!--"></a>-->
            <p><?php echo $article['description']; ?> <a href="/article/showOne/<?php echo $article['id'];?>">Подробнее</a></p>

        </div>
    <?php endforeach; ?>
</div>



