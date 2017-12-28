<?php
session_start();
include './inc/functions.php';


$sum_points = array();
$total_sum = 0;
$sum = 0;

if(isset($_SESSION['post_results'])){	
	foreach ($_SESSION['post_results'] as $key => $value) {

		if($value['answers'] != 0) {

			foreach($value['answers'] as $k => $v){
				$query_text = "SELECT `points` FROM `answers_test1` WHERE `id` =$v";
				$query = mysqli_query($db, $query_text);
				$sum = 0;
				while ($row = mysqli_fetch_assoc($query)) {
					$sum += $row['points']; 
				}	
				$sum_points[$key]['question_id'] = $value['question_id'];
				$sum_points[$key]['answers'] = $value['answers'];
				$sum_points[$key]['points'] = $sum;		
			}	
		}
		else {
			$sum_points[$key]['question_id'] = $value['question_id'];
			$sum_points[$key]['answers'] = 0;
			$sum_points[$key]['points'] = 0;	
		}

		$total_sum += $sum;
	}
}

if($_SESSION['total_points'] == 0)
	$correct_answers = 0;
else
	$correct_answers = $total_sum/$_SESSION['total_points'];

$percent = max(0, $correct_answers*100); /* the sum of correct answers/total sum of points for all questions */	
$percent = number_format(round($percent, 2));

$data['points'] = $sum_points; 
$data['total_sum'] = $total_sum; 
$data['percent'] = $percent;	
$data['title'] = 'Тест по Комунална хигиена';
$data['content'] = 'templates/results_public.php';
$data['header'] = 'templates/header.php';
$data['bottom'] = 'templates/bottom.php';
$data['footer'] = 'templates/footer.php';
render($data, 'templates/layouts/normal_layout.php');
