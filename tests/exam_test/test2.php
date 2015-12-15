<?php
session_start();
ob_start();
include './inc/functions.php';

$data = $_SESSION['data2'];

$data['title'] = 'Тест2';
$data['content'] = 'templates/test2_public.php';
$data['header'] = 'templates/header2.php';
$data['bottom'] = 'templates/bottom_public.php';
$data['footer'] = 'templates/footer.php';
render($data, 'templates/layouts/normal_layout.php');

