<?php 

session_start();


$_SESSION['formInfo'] = array();
foreach ($_POST as $key => $value) {
	$_SESSION['formInfo'][$key] = $value;
}
var_dump($_SESSION['formInfo']);

header('Location: PHP-RegWithOutValidation.php')


?>