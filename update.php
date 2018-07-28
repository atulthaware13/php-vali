<?php
extract($_POST);
$uid=base64_decode($_GET['uid']);
require_once"dbconnect.php";
if(isset($submit))
 {

   	$sql="update register_user set name='$name',email='$email',mobile='$mobile' where user_id='$uid'";
   	$resp=mysqli_query($conn,$sql);
   	if($resp)
   	{
   		header("location:display.php");
   	}
   	else{
   		echo "Not Updated";
   	}
   }

?>
<?php
require_once"dbconnect.php";
$sql_qry="select name,email,mobile from register_user where user_id='$uid'";
$res=mysqli_query($conn,$sql_qry);
$row=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Form</title>
</head>
<body>
	<h3>Update Form</h3>
	<div style="position: absolute;left:250px;top:150px; border: 1px solid; width: 350px;height: 150px;padding: 25px ">
	<form action="" method="post">
		<label>Name</label>
		<input type="text" name="name" value="<?php echo $row['name'];?>"><br><br>
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $row['email'];?>"><br><br>
		<label>Mobile</label>
		<input type="text" name="mobile" value="<?php echo $row['mobile'];?>"><br><br>
		<input type="Submit" name="submit" value="Update">
	</form>
</div>
</body>
</html>