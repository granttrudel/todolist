<?php
session_start();
$_SESSION['test'] = $_POST;
header( 'Location: index.php' ) ;
?>