<?php

/* Добавить вывод текущей даты и времени в формате 13-12-2023 12:56. Использовать встроенную функцию date */

$title = "Вывод даты и времени";


date_default_timezone_set('Asia/Irkutsk'); // выводилось московское, нашел решение для своего региона :)
$dateAndTimeOutput = date('d-m-Y H:i');

$html = <<<html
<html>
    <head>
    <title>{$title}</title>
    </head>
        <body>
        {$dateAndTimeOutput}
        </body>
</html>
html;

echo $html;