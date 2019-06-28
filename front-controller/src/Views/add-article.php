<?php if (isset($addResult)):?>
    <h4><?php echo $addResult; ?></h4>
<?php endif; ?>


<form method="post" action="/article/add">
    <div class="form-group">
        <label for="title">Название статьи</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="название" required>
    </div>
    <div class="form-group">
        <label for="description">Описание статьи</label>
        <textarea class="form-control" id="description" name="description" placeholder="описание" required></textarea>
    </div>
    <div class="form-group">
        <label for="yearCreated">Дата публикации</label>
        <input type="date" id="yearCreated" name="yearCreated" required>
    </div>

    <button type="submit" class="btn btn-secondary">Добавить</button>
</form>




<!--
<?php /*if (isset($addResult)): */?>
    <p><?php /*echo $addResult; */?></p>
<?php /*endif;*/?>

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
</form>-->