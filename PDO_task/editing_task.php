<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 21.06.2019
 * Time: 16:56
 */

$post = $_POST;
//var_dump($post);
$title = $post['title'];
$date_start = $post['date_start'];
$date_end = $post['date_end'];
$task_status = $post['task_status'];
$description = $post['description'];

$server = 'localhost'; //адресс сервера
$dbName = 'tasks'; //имя БД
$username = 'root'; //имя пользователя БД
$pwd = '';

$connection = new PDO("mysql:host=$server;dbname=$dbName", $username, $pwd, $options);

$sql = 'UPDATE tasks SET title = :title, :date_start, :date_end, :task_status, :description WHERE id=:id'; //строка запроса

$params = [
    'title' => $title,
    'date_start' => $date_start,
    'date_end' => $date_end,
    'task_status' => $task_status,
    'description' => $description
];

$statement = $connection->prepare($sql);
/*if ($statement->execute($params)){
    echo "Данные успешно обнавлены</br>";
}*/

//var_dump($data);
//var_dump($data['title']);

/*foreach ($data as $value){
    if ($value['title'] == 'Колобок'){
//        var_dump($value) ;
    }
}*/

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

<form action="add_task.php" method="post">
    <p><label for="text">Название: <input id="text" type="text" name="title" value=""></label></p>
    <p><label for="date_start">Дата начала: <input id="date_start" type="date" name="date_start"></label></p>
    <p><label for="date_end">Дата окончания: <input id="date_end" type="date" name="date_end"></label></p>
    <p>
        <label for="status">Статус:</label>
        <select id="status" name="task_status">
            <option value="Не началась">Не началась</option>
            <option value="Выполняется">Выполняется</option>
            <option value="Завершена">Завершена</option>
            <option value="В ожидании">В ожидании</option>
            <option value="Отложена">Отложена</option>
        </select>
    </p>
    <!--    <label for="textarea">Описание:</label>-->
    <h3>Описание:</h3>
    <p><textarea style="resize: none; width: 300px; height: 100px;" name="description">Опишите задачу</textarea></p>
<!--    <input type="submit" onclick="--><?php //$statement->execute($params);?><!--" value="Изменить">-->


</form>

</br>
</br>
</br>

<a href="task.php">Все задачи</a>
</body>
</html>
