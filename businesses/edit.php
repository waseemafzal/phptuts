<?php 
include_once 'config.php';
$select = 'select * from users where id='.$_GET['id'];
$result	= $conn->query($select);
$row =  $result->fetch_assoc();
?>
<form id="form1" name="form1" method="post" action="update.php">

  <table width="200" border="1" cellspacing="2" cellpadding="2">
    <tr>
      <th scope="row">Name</th>
      <td><input type="text" name="txt_name" id="name" value="<?php echo $row['name'] ?>" /></td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td><input type="text" name="txt_email" id="email" value="<?php echo $row['email'] ?>" /></td>
    </tr>
   <tr>
      <th scope="row">Password</th>
      <td><input type="password" name="txt_password" id="txt_password" value="<?php echo $row['password'] ?>"  /></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
      <td><input type="submit" name="btnUpdate"  id="btn" value="Submit" /></td>
    </tr>
  </table>
</form>
