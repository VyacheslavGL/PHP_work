<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title><?php echo $title;?></title>
</head>
<body>

<nav>
    <ul>
        <li><a href="/">Главная</a> </li>
        <li><a href="/info/rules">Правила</a></li>
        <li><a href="/info/contacts">Контакты</a></li>
    </ul>
</nav>

<div>
    <?php include_once $content;?>
</div>



</body>
</html>