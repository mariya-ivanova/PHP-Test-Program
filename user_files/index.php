<?php 

$pageTitle = 'Потребителски вход';
include 'includes/header.php';

if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true){
	echo 'Здрасти<br/><br/>
	<a href="files.php">Моите файлове</a><br/>
	<a href="upload.php">Качи файл</a><br/>
	<a href="destroy.php">Изход</a><br/>';}
else{

if($_POST){
	
	$username=trim($_POST['username']);
    $costname=  str_replace('!', '', $username);
	$pass=trim($_POST['pass']);
    $pass=  str_replace('!', '', $pass);	

	foreach($users as $value){
		if($username == $value['user'] && $pass == $value['pass']){		
			$_SESSION['isLogged'] = true;
			$_SESSION['username'] = $username;
			header('Location: files.php');
			exit;
		}
	}
	if(!isset($_SESSION['isLogged'])){
		echo 'Грешни данни';
	}
}	
?>
	
<div><strong>Моля, въведете име и парола:</strong></div>	
<div>&nbsp;</div>
<div><span><strong>user:</strong> user </span><span><strong>pass:</strong> qwerty</span></div>
<div><em>или</em></div>
<div><span><strong>user:</strong> user2 </span><span><strong>pass:</strong> qwerty2</span></div>
<div>&nbsp;</div>

<form method="POST" enctype="multipart/form-data">	

<div>Име:<input type="text" name="username" /></div>

<div>Парола:<input type="password" name="pass" /></div>	

<div><input type="submit" value="Вход" /></div>

</form>

<?php 
} 
include 'includes/footer.php';
?>