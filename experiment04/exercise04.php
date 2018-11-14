<?php
header("Content-Type: text/html;charset=utf-8");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = @$_POST['number'];
    $sum = 0;
    for ($i = 1; $i <= $number; $i++) {
        $sum += $i;
    }
    $alert_str = "<script>alert(\"1+2+...+" . $number . "=$sum\");";
    $redirect_str = 'window.location.href="./exercise04.php"</script>';
    echo $alert_str . $redirect_str;
    // echo '<h2>计算累加和</h2>
    // <form method="POST" action="">
    //     1+2+...+ <input type="text" name="number" value="' . $number . '"/>
    //     <button type="submit">计算</button>
    // </form>' . $alert_str;
} else {
    $file = fopen("./exercise04.html", 'r');
    if ($file) {
        while (!feof($file)) {
            $line = fgetc($file);
            echo $line;
        }
    }
    fclose($file);
}
