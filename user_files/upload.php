<?php 
$pageTitle = 'Качване на файлове';
include 'includes/header.php';

if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true && isset($_SESSION['username'])){

	$username =	$_SESSION['username'];	
	$destination =  'users'.DIRECTORY_SEPARATOR .$username.DIRECTORY_SEPARATOR ;
	
	if($_FILES) {	

		if(count($_FILES)>0){
			if(move_uploaded_file($_FILES['file']['tmp_name'], $destination.$_FILES['file']['name'])){
				echo "Успешно качване";
			}
			else echo "Неуспешно качване";
		}
	
	}	
?>
		
<form method="POST" enctype="multipart/form-data">		

<div>Файл:<input type="file" name="file" /></div>

<div><input type="submit" value="Качване" /></div>

</form>

<?php 
	echo '<br/><br/><a href="files.php">Моите файлове</a><br/>
	<a href="destroy.php">Изход</a>';
} 
	else echo 'Моля, влезте във вашия <a href="index.php">потребителски профил</a>';
	include 'includes/footer.php';
?>