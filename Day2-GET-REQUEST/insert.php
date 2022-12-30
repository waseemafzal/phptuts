<?php 

$server='localhost';
$dbuser='dbuserroot';
$dbpass='nMfx6HXRPlcjGlTa';
$db='tutsdb';

$conn = new mysqli($server,$dbuser,$dbpass,$db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST)){
	
	$insert="INSERT INTO `users`( `name`, `email`, `password`) VALUES ('".$_POST['txt_name']."','".$_POST['txt_email']."','".$_POST['txt_password']."')";
	
	//
	if ($conn->query($insert) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
	
	}

?>