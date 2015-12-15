<?php

	if(isset($_GET['p']) && $_GET['p'] <= count($data['questions'])){
	//	echo 'GET[p]= '. $_GET['p'].'<br/>';
		$p = ($_GET['p']);
		$action = $p+1;
		$action = 'test1.php?p='.$action;
	}
	elseif(isset($_GET['p']) && $_GET['p'] > count($data['questions'])){
	//	echo 'GET[p]= '. $_GET['p'].'<br/>';
		$action = "results.php";
		$p = count($data['questions'])+1;
		header('Location:results.php');

	}
	else {
		$p = 1;
		$action = $p+1;
		$action = 'test1.php?p='.$action;
	}

//print_r($data['questions']);


if ($p <= count($data['questions'])+1) {
	$v = $data['questions'][$p];

	/* new */	
	$key = $data['questions'][$p-1]['qid']; /* if no answer is selected */
	$_SESSION['post_results'][$p-1]['question_id'] = $key;	
	$_SESSION['post_results'][$p-1]['answers'][0] = 0;			
	/* new */
	
	if($_POST && !isset($_POST['start'])){
	//	$key = $data['questions'][$p-1]['qid'];

			if(isset($_POST['question'])){
				$_SESSION['post_results'][$p-1]['question_id'] = $key;	
				$_SESSION['post_results'][$p-1]['answers'] = $_POST['question'];			
			//	print_r($_SESSION['post_results']);
			}
	}	
	
?>

<form class="form-horizontal" method="POST" action="<?php echo $action; ?>">

<?php


//foreach ($data['questions'] as $key => $v){
	
    echo '
	<div class="control-group">
		<!-- Question name -->
		<label class="control-label">' .$p. '. '.$v['qname'].'</label>
		<br/><br/>';
		
	foreach ($v['answers'] as $k => $va) {
		echo '<div class="controls">';		
		if(!$v['multiple'])	{
			echo '<input type="radio" name="question[]" value="'.$k.'" class="input-xlarge"> '.$va.'<br/>';	

		}
		else
			echo '<input type="checkbox" name="question[]" value="'.$k.'" class="input-xlarge"> '.$va.'<br/>';	
		echo '</div>';	
	}
	echo '</div>';
//}
}

header( "refresh:90;url=$action" ); 
?>

	<div class="control-group">
		<!-- Button -->
		<div class="controls">
			<input type="submit" name="submit" value="Напред" class="btn btn-info" />
		</div>
	</div>
</form>
<script src="js/countdown.js"></script>

