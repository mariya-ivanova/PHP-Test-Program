<?php
session_start();
include './inc/functions.php';

session_destroy();

// $start = $_SERVER['DOCUMENT_ROOT'].'PHP-Test-Program/tests/index.html';
$start = '../';

// header("Location:http://localhost/PHP-Test-Program/tests/"); 
header("Location:".$start); 