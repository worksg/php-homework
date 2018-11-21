<?php

/**
 * 建立一PHP文件，完成下列操作：
 * (1) 创建一个数据库，名称为mydatabase。
 * (2) 在数据库mydatabase中创建一个新表，名称为mytable，
 * 包含user_id、user_name和password三个列，user_id为表的主键，且用户名不得重复。
 * (3) 利用php代码向mytable表中添加若干条记录。
 * (4) 利用php代码对mytable表中的指定记录进行修改。
 * (5) 利用php代码删除mytable表中的指定记录。
 * (6) 以表格形式显示mytable表中的全部记录。
 *
 */

header("Content-Type: text/html;charset=utf-8");

$conn = mysqli_connect('localhost', 'root', "");
if ($conn) {
    echo "连接服务器成功！";
} else {
    echo "连接服务器失败！";
}

echo "<br/>";

$conn->query("DROP DATABASE `mydatabase`");

$status = @mysqli_select_db($conn, 'mydatabase');

if ($status != true) {
    $sql = "CREATE DATABASE `mydatabase` /*!40100 COLLATE 'utf8mb4_general_ci' */";

    if ($conn->query($sql) === true) {
        echo "Database created successfully";
        mysqli_select_db($conn, 'mydatabase');
    } else {
        echo "Error creating Database" . $conn->error;
    }
    echo "<br/>";
}

$conn->query("DROP TABLE `mytable`");

$sql = "CREATE TABLE mytable(
    `user_id` INT UNSIGNED AUTO_INCREMENT,
    `user_name` VARCHAR(30) NOT NULL,
    `password` VARCHAR(30) NOT NULL,
    PRIMARY KEY (`user_id`)
)";

if ($conn->query($sql) === true) {
    echo "TABLE mytable created successfully";
} else {
    echo "Error creating TABLE mytable" . $conn->error;
}

echo "<br/>";

for ($i = 1; $i < 10; $i++) {
    $sql = "INSERT INTO `mydatabase`.`mytable` (`user_name`, `password`) VALUES ('user" . $i . "', 'passwd" . $i . "')";
    if ($conn->query($sql) === true) {
        echo "Insert ('user" . $i . "', 'passwd" . $i . "') successfully";
    } else {
        echo "Error insert ('user" . $i . "', 'passwd" . $i . "') " . $conn->error;
    }
    echo "<br/>";
}

for ($i = 1; $i < 6; $i++) {
    $sql = "UPDATE `mydatabase`.`mytable` SET `user_name`='user0" . $i . "' WHERE  `user_id`=" . $i . "";
    if ($conn->query($sql) === true) {
        echo "UPDATE `user_id`=" . $i . " successfully";
    } else {
        echo "Error UPDATE `user_id`=" . $i . " " . $conn->error;
    }
    echo "<br/>";
}

for ($i = 6; $i < 10; $i++) {
    $sql = "DELETE FROM `mydatabase`.`mytable` WHERE  `user_id`=" . $i . "";
    if ($conn->query($sql) === true) {
        echo "DELETE `user_id`=" . $i . " successfully";
    } else {
        echo "Error DELETE `user_id`=" . $i . " " . $conn->error;
    }
    echo "<br/>";
}

$sql = "SELECT `user_id`, `user_name`, `password` FROM `mytable`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "user_id: " . $row["user_id"]. " - user_name: " . $row["user_name"]. " password: " . $row["password"]. "<br>";
    }
} else {
    echo "SELECT Finish";
}

$conn->close();
