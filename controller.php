<?php
session_start();
if (!empty($_POST['submit']) && $_POST['submit'] == 'Add') {
	if (!empty($_POST['myInput'])) {
		$i = 0;
		if (!empty($_SESSION['todolist'])) {
			foreach ($_SESSION['todolist'] as $key => $value) {
				$i++;
			}
		}
		$_SESSION['todolist'][$i] = $_POST['myInput'];
	}
} elseif (!empty($_POST['submit']) && $_POST['submit'] == 'Reset') {
	$_SESSION['todolist'] = ['run','read','write'];
	unset($_SESSION['checkeditems']);
} else {
	$_SESSION['checkeditems'] = $_POST;
} 
header( 'Location: index.php' );
?>