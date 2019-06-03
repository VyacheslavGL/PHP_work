<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form-DZ</title>
    <style>
        /*@import url('https://fonts.googleapis.com/css?family=Merriweather&display=swap');*/
        @import url('https://fonts.googleapis.com/css?family=Ramabhadra&display=swap');
        body{
            max-width: 360px;
            height: auto;
            margin: 0 auto;
            text-align: left;
            padding-top: 10%;
            padding-bottom: 10%;
            background-image: url(img/1.jpg);
        }
        form{
            /*background-image: url(img/2.jpg);*/
            background-color: rgba(0, 255, 255, 0.1);
            border-radius: 10px;
            text-align: center;
            padding: 20px 15px;
            /*background: transparent;*/
            /*opacity: 0.7;*/
            /*font-family: 'Merriweather', serif;*/
            font-family: 'Ramabhadra', sans-serif;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
<h2>Регистрация в системе</h2>
<form name="someform" method="post" action="form_handler.php">
    <label for="name">Введите логин:</label>
    <input id="name" class="validate" type="text" placeholder="login" name="login"><p></p>
    <label for="password">Введите пароль:</label>
    <input id="password" class="validate" type="password" placeholder="password" name="pwd"><p></p>
    <label for="email">Введите емайл:</label>
    <input id="email" class="validate" type="email" placeholder="email@exampl.ru" name="email"><p></p>
    <label for="date">Ваша дата рождения:</label>
    <input id="date" type="date">
    <p><label>Мужской:<input type="radio" name="radio[]" value="man"></label>
        <label>Женский:<input type="radio" name="radio[]" value="woman"></label>
    </p>
    <select name="country">
        <option value="1">Россия</option>
        <option value="2">Австралия</option>
        <option value="3">Китай</option>
        <option value="4">Европа</option>
    </select>
    <p><input type="submit" value="Зарегистрироваться"></p>
</form>
<!--https://www.internet-technologies.ru/articles/60-besplatnyh-html5-i-css3-form-avtorizacii-dlya-sayta.html#header-1-->
<!--https://www.php.net/manual/ru/features.http-auth.php-->

<script src="form.js"></script>
</body>
</html>