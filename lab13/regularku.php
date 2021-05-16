<?php
    $array = array(
        $_GET['flat'], $_GET['surname'],
        $_GET['phone'], $_GET['email'],
        $_GET['naibors'],
    );


    if (preg_match("/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/", $array[2]) == false) {
        echo"Ви не вірно ввели номер телефону!<br>";
        if(preg_match("/^(?:[a-zA-Z0-9.]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $array[3]) == false) echo "Ви не вірно ввели електрону пошту.<br>";
        if (preg_match("/^\d{1,4}+$/",$array[0]) == false) echo"На жаль номер Вашої квартири занадто великий<br>";
    }
    elseif (preg_match("/^(?:[a-zA-Z0-9-_.]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $array[3]) == false) {
        echo "Ви не вірно ввели електрону пошту.<br>";
        if (preg_match("/^\d{1,4}+$/",$array[0]) == false) echo"На жаль номер Вашої квартири занадто великий<br>";
    }
    elseif (preg_match("/^\d{1,4}+$/",$array[0]) == false) echo"На жаль номер Вашої квартири занадто великий<br>";
?>