<?php
header("Content-Type: text/html;charset=utf-8");

function get_qualification($num)
{
    switch ($num) {
        case 0:return "小学以下";
            break;
        case 1:return "小学";
            break;
        case 2:return "初中";
            break;
        case 3:return "中专";
            break;
        case 4:return "高中";
            break;
        case 5:return "大专";
            break;
        case 6:return "本科/学士";
            break;
        case 7:return "研究生/硕士";
            break;
        case 8:return "研究生/博士";
            break;
        default:return "未知";
            break;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = @$_POST['name'];
    $gender = @$_POST['gender'];
    $job = @$_POST['job'];
    $qualification = get_qualification(@$_POST['qualification']);
    $comment = @$_POST['comment'];
    if ($gender == 'male') {
        $gender = '男';
    } else {
        $gender = '女';
    }

    if ($job == 'student') {
        $job = '学生';
    } else {
        $job = '教师';
    }

    echo "<p>十分感谢用户&emsp;" . $name . "&emsp;的意见</p>";
    echo "<p>请确定下列信息</p>";
    echo "<p>您的性别&emsp;" . $gender . "</p>";
    echo "<p>您的职业&emsp;" . $job . "</p>";
    echo "<p>您的学历&emsp;" . $qualification . "</p>";
    echo "<p>您的意见&emsp;" . $comment . "</p>";

} else {
    $file = fopen("./exercise02.html", 'r');
    if ($file) {
        while (!feof($file)) {
            $line = fgetc($file);
            echo $line;
        }
    }
    fclose($file);
}
