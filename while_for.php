<?php

$num = 800;
$i =1;
while ($num >50){
    $num /=2;
    echo $i.' - '.$num."</br>";
        if($num <= 50){
            echo "Колличество итераций $i";
        }
    $i++;
}

echo "</br>";

for($a=1, $num=800; $num>50; $a++){
    $num /=2;
    echo $a.' - '. $num."</br>";
    if($num <= 50){
        echo "Колличество итераций $a";
    }
}

?>
