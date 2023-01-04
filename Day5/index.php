<?php 
// Start the session
session_start();
$_SESSION['login']=1;
$_SESSION['username']='waseem';
$_SESSION['email']='waseem31@gmail.com';

echo '<pre>';
print_r($_SESSION);

?>
<a href="profile.php"> Hello <b><?=$_SESSION['username']?></b> Click to view Profile</a>