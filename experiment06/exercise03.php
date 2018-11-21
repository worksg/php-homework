<?php

header("Content-Type: text/html;charset=utf-8");

function Initial_DB()
{
    $conn = mysqli_connect('localhost', 'root', "") or die("连接数据库失败！");

    $status = @mysqli_select_db($conn, 'mydatabase03');

    // $conn->query("DROP DATABASE `mydatabase03`");

    if ($status != true) {
        $sql = "CREATE DATABASE `mydatabase03` /*!40100 COLLATE 'utf8mb4_general_ci' */";

        if ($conn->query($sql) === true) {
            // echo "Database created successfully";
            mysqli_select_db($conn, 'mydatabase03');
        } else {
            echo "Error creating Database" . $conn->error;
            echo "<br/>";
            // die;
        }
    } else {
        $conn->close();
        return;
    }

    $conn->query("DROP TABLE `mytable03`");

    $sql = "CREATE TABLE `mytable03` (
        `user_id` INT UNSIGNED AUTO_INCREMENT,
        `name` VARCHAR(256) NOT NULL,
        `gender` VARCHAR(10) NOT NULL,
        `hobby` VARCHAR(256) NOT NULL,
        `address` VARCHAR(256) NOT NULL,
        `mark` VARCHAR(256) NOT NULL,
        PRIMARY KEY (`user_id`)
    )";

    if ($conn->query($sql) === true) {
        // echo "TABLE mytable03 created successfully";
    } else {
        echo "Error creating TABLE mytable03" . $conn->error;
        echo "<br/>";
        // die;
    }
    $conn->close();
}

