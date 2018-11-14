<?php
header("Content-Type: text/html;charset=utf-8");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = @$_POST['name'];
    $passwd_1 = @$_POST['password'];
    $passwd_2 = @$_POST['password_verify'];

    if ($name != null && !empty($name) && ($passwd_1 != null && $passwd_2 != null) && (!empty($passwd_1) && !empty($passwd_2) && ($passwd_1 == $passwd_2))) {
        echo $name . "用户，欢迎你访问本页面";
    } else {
        $alert_str = 'something error';
        if ($name == null || empty($name)) {
            $alert_str = '用户名不能为空';
        } else if (($passwd_1 == null || $passwd_2 == null) && (empty($passwd_1) || empty($passwd_2))) {
            $alert_str = '密码不能为空';
        } else if ($passwd_1 != $passwd_2) {
            $alert_str = '两次密码不一致';
        }
        $redirect_str = '<script>alert("' . $alert_str . '");window.location.href="./exercise05.php"</script>';
        echo $redirect_str;
    }

} else {
    $file = fopen("./exercise05.html", 'r');
    if ($file) {
        while (!feof($file)) {
            $line = fgetc($file);
            echo $line;
        }
    }
    fclose($file);
}
