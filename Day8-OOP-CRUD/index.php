
<?php
include 'db.php';
$db = new db();
$btn='btnSubmit';
$id='';
/*****************add data************************/	
if(isset($_POST['btnSubmit'])) {
	extract($_POST);
	$userData = array( 
            'name' => $name, 
            'email' => $email, 
            'phone' => $phone 
        );
		
	if($db->insert('users',$userData)){
		echo 'Inserted successfully';
		}	
	}
/****************update data*************************/	
if(isset($_POST['btnUpdate'])) {
	//$db->pre($_POST);
	extract($_POST);
	$userData = array( 
            'name' => $name, 
            'email' => $email, 
            'phone' => $phone 
        );
		
	if($db->update('users',$userData,array('id'=>$id))){
		echo 'Updated successfully';
		}
	
	}
/*******************delete data**********************/	
if(isset($_GET['action']) and $_GET['action']=='delete') {
$db->delete('users',array('id'=>$_GET['id']));
}

/****************edit data and set in form*************************/	
$name='';
$email='';
$phone='';
if(isset($_GET['action']) and $_GET['action']=='edit') {
$edituser = $db->getData('users','id='.$_GET['id']);
$user = $edituser[0];
$name = $user['name'];
$email = $user['email'];
$phone = $user['phone'];
$id = $user['id'];
$btn='btnUpdate';
}

/*****************get data from table************************/	

$users = $db->getData('users');


?>

<form id="form1" name="form1" method="post" action="">
<p>
<input type="text" name="name" placeholder="Enter name" value="<?php echo $name?>" />
</p>
<p>
<input type="email" name="email" placeholder="Enter email" value="<?php echo $email?>" />
</p>
<p>
<input type="text" name="phone" placeholder="Enter phone" value="<?php echo $phone?>" />
<input type="hidden" name="id"  value="<?php echo $id?>" />
</p>
<p>
<input type="submit" name="<?php echo $btn ?>"  />
</p>


</form>




    <!-- List the users -->
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th width="5%">#</th>
                <th width="20%">Name</th>
                <th width="25%">Email</th>
                <th width="18%">Phone</th>
                <th width="18%">Created</th>
                <th width="14%">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($users)){ 
			$i=0; foreach($users as $row){ $i++; ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['created']; ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $row['id']; ?>" class="btn btn-warning">edit</a>
                    <a href="index.php?action=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete data?');">delete</a>
                </td>
            </tr>
            <?php } }else{ ?>
            <tr><td colspan="5">No user(s) found...</td></tr>
            <?php }  ?>
        </tbody>
    </table>
</div>

