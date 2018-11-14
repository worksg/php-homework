<?php
header("Content-Type: text/html;charset=utf-8");

$name = @$_GET['name'];
$gender = @$_GET['gender'];

if ($_SERVER['REQUEST_METHOD'] == 'GET' && $name != null && $gender != null) {
    if ($gender == 'male') {
        echo $name."先生，欢迎你访问本页面";
    } else {
        echo $name."小姐，欢迎你访问本页面";
    }
} else {
    $file = fopen("./exercise03.html", 'r');
    if ($file) {
        while (!feof($file)) {
            $line = fgetc($file);
            echo $line;
        }
    }
    fclose($file);
}
