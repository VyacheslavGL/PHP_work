<?php
$weeks = [1=>'Понедельник', 2=>'Вторник', 3=>'Среда', 4=>'Четверг', 5=>'Пятница', 6=>'Суббота', 7=>'Воскресенье'];

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>weeks</title>
</head>
<body>

<section>
    <?php foreach ($weeks as $key =>$week):?>
        <?php if($key != date("N")):?>
            <h4><?php echo $week."</br>";?></h4>
        <?php endif;?>
        <?php if($key == date("N")):?>
            <h1><b><?php echo $week;?></b></h1>
        <?php endif;?>
    <?php endforeach; ?>
</section>

</body>
</html>
