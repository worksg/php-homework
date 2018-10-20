<?php

header("Content-Type: text/html;charset=utf-8");

echo '<p>while 语句</p>';

$a = 1;
while ($a <= 5) {
    echo 'The number is:' . $a++ . '<br/>';
}

echo '<p>do while 语句</p>';

$a = 1;
do {
    echo 'The number is:' . $a++ . '<br/>';
} while ($a <= 5);

echo '<p>for 语句</p>';
for ($a = 1; $a < 6; $a++) {
    echo 'The number is:' . $a . '<br/>';
}
