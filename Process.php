<?php

session_start();

// var_dump($_FILES), will get you your file;

foreach ($_POST as $key => $value) {
	$_SESSION['formInfo'][$key] = $value;
}
var_dump($_SESSION['formInfo']);

header('Location: PHP-RegWithOutValidation.php')


?>
