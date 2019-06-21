<?php
session_start();
$id = $value['id'];
$_SESSION['id'] = $id;


$server = 'localhost'; //адресс сервера
$dbName = 'tasks'; //имя БД
$username = 'root'; //имя пользователя БД
$pwd = '';

$connection = new PDO("mysql:host=$server;dbname=$dbName", $username, $pwd, $options);

$sql = 'SELECT * FROM tasks'; //строка запроса
$statement = $connection->query($sql);
$data = $statement->fetchAll(PDO::FETCH_ASSOC);

//var_dump($data);

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задачи</title>
</head>
<body>
<h1>Мои задачи</h1>
<?php foreach ($data as $value):?>
<h2>Название: <?php echo $value['title'];?></h2>
<h3>Дата начала: <?php echo $value['date_start'];?></h3>
<h3>Дата окончания: <?php echo $value['date_end'];?></h3>
<p>Статус: <?php echo $value['task_status'];?></p>
<p>Описание: <?php echo $value['description'];?></p>
<form action="editing_task.php" method="post">
    <input type="text" value="<?php  echo $value['id'];?>" name="id" style="display: none">
    <input type="submit" value="Редактировать">
    <input type="submit" value="Удалить">
<!--    <a href="editing_task.php">Редактировать</a>-->
</form>

<?php endforeach;?>

<a href="add_task.php">Добавить задачу</a>
</body>
</html>
