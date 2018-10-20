<?php

header("Content-Type: text/html;charset=utf-8");

for ($i = 0; $i < 10; $i++) {
    for ($n = 0; $n < $i; $n++) {
        if ($n + 1 == $i) {
            echo '*';
        } else {
            echo '* ';
        }
    }
    if ($i != 0 && $i + 1 != 10) {
        echo '<br/>';
    }
}
