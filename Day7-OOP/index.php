<?php

/*
OOP

*/
include 'cmath.php';
$object = new cmath();

 //echo $object->sum(100,200);
 $message='';
 $firstNo='';
 $secondNo='';
 if(isset($_POST['btnSubmit'])){
	  $firstNo=$_POST['firstNo'];
	 $secondNo=$_POST['secondNo'];
	if($_POST['operator']=='+'){
	 $result= $object->sum($_POST['firstNo'],$_POST['secondNo']);	
	 $message= 'The addition of given two number is : '.$result;
		}
	if($_POST['operator']=='-'){
	 $result= $object->subtract($_POST['firstNo'],$_POST['secondNo']);	
	 $message= 'The subtraction of given two number is : '.$result;
		}
	if($_POST['operator']=='*'){
	 $result= $object->mul($_POST['firstNo'],$_POST['secondNo']);	
	 $message= 'The multiplication of given two number is : '.$result;
		}
	if($_POST['operator']=='/'){
	 $result= $object->div($_POST['firstNo'],$_POST['secondNo']);	
	 $message= 'The division of given two number is : '.$result;
		}
		
	 }
?>

<form  method="post">

<p><input placeholder="Enter first number" type="number" name="firstNo" value="<?=$firstNo?>">
</p>
<p><input placeholder="Enter second  number" type="number" name="secondNo" value="<?=$secondNo?>">
</p>

<p><input type="radio" name="operator" value="+" /><label> + </label>
</p>
<p><input type="radio" name="operator" value="-" /><label> - </label>
</p>
<p><input type="radio" name="operator" value="*" /><label> * </label>
</p>
<p><input type="radio" name="operator" value="/" /><label> / </label>
</p>
<p><?php echo $message ?></p>
<input type="submit" name="btnSubmit" />
</form>



