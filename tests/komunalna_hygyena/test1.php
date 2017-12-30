<?php
session_start();
ob_start();
include './inc/functions.php';

$data = $_SESSION['data'];

$data['title'] = 'Тест по Комунална хигиена';
$data['content'] = 'templates/test1_public.php';
$data['header'] = 'templates/header.php';
$data['bottom'] = 'templates/bottom_public.php';
$data['footer'] = 'templates/footer.php';
render($data, 'templates/layouts/normal_layout.php');