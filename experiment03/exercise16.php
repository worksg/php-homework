<?php

/**
 * 如图1、图2所示，先建立一个静态页面，可以输入5个同学的成绩，
 * 然后再点击“计算”按钮之后，跳转到动态页面，
 * 在动态页面可以计算出5个学生的成绩总分，要求利用数组的知识完成本题
 */

function get_sum($array)
{
    $sum = 0;
    foreach ($array as $k => $v) {
        $sum += $v;
    }
    return $sum;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $student1 = array();
    $student1[] = $_POST['student1-language'];
    $student1[] = $_POST['student1-math'];
    $student1[] = $_POST['student1-english'];

    $student2 = array();
    $student2[] = $_POST['student2-language'];
    $student2[] = $_POST['student2-math'];
    $student2[] = $_POST['student2-english'];

    $student3 = array();
    $student3[] = $_POST['student3-language'];
    $student3[] = $_POST['student3-math'];
    $student3[] = $_POST['student3-english'];

    $student4 = array();
    $student4[] = $_POST['student4-language'];
    $student4[] = $_POST['student4-math'];
    $student4[] = $_POST['student4-english'];

    $student5 = array();
    $student5[] = $_POST['student5-language'];
    $student5[] = $_POST['student5-math'];
    $student5[] = $_POST['student5-english'];

    // print_r($student1);echo '<br/>';
    // print_r($student2);echo '<br/>';
    // print_r($student3);echo '<br/>';
    // print_r($student4);echo '<br/>';
    // print_r($student5);echo '<br/>';

    echo '学生 1 的总成绩为: ' . get_sum($student1) . '<br/>';
    echo '学生 2 的总成绩为: ' . get_sum($student2) . '<br/>';
    echo '学生 3 的总成绩为: ' . get_sum($student3) . '<br/>';
    echo '学生 4 的总成绩为: ' . get_sum($student4) . '<br/>';
    echo '学生 5 的总成绩为: ' . get_sum($student5) . '<br/>';

} else {
    $file = fopen("./exercise16.html", 'r');
    if ($file) {
        while (!feof($file)) {
            $line = fgetc($file);
            echo $line;
        }
    }
    fclose($file);
}
