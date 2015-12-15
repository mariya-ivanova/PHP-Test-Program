<?php
session_start();
	
include './inc/functions.php';

//print_r($_SESSION['post_results']);


$sum_points1 = array();
$total_sum1 = 0;
if(isset($_SESSION['post_results1'])){
	foreach ($_SESSION['post_results1'] as $key => $value) {
			
		foreach($value['answers'] as $k => $v){
			$query_text = "SELECT `points` FROM `answers_test1` WHERE `id` =$v";
			$query = mysqli_query($db, $query_text);
			$sum=0;
			while ($row = mysqli_fetch_assoc($query)) {
				$sum += $row['points']; 
			}	
			$sum_points1[$key]['question_id'] = $value['question_id'];
			$sum_points1[$key]['answers'] = $value['answers'];
			$sum_points1[$key]['points'] = $sum;		
		}	
		$total_sum1 += $sum;
	}
}

$percent1 = max(0, ($total_sum1/$_SESSION['total_points1'])*100); /* the sum of correct answers/total sum of points for all questions */	
$percent1 = number_format(round($percent1, 2));


$sum_points2 = array();
$total_sum2 = 0;
if(isset($_SESSION['post_results2'])){
	foreach ($_SESSION['post_results2'] as $key => $value) {
			
		foreach($value['answers'] as $k => $v){
			$query_text = "SELECT `points` FROM `answers_test2` WHERE `id` =$v";
			$query = mysqli_query($db, $query_text);
			$sum=0;
			while ($row = mysqli_fetch_assoc($query)) {
				$sum += $row['points']; 
			}	
			$sum_points2[$key]['question_id'] = $value['question_id'];
			$sum_points2[$key]['answers'] = $value['answers'];
			$sum_points2[$key]['points'] = $sum;		
		}	
		$total_sum2 += $sum;
	}
}

$percent2 = max(0, ($total_sum2/$_SESSION['total_points2'])*100); /* the sum of correct answers/total sum of points for all questions */	
$percent2 = number_format(round($percent2, 2));

$all_total_points = $_SESSION['total_points1'] + $_SESSION['total_points2'];
$total_sum = $total_sum1+$total_sum2;
$percent = max(0, ($total_sum/$all_total_points)*100); /* the sum of correct answers/total sum of points for all questions */	
$percent = number_format(round($percent, 2));

//print_r($sum_points);
$data['points1'] = $sum_points1; 
$data['total_sum1'] = $total_sum1; 	
$data['percent1'] = $percent1;
$data['points2'] = $sum_points2; 
$data['total_sum2'] = $total_sum2;
$data['percent2'] = $percent2;
$data['total_sum'] = $total_sum; 
$data['percent'] = $percent;
$data['title'] = 'Изпитен тест';
$data['content'] = 'templates/results_public.php';
$data['header'] = 'templates/header_public.php';
$data['bottom'] = 'templates/bottom.php';
$data['footer'] = 'templates/footer.php';
render($data, 'templates/layouts/normal_layout.php');

//session_destroy();
