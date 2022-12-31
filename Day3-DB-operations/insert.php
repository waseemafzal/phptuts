<?php 

include_once 'config.php';

if(isset($_POST['btnSubmit'])){
	$name=$_POST['txt_name'];
	$email=$_POST['txt_email'];
	$password=$_POST['txt_password'];
	// query insert
	$insertQuery= "insert into users (name,email,password) VALUES ('".$name."','".$email."','".$password."')  ";
	$result=$conn->query($insertQuery);
	if($result){
		header("Location:index.php?status=200");
		}else{
			header("Location:index.php?status=204");
		
			}
	
	}else{
		echo 'in else';
		}


	
?>