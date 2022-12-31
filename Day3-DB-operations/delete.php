<?php 

include_once 'config.php';
if(isset($_GET['id'])){
		$delQuery= "DELETE FROM users WHERE id=".$_GET['id'];
	$result=$conn->query($delQuery);
	if($result){
		header("Location:view.php");
		}else{
			header("Location:view.php");
			}
	}
?>