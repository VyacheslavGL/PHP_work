<?php
session_start();
$sis = $_SESSION;

$newId = $sis['id'];


$post = $_POST;
//var_dump($post);
$id = $post['id'];
$title = $post['title'];
$date_start = $post['date_start'];
$date_end = $post['date_end'];
$task_status = $post['task_status'];
$description = $post['description'];


$server = 'localhost'; //адресс сервера
$dbName = 'tasks'; //имя БД
$username = 'root'; //имя пользователя БД
$pwd = '';

//var_dump($id);

$connection = new PDO("mysql:host=$server;dbname=$dbName", $username, $pwd, $options);
//var_dump($connection);
$sql = 'UPDATE tasks SET title = :title, date_start = :date_start, date_end = :date_end, task_status = :task_status, description = :description WHERE id=:id'; //строка запроса

$params = [
    'id' => $newId,
    'title' => $title,
    'date_start' => $date_start,
    'date_end' => $date_end,
    'task_status' => $task_status,
    'description' => $description
];

$statement = $connection->prepare($sql);
if ($statement->execute($params)){
    echo "Данные успешно обнавлены</br>";
}
?>

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
<a href="task.php">Все задачи</a>
</body>
</html>
