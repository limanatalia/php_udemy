<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 20,

));

array_push($pessoas, array(
    'nome' => 'Glaucia',
    'idade' => 23,

));

echo json_encode($pessoas);