<!DOCTYPE html>
 <html>

<head>

    <title>Form validate</title>
    <style>

.error {
  color: red;
  margin-left: 5px;
}
 

    </style>
   

    <script src="jquery.min.js"></script>
    <script type="text/javascript">

  $(document).ready(function() {

  $('#first_form').submit(function(e) {
    e.preventDefault();
    var first_name = $('#first_name').val();
    //var last_name = $('#last_name').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var mobile = $('#mobile').val();
    var country = $('#country').val();
    //var radio1 = $('#radio1').check();
    //var radio2 = $('#radio2').check();
    var radio = $("input[type='radio']:checked"); 
    

    $(".error").remove();

    //Name Validation
    if ((first_name=="") ) {
      $('#first_name').after('<span class="error">*Name Should Required </span>');
    }
    if( (first_name!=""))
    {
    	if((!isNaN(first_name)) || (first_name.length < 3 || first_name.length > 8))
    	$('#first_name').after('<span class="error">*Please Enter Valid Name </span>');
    }

    //Email Validation
    if (email.length < 1) {
      $('#email').after('<span class="error">*Email Should Required</span>');
    } else {
      var regEx = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
      var validEmail = regEx.test(email);
      if (!validEmail) {
        $('#email').after('<span class="error">Enter a valid Email-Id</span>');
      }
    }

     //Password Validation
    if(password==""){
     $('#password').after('<span class="error">*Password Should Required</span>');	
    }
    if(password!=""){
    if (password.length < 6 || password.length > 8) {
      $('#password').after('<span class="error">Password should be between 6 to 8 characters </span>');
    }
    else{
    	var pass_regex=/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])(?=\S+$).{6,8}$/;
    	var validpass = pass_regex.test(password);
      if (!validpass) {
        $('#password').after('<span class="error">Enter a valid Password</span>');
      }
    }
   }

   //Mobile Validation
   if ((mobile=="") ) {
      $('#mobile').after('<span class="error">*Mobile No Should Required </span>');
    }
    if(mobile!="")
    {
    	if(mobile.length !=10)
    	$('#mobile').after('<span class="error">*Please Enter Valid Mobile No </span>');
    }

    //Country Validation
     if ((country=="") ) {
      $('#country').after('<span class="error">*Select Your Country Name </span>');
    }

    //Gender Validation
     if (radio.length=="") {
      $('#gen').after('<span class="error">*Select Your Gender </span>');
    }

  });

});

//validate form
    </script>

</head>

           <body>
               <h1>Jquery Validation Demo</h1>

 <form id="first_form" action='#' method="POST" >

 <p>*Name:</p><input id="first_name" type="text" name='name' placeholder="Enter Name"><br>    
 <p>*Email:</p> <input id="email" type="email" name="email" placeholder="Enter Email"><br>
 <p>*Password:</p> <input id="password" type="text" name="password" placeholder="Enter Password"><br>
 <p>*Mobile:</p> <input id="mobile" type="number" name="mobile" placeholder="Enter 10 Digits Only"><br><br>
 <label>*Country:</label>
  <select id="country" name="country">
 	<option value="">--Select Country--</option>
 	<option value="India">INDIA</option>
 	<option value="Usa">USA</option>
 	<option value="Canada">CANADA</option>
 	<option value="Uk">UK</option>
 	<option value="Other">Other</option>
 </select><br><br>
<label>*Gender:</label>
<input type="radio" name="gender" id="radio1" value="Male">Male
<input type="radio" name="gender" id="radio2" value="Female">Female <span id="gen"></span><br><br>
<input class='button send' type="submit" value="Submit" id="submit">
</form>

    <h5>* Required fields</h5>       



    </body>
           
</html>