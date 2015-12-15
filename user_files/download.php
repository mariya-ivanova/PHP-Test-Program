<?php
$pageTitle = 'Изтегляне на файлове';
include 'includes/header.php';

if(isset($_SESSION['isLogged']) && isset($_GET['file']) && isset($_SESSION['username'])){

	$file = basename($_GET['file']);
	$username =	$_SESSION['username'];	
	$filepath =  'users/'.$username.'/'.$file;	
	
	if(!$filepath){ // file does not exist	
		die('file not found');
	} 
	else {
		
		header("Cache-Control: public");
		header("Content-Description: File Transfer");			
		header("Content-Disposition: attachment; filename=$file");	
		header("Content-Type: application/force-download; name=$file");	
		header("Content-Transfer-Encoding: binary");				
		ob_clean();
		flush();
		// read the file from disk
		readfile($filepath);	
	}

}

include 'includes/footer.php';
?>