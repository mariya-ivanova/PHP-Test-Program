<?php
session_start();
include './inc/functions.php';

	$data = array();

	$data['title'] = 'Тест по Комунална хигиена';
	$data['content'] = 'templates/student_data_public.php';
	$data['header'] = 'templates/header.php';
	$data['bottom'] = 'templates/bottom_public.php';
	$data['footer'] = 'templates/footer.php';
//	render($data, 'templates/layouts/normal_layout.php');
		

if ($_POST) {

	$errors = array();
    $fn = trim($_POST['fn']);
    $group = trim($_POST['group']);		

    if (!is_numeric($fn) || !preg_match("/^[0-9_-]{4,5}$/", $fn)) {
        $errors[] = 'Моля, въведете валиден факултетен номер.<br/>Факултетният номер трябва да се състои от 4 или 5 цифри.<br/>';
    }

    if (!is_numeric($group) || !preg_match("/^[0-9_-]{1,2}$/", $group)) {
        $errors[] = 'Моля, въведете валидна група.<br/>Групата трябва да се състои от 1 или 2 цифри.<br/>';
    }	
	
	if (count($errors) <= 0) {
		$data['fn']	= $fn;
		$data['group']	= $group;
	}
	
	if (count($errors) > 0){$data['errors'] = $errors;}
	
	else {
	
		$_SESSION['fn']	= $fn;
		$_SESSION['group']	= $group;	
		$_SESSION['data'] = $data;	
	//	print_r($_SESSION['data']);
		header('Location:prepare.php');		
	}	

}	
render($data, 'templates/layouts/normal_layout.php');
?>







