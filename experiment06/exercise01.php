<?php

header("Content-Type: text/html;charset=utf-8");

$conn = mysqli_connect('localhost', 'root', "");
if ($conn) {
    echo "连接服务器成功！";
} else {
    echo "连接服务器失败！";
}

echo "<br/>";

$sql = mysqli_select_db($conn, 'xsgl');
if ($sql) {
    echo "选择数据库成功！";
} else {
    echo "选择数据库失败！";
}
