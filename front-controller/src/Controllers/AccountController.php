<?php


namespace Web\FrontController\Controllers;
use Web\FrontController\Core\Controller;
use Web\FrontController\Models\UserRepository;

class AccountController extends Controller
{
    private $userRepository; //был доступ к данным из базы

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function registrationAction()
    {
        session_start();
        //GET - окно регистрации - если ссылка то всегда GET
        //POST - собираем данные со страницы
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $data = [
                'title' => 'Регистрация',
                'auth' => isset($_SESSION['name'])
            ];
            echo $this->renderPage('registration.php', 'template.php', $data);
        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $post = $_POST;
            $params = [
                'username' => $post['name'],
                'email' => $post['email'],
                'phone' => $post['phone'],
                'role' => 'USER',
                'hash' => password_hash($post['password'], PASSWORD_DEFAULT)
            ];
            if($this->userRepository->save($params) === false){
                $data = [
                    'title'=>'Регистрация'
                ];
                //если не зарегистрировался то показываем сново страницу регистрации,
                // а если прошла то перенаправляем на главную
                echo $this->renderPage('registration.php', 'template.php', $data);
            }else{
                header('Location: /');
            }

        }
    }

    public function authAction(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $post = $_POST;
            //если не авторизовался то переходит на главную страницу
            if (!$this->userRepository->isAuth($post)){
                header('Location: /');
            }
            //если авторизовался то переходит в личный кабинет
            header('Location: /account');
        }
    }

    public function indexAction(){
        session_start();
//        var_dump($_SESSION);
        if (!isset($_SESSION['name'])) header('Location: /');
        $data = [
            'title'=>'Личный кабинет',
            'name' => $_SESSION['name'],
            'auth' => isset($_SESSION['name'])
        ];
        $content = $_SESSION['role'] == "ADMIN" ? 'admin_account.php' : 'user_account.php';
        echo $this->renderPage($content, 'template.php', $data);
    }

    public function logoutAction(){
        session_start(); //чтобы могли удалить сессию
        session_destroy(); //удаляем сессию
        $_SESSION = [];
        header('Location: /');
    }
}