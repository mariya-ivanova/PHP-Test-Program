<?php 

$pageTitle = 'Файлове';
include 'includes/header.php';

if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true && isset($_SESSION['username'])){
	echo '<h1>Моите файлове</h1>';
	
	$username =	$_SESSION['username'];	
	$destination =  'users/'.$username.'/';
		/* DIRECTORY_SEPARATOR взема разделителя, който се ползва от операционната система, 
			а не този, който се ползва от браузера. 
			В Windows DIRECTORY_SEPARATOR ще бъде \, а браузерът ще търси / */

	$files = scandir($destination);	
	
	for($i=2;$i<count($files);$i++){
		echo '<a href="download.php?file='.$destination.$files[$i].'" target="_blank">'.$files[$i].'</a><br/>';
	}
	echo '<br/><br/><a href="upload.php">Качи файл</a><br/>
	<a href="destroy.php">Изход</a>';
}
else{
	echo 'Моля, влезте във вашия <a href="index.php">потребителски профил</a>';
}	
include 'includes/footer.php';
?>
		
