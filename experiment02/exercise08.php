<?php

header("Content-Type: text/html;charset=utf-8");

for ($i = 0; $i < 9; $i++) {
    for ($n = 9 - $i; $n > 0; $n--) {
        if ($n - 1 == 0) {
            echo '*';
        } else {
            echo '* ';
        }
    }
    if ($i + 1 != 10) {
        echo '<br/>';
    }
}
