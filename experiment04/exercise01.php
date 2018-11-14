<?php

header("Content-Type: text/html;charset=utf-8");

$name = @$_GET['name'];
$gender = @$_GET['gender'];

if ($_SERVER['REQUEST_METHOD'] == 'GET' && $name != null && $gender != null) {
    if ($gender == 'male') {
        echo $name."同学，欢迎你访问本页面<br/>";
        echo '您是一位男生！';
    } else {
        echo $name."同学，欢迎你访问本页面<br/>";
        echo '您是一位女生！';
    }
} else {
    $file = fopen("./exercise01.html", 'r');
    if ($file) {
        while (!feof($file)) {
            $line = fgetc($file);
            echo $line;
        }
    }
    fclose($file);
}
