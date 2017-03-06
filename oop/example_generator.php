<?php

function generator0() {
    for ($i = 1; $i <= 3; $i++) {
        // Обратите внимание, что $i сохраняет свое значение между вызовами.
        yield $i;
    }
}

$g = generator0();
foreach ($g as $val) {
    echo $val . '<br>';
}

function generator1() {
    $txt = 'a;b;c;d;e;f;g;h;';
    $arr = explode(';', $txt);

    foreach ($arr as $val) {
        yield $val;
    }
}

$g = generator1();
foreach ($g as $val) {
    echo $val . '<br>';
}