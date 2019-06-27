<?php
require_once __DIR__.'/../vendor/autoload.php';
use Web\FrontController\Core\Router;

Router::run();

//require_once __DIR__ . '/../src/Controllers/IndexController.php';
//require_once __DIR__ . '/../src/Controllers/InfoController.php';
//require_once __DIR__ . '/../src/Controllers/ArticleController.php';
//require_once __DIR__ . '/../src/Controllers/PictureController.php';
//require_once __DIR__ . '/../src/Core/Router.php';
//var_dump(__DIR__);

$url = $_SERVER['REQUEST_URI'];
//var_dump($url);


/*if ($url == '/'){
    $controller = new IndexController();
    $controller->indexAction();
}elseif ($url == '/info/rules'){
    $controller = new InfoController();
    $controller->rulesAction();
}//и т.д для каждой страницы*/



//    /имя_контроллера/имя_метода/данные

//Художник и его сайт с картинами
/// Главная страница (картины) - запрос /
/// Страница с описанием одной страницы
/// Статьи  - запрос /article/show - article - имя контроллера/ show - имя метода
/// Страница с одной статьей - запрос /article/show/2 , где 2 id -статьи
/// Правила покупки и заказа картин - запрос: /info/rulse
/// Контакты запрос:  /info/contacts



/*echo "</br>";
echo "Я твоя $url страница";

$a = explode("/", $url);

var_dump($a);

//echo $a[1];

*/?><!--

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


<?php /*if ($url):*/?>
<a href="<?php /*echo $a[1]*/?>">Ссылка</a>
<?php /*endif;*/?>

</body>
</html>
-->