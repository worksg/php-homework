<?php

header("Content-Type: text/html;charset=utf-8");

for ($i = 0; $i < 9; $i++) {
    for ($n = 0; $n < 9; $n++) {
        if ($n + 1 == 9) {
            echo '*';
        } else {
            echo '* ';

        }
    }
    if ($i + 1 != 9) {
        echo '<br/>';
    }
}
