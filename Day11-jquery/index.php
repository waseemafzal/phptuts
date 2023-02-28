<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jquery</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<style>
.error{
	border-color:red;
	
	}
</style>
</head>

<body>
<div id="alert"></div>
<form>
<table>
    <tr>
        <th>Name</th>
        <td><input type="text" name="name" id="name">
        <span id="msjName" style="display:none">This field is required</span>
        </td>
    </tr>
    <tr>
        <th>Email</th>
        <td><input type="text" name="email"  id="email">
        <span id="msjEmail" style="display:none">This field is required</span>
        </td>
    </tr>
    <tr>
        <th>Phone</th>
        <td><input type="text"  name="phone" id="phone">
        <span id="msjPhone" style="display:none">This field is required</span>
        </td>
    </tr>
    <tr>
       
        <td colspan="2" align="center"><input type="button" onClick="validate()" value="Register"></td>
    </tr>
</table>

</form>
</body>
</html>
<script>
function validate(){
	/*****************/
	var userName =	$("#name").val();
	if(userName==''){
	$("#name").addClass('error');
	$("#name").focus();
	$("#msjEmail").show();
	}else{
	$("#name").removeClass('error');
	$("#msjName").hide();
	}
	/*****************/
	/*****************/
	var email =	$("#email").val();
	if(email==''){
	$("#email").addClass('error');
	$("#email").focus();
	$("#msjEmail").show();
	}else{
	$("#email").removeClass('error');
	$("#msjEmail").hide();
	}
	/*****************/
	/*****************/
	var phone =	$("#phone").val();
	if(phone==''){
	$("#phone").addClass('error');
	$("#phone").focus();
	$("#msjPhone").show();
	}else{
	$("#phone").removeClass('error');
	$("#msjPhone").hide();
	}
	/*****************/

var formData = new FormData();	
formData.append('txtname',userName);
formData.append('txtphone',phone);
formData.append('txtemail',email);

$.ajax({
			type: "POST",
			url: "ajax.php",
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			dataType: 'JSON',
			success: function(data) {
				if(data.status==200){
					$("#alert").html(data.message);
					}
			}
	 });
  



	}
	
	
$("#name").on('keypress',function(){
	$("#name").removeClass('error');
	$("#msjEmail").hide();
	
	}
);	
	
</script>
