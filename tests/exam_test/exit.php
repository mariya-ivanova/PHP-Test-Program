<?php
session_start();	
include './inc/functions.php';

//print_r($_SESSION);

/*	
$data['title'] = 'Тест по Комунална хигиена';
$data['content'] = 'templates/index_public.php';
$data['header'] = 'templates/header.php';
$data['bottom'] = 'templates/bottom.php';
$data['footer'] = 'templates/footer.php';
render($data, 'templates/layouts/normal_layout.php');
*/

session_destroy();

//$start = $_SERVER['DOCUMENT_ROOT'].'/tests/index.html';
//$start = 'http://localhost/tests/';
$start = 'http://m-ivanova.com/tests/';

//header("Location:http://localhost/tests/"); 
header("Location: ".$start); 
