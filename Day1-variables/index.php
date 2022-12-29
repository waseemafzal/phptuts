
<?php
//local servers xampp, wamp , mamp

// echo used for output, print also for output

/*
$_
$ch12
case sensitive
e.g 
$VAR and $var are two diffrent variables

*/

/*
predefined variables in PHP
The PHP superglobal variables are:
$_REQUEST
$_POST
$_GET

$_SESSION
$GLOBALS
$_SERVER
$_COOKIE
$_FILES
$_ENV


*/

// array 

?>

<form id="form1" name="form1" method="post" action="save.php">
  <table width="200" border="1" cellspacing="2" cellpadding="2">
    <tr>
      <th scope="row">Name</th>
      <td><input type="text" name="txt_name" id="name" /></td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td><input type="text" name="txt_email" id="email" /></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><input type="submit"  id="btn" value="Submit" /></td>
    </tr>
  </table>
</form>
