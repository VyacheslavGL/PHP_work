<?php
//1. Удаление каталога. Написать рекурсивную функцию удаления непустого каталога
$file = 'D:\Soft\OSPanel\domains\lessonPHP.ru\lesson 5\home\file_system\file_dir';

function removeDirectory($dir) {
    if ($objs = glob($dir."/*")) {
        foreach($objs as $obj) {
            is_dir($obj) ? removeDirectory($obj) : unlink($obj);
        }
    }
    rmdir($dir);
}

removeDirectory($file);

//------------вариант 2
/*
function RemoveDir($path)
{
    if(file_exists($path) && is_dir($path))
    {
        $dirHandle = opendir($path);
        while (false !== ($file = readdir($dirHandle)))
        {
            if ($file!='.' && $file!='..')// исключаем папки с назварием '.' и '..'
            {
                $tmpPath=$path.'/'.$file;
                chmod($tmpPath, 0777);
                if (is_dir($tmpPath))
                {  // если папка
                    RemoveDir($tmpPath);
                }
                else
                {
                    if(file_exists($tmpPath))
                    {
                        // удаляем файл
                        unlink($tmpPath);
                    }
                }
            }
        }
        closedir($dirHandle);
        // удаляем текущую папку
        if(file_exists($path))
        {
            rmdir($path);
        }
    }
    else
    {
        echo "Удаляемой папки не существует или это файл!";
    }
}*/


//2.Сокращатель ссылок (используем функции) пользователь вводит в форму ссылку (используйте input type="url") вы получаете ее валидируете и обрабатываете: проверка на пустоту, filter_var - FILTER_VALIDATE_URL trim,
//если все хорошо: проверяете присутствует ли в файле ссылка, которую вводил пользователь, если есть, то получаете короткую ссылку и выводите на экран если нет, создаете хеш определенной длины (алгоритм придумать самостоятельно) если созданный хеш уже есть в файле, то создаете новый до тех пор, пока хеш не станет уникальным записать хеш в файл
//информация будет храниться в файле следующим образом: длинная ссылка:короткая ссылка
//Дополнительно: длинная ссылка:короткая ссылка:время, когда ссылка устареет При таком варианте, если время жизни закончилось, то нужно проверять его и, если нужно, перегенерировать ссылку