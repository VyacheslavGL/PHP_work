<div class="grid">
        <div>
            <h2><?php echo $picture['title']; ?></h2>
            <a href="/picture/show/<?php echo $picture['id'];?>">
                <img src="/img/<?php echo $picture['img'];?>" alt="Картинки">
            </a>
        </div>
</div>



<!--<div class="pic">
        <div>
            <h2><?php /*echo $picture->getTitle();*/?></h2>
            <a href="/picture/show/<?php /*echo $picture->getId($id);*/?>">
                <?php /*foreach ($picture->getPaths() as $path): */?>
                <img src="/img/<?php /*echo $path;*/?>" alt="Картинки">
                <?php /*endforeach; */?>
            </a>
        </div>
</div>-->

