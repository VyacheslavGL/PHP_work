<!--//форма добавления картины-->
<?php if (isset($addResult)): ?>
    <p><?php echo $addResult; ?></p>
<?php endif;?>

<form method="post" action="/article/add">
    <p>
        <label>Название: <input type="text" name="title"></label>
    </p>
    <p>
        <label>Описание: </label></br>
        <textarea name="description" rows="10" cols="50""></textarea>
    </p>
    <p>
        <label>Дата: <input type="date" name="yearCreated"></label>
    </p>
    <p>
        <input type="submit" value="Добавить">
    </p>
</form>