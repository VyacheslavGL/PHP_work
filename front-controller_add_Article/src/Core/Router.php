<?php

namespace Web\FrontController\Core;

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

        $controller = 'Web\FrontController\Controllers\\'.ucfirst(strtolower($controller)).'Controller';
        //'IndexController' - для запроса /
        $action = strtolower($action).'Action';
        // 'indexAction'

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