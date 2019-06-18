<?php

class Router
{

    public static function run()
    {
        $controller = 'Index';
        $action = 'index';
        $params = null;
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        if (!empty($routes[1])){
            //имя контроллера
            $controller = $routes[1];
        }
        if (!empty($routes[2])){
            //имя метода
            $action = $routes[2];
        }
        if (!empty($routes[3])){
            //параметры
            $params = $routes[3];
        }
            //    arti/cle/show    ArticleController
        $controller = ucfirst(strtolower($controller)).'Controller';
        //'IndexController' - для запроса /
        $action = strtolower($action).'Action';
        // 'indexAction'
//var_dump($controller);
//var_dump($action);
        if (!class_exists($controller)){
            echo "Класс не найден";
            return;
        }
        if (!method_exists($controller, $action)){
            echo "Метод не найден";
            return;
        }

        /*$controller = 'IndexController';
        $action = 'IndexAction';*/
//        '/info/rules' - название класса и название метода

        //'IndexController' /
//        $controller = new IndexController();
        $controller = new $controller();
//        $controller = indexAction($params);
        $controller->$action($params);
    }
}