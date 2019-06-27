<h2>Главная страница</h2>

<!--$pictures- isset-->

<div class="grid">
    <?php foreach ($pictures as $picture):?>
<!--        <h2>--><?php //echo $picture['title']; ?><!--</h2>-->
        <a href="/picture/show/<?php echo $picture['id'];?>">
            <img src="/img/<?php echo $picture['img'];?>" alt="Картинки">
        </a>
    <?php endforeach; ?>
</div>