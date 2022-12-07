<?php

$pessoa = array(
    'nome' => 'Jão',
    'idade' => '22',
);

foreach ($pessoa as &$value) {
    if (gettype($value) === 'ínteger') {
        $value += 10;
    }

    echo $value . 'br';
}

print_r($pessoa);
