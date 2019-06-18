<?php


class InfoController
{

    public function rulesAction()
    {
        echo "Генерация страницы с правилами покупки картин";
        $content = 'rules.php';
        $template = 'template.php';
        $data = [
            'title' => 'Правила'
        ];
        echo $this->renderPage($content, $template, $data);
    }

    public function contactsAction()
    {
        echo "Генерация страницы контактов";
        $content = 'contacts.php';
        $template = 'template.php';
        $data = [
            'title' => 'Контакты'
        ];
        echo $this->renderPage($content, $template, $data);
    }

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