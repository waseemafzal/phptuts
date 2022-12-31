<form id="form1" name="form1" method="post" action="insert.php">
<?php 
if(isset($_GET['status']) and $_GET['status']==200){
	echo 'Signup  successfully';
	}
?>
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
      <th scope="row">Password</th>
      <td><input type="password" name="txt_password" id="txt_password" /></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><input type="submit" name="btnSubmit"  id="btn" value="Submit" /></td>
    </tr>
  </table>
</form>
