<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Businesses</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
<form id="form1" name="form1" method="post" action="insert.php">
<?php 
if(isset($_GET['status']) and $_GET['status']==200){
	echo 'Inserted  successfully';
	}
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
	
	}	
?>
  <table  class="table" cellspacing="2" cellpadding="2">
    <tr>
      <th scope="row">Name</th>
      <td><input type="text" name="txt_name" id="name" /></td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td><input type="text" name="txt_email" id="email" /></td>
    </tr>
   <tr>
      <th scope="row">Password</th>
      <td><input type="password" name="txt_password" id="txt_password" /></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><input type="submit" name="btnSubmit"  id="btn" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>