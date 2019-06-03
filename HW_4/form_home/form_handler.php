<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 31.05.2019
 * Time: 13:07
 */

$post = $_POST;

//var_dump($post);

//echo "Добро пожаловать ".$post['login']." !";

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            max-width: 500px;
            height: 100vh;
            margin: 0 auto;
            padding: 0;
            background-color: aqua;
        }
        div{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 10px;
            /*width: 500px;*/
            width: auto;
            height: 100vh;
        }
        h1{
            text-align: center;
            /*color: azure;*/
        }
        p{
            text-align: center;
        }
    </style>
</head>
<body>
<div>
    <h1><?php echo "Добро пожаловать ".$post['login']." !";?></h1>
    <p>Ваши данные были приняты!</p>
    <p>На вашу почту <?php echo $post['email'];?> было отправлено информационное письмо</p>
</div>
</body>
</html>