function echo_alluser_info($conn)
{
    $content = "<table>
    <thead><tr>学生个人信息表</tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>姓名</strong></td>
            <td><strong>性别</strong></td>
            <td><strong>爱好</strong></td>
            <td><strong>家庭住址</strong></td>
            <td><strong>备注</strong></td>
            <td>&emsp;&emsp;</td>
            <td>&emsp;&emsp;</td>
        </tr>";
    echo $content;
    $sql = "SELECT * FROM `mydatabase03`.`mytable03`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $res_userID = $row["user_id"];
            $res_name = $row["name"];
            $res_gender = $row["gender"];
            $res_hobby = $row["hobby"];
            $res_address = $row["address"];
            $res_mark = $row["mark"];
            $table_raw = "<tr><td>$res_name</td>
                <td>$res_gender</td>
                <td>$res_hobby</td>
                <td>$res_address</td>
                <td>$res_mark</td>
                <td><a href=\"./exercise03.php?id=$res_userID&action=modify\">修改</a></td>
                <td><a href=\"./exercise03.php?id=$res_userID&action=delete\">删除</a></td>
                </tr>";
            echo $table_raw;
        }
    }
    echo "</tbody></table>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    Initial_DB();
    $conn = mysqli_connect('localhost', 'root', "") or die("连接数据库失败！");

    $query_id = @$_GET["id"];
    $query_action = @$_GET["action"];

    $name = @$_POST['name'];
    $gender = @$_POST['gender'];
    $hobby = @$_POST['hobby'];
    $address = @$_POST['address'];
    $mark = @$_POST['mark'];

    if ($query_id != null && $query_action != null) {
        switch ($query_action) {
            case 'modify':
                $sql = "UPDATE `mydatabase03`.`mytable03` SET `name`='$name', `gender`='$gender', `hobby`='$hobby', `address`='$address', `mark`='$mark' WHERE `user_id`=$query_id";
                if ($conn->query($sql) === true) {
                    $alert_str = "数据更新成功";
                    $redirect_str = '<script>alert("' . $alert_str . '");</script>';
                    echo $redirect_str;
                    echo_alluser_info($conn);
                } else {
                    $alert_str = "数据更新失败";
                    $redirect_str = '<script>alert("' . $alert_str . '");"</script>';
                    echo $redirect_str;
                    echo_alluser_info($conn);
                }
                break;
        }
        $conn->close();
        exit;
    }

    // echo "name: ".$name." gender: $gender"." hobby: $hobby"." address: $address"." mark: $mark"."<br/>";

    $sql = "INSERT INTO `mydatabase03`.`mytable03` (`name`, `gender`, `hobby`, `address`, `mark`) VALUES ('$name', '$gender', '$hobby', '$address', '$mark')";
    if ($conn->query($sql) === true) {
        echo_alluser_info($conn);
    }

    $conn->close();
} else {
    $query_id = @$_GET["id"];
    $query_action = @$_GET["action"];

    if ($query_id != null && $query_action != null) {
        $conn = mysqli_connect('localhost', 'root', "") or die("连接数据库失败！");
        switch ($query_action) {
            case 'modify':
                $sql = "SELECT * FROM `mydatabase03`.`mytable03` WHERE `user_id`=$query_id";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $res_userID = $row["user_id"];
                        $res_name = $row["name"];
                        $res_gender = $row["gender"];
                        $res_hobby = $row["hobby"];
                        $res_address = $row["address"];
                        $res_mark = $row["mark"];
                        echo "<form action=\"./exercise03.php?id=$res_userID&action=modify\" method=\"post\" id=\"user-info-form\">
                        <table>
                            <thead>
                                <tr>
                                    <th>修改学生信息</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>真实姓名

                                    </td>
                                    <td>
                                        <input type=\"text\" name=\"name\" value=\"$res_name\"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>性别</td>
                                    <td>";
                        if ($res_gender == "male") {
                            echo "<input type=\"radio\" name=\"gender\" value=\"male\" checked/>男";
                            echo "<input type=\"radio\" name=\"gender\" value=\"female\" />女";

                        } else {
                            echo "<input type=\"radio\" name=\"gender\" value=\"male\" />男";
                            echo "<input type=\"radio\" name=\"gender\" value=\"female\" checked/>女";
                        }
                        echo "</td>
                                </tr>
                                <tr>
                                    <td>兴趣爱好</td>
                                    <td>
                                        <input type=\"text\" name=\"hobby\" value=\"$res_hobby\"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>家庭住址</td>
                                    <td>";
                        switch ($res_address) {
                            case 'beijing':
                                echo "<select name=\"address\">
                                            <option value=\"beijing\" selected >北京</option>
                                            <option value=\"shanghai\">上海</option>
                                            <option value=\"guangzhou\">广州</option>";
                                break;
                            case 'shanghai':
                                echo "<select name=\"address\">
                                            <option value=\"beijing\">北京</option>
                                            <option value=\"shanghai\" selected >上海</option>
                                            <option value=\"guangzhou\">广州</option>";
                                break;
                            case 'guangzhou':
                                echo "<select name=\"address\">
                                            <option value=\"beijing\">北京</option>
                                            <option value=\"shanghai\">上海</option>
                                            <option value=\"guangzhou\" selected >广州</option>";
                                break;
                        }

                        echo "</select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>备注</td>
                                    <td><textarea rows=\"4\" cols=\"50\" name=\"mark\" form=\"user-info-form\">$res_mark</textarea></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type=\"submit\" value=\"修改\">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>";
                        break;
                    }
                }
                break;
            case 'delete':
                $sql = "DELETE FROM `mydatabase03`.`mytable03` WHERE `user_id`=$query_id";
                if ($conn->query($sql) === true) {
                    $alert_str = "数据删除成功";
                    $redirect_str = '<script>alert("' . $alert_str . '");</script>';
                    echo $redirect_str;
                    echo_alluser_info($conn);
                } else {
                    $alert_str = "数据删除失败";
                    $redirect_str = '<script>alert("' . $alert_str . '");</script>';
                    echo $redirect_str;
                    echo_alluser_info($conn);
                }
                break;
        }
        $conn->close();
    } else {
        echo '<form action="./exercise03.php" method="post" id="user-info-form">
        <table>
            <thead>
                <tr>
                    <th>添加个人资料</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>真实姓名
                    </td>
                    <td>
                        <input type="text" name="name" />
                    </td>
                </tr>
                <tr>
                    <td>性别</td>
                    <td>
                        <input type="radio" name="gender" value="male" />男
                        <input type="radio" name="gender" value="female" />女
                    </td>
                </tr>
                <tr>
                    <td>兴趣爱好</td>
                    <td>
                        <input type="text" name="hobby" />
                    </td>
                </tr>
                <tr>
                    <td>家庭住址</td>
                    <td>
                        <select name="address">
                            <option value="beijing">北京</option>
                            <option value="shanghai">上海</option>
                            <option value="guangzhou">广州</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>备注</td>
                    <td><textarea rows="4" cols="50" name="mark" form="user-info-form"></textarea></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="提交">
                    </td>
                    <td>
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>';
    }
}
