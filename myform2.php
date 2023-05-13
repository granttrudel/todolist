<?php
session_start();
if (!empty($_POST['myInput'])) {
	$i = 0;
	if (!empty($_SESSION['test2'])) {
		foreach ($_SESSION['test2'] as $key => $value) {
			$i++;
		}
	}
	$_SESSION['test2'][$i] = $_POST['myInput'];
}
header( 'Location: index.php' ) ;
?>