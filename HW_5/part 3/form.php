<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Выберите файлы для загрузки формата image не больше 1.5 Мб</h1>
<form action="form_handler.php" method="post" enctype="multipart/form-data"> <!--указываем когда в форме есть возможность загрузки файлов-->
    <p><input type="text" name="login" placeholder="логин"></p>
    <p><input type="file" name="picture[]" accept="image/*" multiple></p> <!--multiple  picture[] для многих загрузок-->
    <p><input type="submit" value="Отправить"></p>
</form>

</body>
</html>
