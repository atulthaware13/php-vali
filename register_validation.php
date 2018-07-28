<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
	<script type="text/javascript" src="form_validate.js"></script>
	
</head>
<body>
	<h1>Registration Form</h1>
	<form  action="" method="POST">
<div style="position: absolute; left:80px; top:60px; border: 1px solid ;width:400px;height:350px;padding: 15px">
<label>Name:</label>
<input type="text" name="uname" id="uname" placeholder="Enter Name"><span style="color:red" id="p1"></span><br><br>
<label>Email:</label>
<input type="text" name="uemail" id="uemail" placeholder="Enter Email-Id"><span style="color:red" id="p2"></span><br><br>
<label>Password:</label>
<input type="password" name="upass" id="upass" placeholder="Enter Password" ><span style="color:red" id="p3"></span><br><br>
<label>Mobile:</label>
<input type="number" name="umobile" id="umobile" placeholder="Enter Mobile"><span style="color:red" id="p4"></span><br><br>
		<label>Country</label>
		<select name="country" id="Country">
			<option value="">--Select Country--</option>
			<option value="India">INDIA</option>
			<option value="Usa">USA</option>
			<option value="Australia">AUSTRALIA</option>
			<option value="Canada">CANADA</option>
			<option value="Other">OTHER</option>
		</select><span style="color:red" id="p5"></span><br><br>
		<label>Gender:</label>
		<input type="radio" name="gender" id="male" value="M">MALE
		<input type="radio" name="gender" id="female" value="F">FEMALE 
		<span style="color:red" id="p6"></span><br><br>
	<input type="checkbox" name="checkbox" id="checkbox">Accept Term 
	<span style="color:red" id="p7"></span><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="validate();" name="submit" value="Submit">
	  </div>
	</form>
</body>
</html>