<?php
session_start();
include './inc/functions.php';


$query_text = "SELECT `questions_test1`.id as `qid`, `questions_test1`.name as `qname`, `questions_test1`.multiple,
`answers_test1`.id as `aid`, `answers_test1`.name as `aname`, `answers_test1`.question_id,
`answers_test1`.points as `points` 
FROM questions_test1, `answers_test1`
WHERE `answers_test1`.question_id = `questions_test1`.id
ORDER BY `questions_test1`.id ASC 
";

$query = mysqli_query($db, $query_text);	

$tempdata['questions'] = array();
$total_points = 0;

while ($row = mysqli_fetch_assoc($query)) {
	if ($row['points'] > 0) {$total_points += $row['points'];}
	$tempdata['questions'][$row['qid']]['qid'] = $row['qid'];
    $tempdata['questions'][$row['qid']]['qname'] = $row['qname'];
	$tempdata['questions'][$row['qid']]['multiple'] = $row['multiple'];
    $tempdata['questions'][$row['qid']]['answers'][$row['aid']] = $row['aname'];
}

shuffle($tempdata['questions']);	/* mix the questions */

/* rearrange the questions so the question index corresponds to the number of the current page. The question id remains the same. */
$i=0; $newdata= array(); 
while($i < min(count($tempdata['questions']), 10)) {
    $i++; 
    $newdata = each($tempdata['questions']); 
	$data['questions'][$i] = $newdata['value'];
}

$_SESSION['data'] = $data;
$_SESSION['total_points'] = $total_points;
header('Location:test1.php');	

