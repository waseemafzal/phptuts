<?php 

include_once 'config.php';

if(isset($_POST['btnUpdate'])){
	$name=$_POST['txt_name'];
	$email=$_POST['txt_email'];
	$password=$_POST['txt_password'];
	// query insert
	$updateQuery= "update  users set name='".$name."' ,email='".$email."' ,password='".$password."' where id=".$_POST['id'];
	$result=$conn->query($updateQuery);
	if($result){
		header("Location:view.php");
		}else{
			header("Location:view.php");
			}
	}
?>