<?php
session_start();
include './inc/functions.php';

$_SESSION['post_results'] = array(); /* pasted from index.php */

$query_text = "SELECT `questions_test1`.id as `qid`, `questions_test1`.name as `qname`, `questions_test1`.multiple,
`answers_test1`.id as `aid`, `answers_test1`.name as `aname`, `answers_test1`.question_id,
`answers_test1`.points as `points` 
FROM questions_test1, `answers_test1`

WHERE `answers_test1`.question_id = `questions_test1`.id

ORDER BY `questions_test1`.id ASC 
";

$query = mysqli_query($db, $query_text);	

$data['questions'] = array();
$tempdata['questions'] = array();
$total_points1 = 0;

while ($row = mysqli_fetch_assoc($query)) {
	if ($row['points'] > 0) {$total_points1 += $row['points'];}
	$tempdata['questions'][$row['qid']]['qid'] = $row['qid'];
    $tempdata['questions'][$row['qid']]['qname'] = $row['qname'];
	$tempdata['questions'][$row['qid']]['multiple'] = $row['multiple'];
    $tempdata['questions'][$row['qid']]['answers'][$row['aid']] = $row['aname'];

}

shuffle($tempdata['questions']);	/* mix the questions */
//print_r($tempdata['questions']);

/* rearrange the questions so the question index corresponds to the number of the current page. The question id remains the same. */
$i=0; $newdata = array(); 
while($i < min(count($tempdata['questions']), 10)) {
    $i++; 
    $newdata = each($tempdata['questions']); 
	$data['questions'][$i] = $newdata['value'];
}

//print_r($data['questions']);

$_SESSION['data1'] = $data;
$_SESSION['total_points1'] = $total_points1;

/////////////////////////////////////////////////////////////////////////////////////

$query_text = "SELECT `questions_test2`.id as `qid`, `questions_test2`.name as `qname`, `questions_test2`.multiple,
`answers_test2`.id as `aid`, `answers_test2`.name as `aname`, `answers_test2`.question_id,
`answers_test2`.points as `points` 
FROM questions_test2, `answers_test2`

WHERE `answers_test2`.question_id = `questions_test2`.id

ORDER BY `questions_test2`.id ASC 
";

$query = mysqli_query($db, $query_text);	

$data['questions'] = array();
$tempdata['questions'] = array();
$total_points2 = 0;

while ($row = mysqli_fetch_assoc($query)) {
	if ($row['points'] > 0) {$total_points2 += $row['points'];}
	$tempdata['questions'][$row['qid']]['qid'] = $row['qid'];
    $tempdata['questions'][$row['qid']]['qname'] = $row['qname'];
	$tempdata['questions'][$row['qid']]['multiple'] = $row['multiple'];
    $tempdata['questions'][$row['qid']]['answers'][$row['aid']] = $row['aname'];

}

shuffle($tempdata['questions']);	/* mix the questions */
//print_r($tempdata['questions']);

/* rearrange questions so the question index correspond to the number of the current page. The question id remains the same. */
$i=0; $newdata = array(); 
while($i < min(count($tempdata['questions']), 10)) {
    $i++; 
    $newdata = each($tempdata['questions']); 
	$data['questions'][$i] = $newdata['value'];
}

//print_r($data['questions']);

$_SESSION['data2'] = $data;
$_SESSION['total_points2'] = $total_points2;

header('Location:test1.php');	

