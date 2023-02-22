<?php 
include_once'inc/db.php';
if(isset($_POST['btnSubmit'])){

// check if email and password exist in db 
$query="SELECT * from `table` where email = '".$_POST['email']."' and  password = '".$_POST['password']."'";

// execute query 

$result = mysqli_query($conn,$query);

if($result->num_rows>0){

    $userinfo = $result->fetch_assoc() ;
    // if exist true then set his session and redirect him to dashboard
    session_start();
$_SESSION['name']=$userinfo['name'];
$_SESSION['id']=$userinfo['id'];
$_SESSION['login']=1;
header("Location:dashboard.php");
}else{
    header("Location:login.php?error=500&message=Sorry wrong credentials");
}

}

?>