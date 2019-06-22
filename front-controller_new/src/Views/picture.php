<!--<div class="grid">-->
<!--        <div>-->
<!--          заголовок статьи-->
<!--            <h2>--><?php //echo $picture->getTitle(); ?><!--</h2>-->
<!--            <a href="/picture/show/--><?php //echo $picture->getId($id);?><!--">-->
<!--                <img src="/img/--><?php //echo $picture->getPaths()[0];?><!--" alt="Картинки">-->
<!--            </a>-->
<!--        </div>-->
<!--</div>-->



<div class="pic">
        <div>
            <h2><?php echo $picture->getTitle();?></h2>
            <a href="/picture/show/<?php echo $picture->getId($id);?>">
                <?php foreach ($picture->getPaths() as $path): ?>
                <img src="/img/<?php echo $path;?>" alt="Картинки">
                <?php endforeach; ?>
            </a>
        </div>
</div>

