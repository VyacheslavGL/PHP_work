<?php
/*require_once __DIR__.'/../Views/template.php';
require_once __DIR__.'/../Views/contacts.php';*/

//можно вставить в папку Core
namespace  Web\FrontController\Controllers;

class RenderPage
{

    public function renderPage($content, $template, $data = [])
    {
        extract($data);
//        $title = 'Главная'; //ключ становится переменная а значение значением переменной
        ob_start(); //открываем буфер
        include_once __DIR__ . '/../Views/'.$template;
        $page = ob_get_contents(); //считывает в буфер
        ob_end_clean();  //закрываем буфер
        return $page;
    }
}