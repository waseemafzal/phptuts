<?php 
// connection
$conn = new mysqli('localhost','root','','php_learn_db');
if($conn->connect_error){
	echo 'Connection Error'.$conn->connect_error;
	}

?>