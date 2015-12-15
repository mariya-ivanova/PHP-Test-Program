<?php


function render($data, $name){           
    include $name;       
}

mb_internal_encoding('UTF-8');
$db = mysqli_connect('localhost', 'sample_user', 'sample_password', 'sample_db');

if (!$db) {
    $er[] = 'No database';
    exit;
}
mysqli_set_charset($db, 'utf8');


function getAuthors($db) {
    $q = mysqli_query($db, 'SELECT * FROM authors');
    if (mysqli_error($db)) {
        return false;
    }
	$ret = array();
//    $ret = []; /* for php version 5.5 or higher */
    while ($row = mysqli_fetch_assoc($q)) {
        $ret[] = $row;
    }
    return $ret;
}

function isAuthorIdExists($db, $ids) {
    if (!is_array($ids)) {
        return false;
    }
    $q = mysqli_query($db, 'SELECT * FROM authors WHERE 
        author_id IN(' . implode(',', $ids) . ')');
    if (mysqli_error($db)) {
        return false;
    }
    
    if (mysqli_num_rows($q) == count($ids)) {
        return true;
    }
    return false;
}