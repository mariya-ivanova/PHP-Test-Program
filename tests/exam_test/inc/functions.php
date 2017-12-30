<?php

function render($data, $name){           
    include $name;       
}

mb_internal_encoding('UTF-8');
$db = mysqli_connect('localhost', 'tests_user', 'tests_password', 'tests_db');

if (!$db) {
    $er[] = 'No database';
    exit;
}
mysqli_set_charset($db, 'utf8');
