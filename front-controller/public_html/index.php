<?php
require_once __DIR__ . '/../src/Controllers/IndexController.php';
require_once __DIR__ . '/../src/Controllers/InfoController.php';
require_once __DIR__ . '/../src/Controllers/ArticleController.php';
require_once __DIR__ . '/../src/Core/Router.php';
//var_dump(__DIR__);

$url = $_SERVER['REQUEST_URI'];
//var_dump($url);
Router::run();

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



?>