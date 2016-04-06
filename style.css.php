<?php 
session_start(); 
header('content-type: text/css');
?>

* {
	padding: 0px;
	margin: 0%;
 	font-family: arial, sans-serif;
}
#container {
	width: 70%;
	height: 100px;
	margin: 0% auto;
}
h1 {
	text-align: center;
	padding-top: 20px;
	color: #6e8992;
	text-shadow: 3px 3px 5px #888888;
}
form {
	width: 60%;
	padding: 20px;
	margin: 3% auto;
	border: 10px groove lightblue;
	border-radius: 20px;
	box-shadow: 10px 10px 10px #888888;

}
label, input {
	width: 48%;
	display: inline-block;
	vertical-align: bottom;
	margin: 2% 0%;
	border-radius: 5px;
}

#submitBtn {
	width: 25%;
	display: block;
	margin: 5% auto;
	background: lightblue;
	border: 1px solid #6e8992;
	border-radius: 5px;
	font-weight: bold;
	padding: 5px;
	box-shadow: 5px 5px 10px #888888;
	color: #6e8992;
}














