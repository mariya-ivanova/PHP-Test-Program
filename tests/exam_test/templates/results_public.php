<?php

//print_r($_SESSION['post_results']);

echo '<br/><br/>';

echo '<table class="table table-striped table_ table-bordered">';

echo '<thead>
		<tr><th><strong>Факултетен номер:</strong></th>';			
echo '<th><strong>Група:</strong></th>';
echo '<th><strong>Общ резултат:</strong></th>';
echo '<th><strong>%:</strong></th></tr>';

echo '</thead><tbody>';
echo '<tr><td>'.$_SESSION['fn'].'</td>';
echo '<td>'.$_SESSION['group'].'</td>';
echo '<td>'.$data['total_sum'].'</td>';
echo '<td>'.$data['percent'].'</td></tr>';
echo '</tbody></table>';

/////////////////////////////////////////////////////////////////////

echo '<table class="table table-striped table_ table-bordered">';

echo '<thead>';			
echo '<th><strong>Тест по:</strong></th>';
echo '<th><strong>Общ резултат:</strong></th>';
echo '<th><strong>%:</strong></th></tr>';
echo '</thead><tbody>';

echo '<tr><td>Комунална хигиена</td>';
echo '<td>'.$data['total_sum1'].'</td>';
echo '<td>'.$data['percent1'].'</td></tr>';

echo '<tr><td>Хранене</td>';
echo '<td>'.$data['total_sum2'].'</td>';
echo '<td>'.$data['percent2'].'</td></tr>';

echo '</tbody></table>';


////////////////////////////// TEST1 ////////////////////////////////

echo '<table class="table table-striped table_ table-bordered">';
echo '<thead>
		<tr><th>Въпрос</th>';			
echo '<th>Точки</th></tr>';
echo '</thead><tbody>';


foreach ($data['points1'] as $key => $value) {
	echo '<tr><td>'.$value['question_id'].'</td>';	
	echo '<td>' .$value['points'];
	echo '</td></tr>';
}

echo '<tr><td>Общ резултат</td>
		  <td>'.$data['total_sum1'].'</td>
	  </tr>';
echo '</tbody></table>';


////////////////////////////// TEST2 ////////////////////////////////	

echo '<table class="table table-striped table_ table-bordered">';
echo '<thead>
		<tr><th>Въпрос</th>';		
echo '<th>Точки</th></tr>';
echo '</thead><tbody>';

foreach ($data['points2'] as $key => $value) {
	echo '<tr><td>'.$value['question_id'].'</td>';
	echo '<td>' .$value['points'];
	echo '</td></tr>';
}

echo '<tr><td>Общ резултат</td>
		  <td>'.$data['total_sum2'].'</td>
	  </tr>';
echo '</tbody></table>';
?>
	

<h1>Успешно попълнихте теста.</h1>

	<ul class="nav nav-pills">
		<li class="active">
			<a href="exit.php">Край на теста</a>
		</li>
	</ul>		
