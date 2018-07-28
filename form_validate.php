function validate(){
	var res=true;
	var name=document.getElementById('uname').value;
	var email=document.getElementById('uemail').value;
	var pass=document.getElementById('upass').value;
	var mobile=document.getElementById('umobile').value;
	var country=document.getElementById('Country').value;
	var radio1=document.getElementById('male').checked;
	var radio2=document.getElementById('female').checked;
	var check=document.getElementById('checkbox').checked;
	var name_regex = /^[a-zA-Z ]{3,15}$/;
	var email_regex=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	var pass_regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,8}$/;
	var mobile_regex=/^[0-9]{10}$/;

    //Validation For Name
	if(name==""){
		document.getElementById('p1').innerHTML="*Please Enter Name";
		res=false;
	}
	if(name!="")
	{
	  if ((!isNaN(name)) || (!name_regex.test(name)) || ((name.length) <3 || (name.length) >15) ){
		document.getElementById('p1').innerHTML="*Please Enter Valid Name";
		res=false;
        }
		else{
		  document.getElementById('p1').innerHTML=" ";
		  res=true;
		}
   }

   //Validation For Email
   if(email==""){
		document.getElementById('p2').innerHTML="*Please Enter Email-Id";
		res=false;
	}
	if(email!="")
	{
	  if (!email_regex.test(email)){
		document.getElementById('p2').innerHTML="*Please Enter Valid Email-Id";
		res=false;
        }
		else{
		  document.getElementById('p2').innerHTML=" ";
		  res=true;
		}
   }

   //Validation For PassWord
   if(pass==""){
		document.getElementById('p3').innerHTML="*Please Enter Password";
		res=false;
	}
	if(pass!="")
	{
	  if (!pass_regex.test(pass))
	    {
		 document.getElementById('p3').innerHTML="*Please Enter Valid Password";
		 res=false;
        }

         if(pass.length < 6 || pass.length > 8) 
         {
           document.getElementById('p3').innerHTML="*Please Enter Valid Password";
           res=false;
         }
		else
		{
		  document.getElementById('p3').innerHTML=" ";
		  res=true;
		}
    }

   //Validation For Mobile
	if(mobile==""){
		document.getElementById('p4').innerHTML="*Please Enter Mobile no.";
		res=false;
	}
	if(mobile!="")
	{
	  if (!mobile_regex.test(mobile) ){
		document.getElementById('p4').innerHTML="*Please Enter Valid No.";
		res=false;
        }
		else{
		  document.getElementById('p4').innerHTML=" ";
		  res=true;
		}
    }

   //Validation For Country
	if(country==""){
		document.getElementById('p5').innerHTML="*Please Select Country";
		res=false;
	}
	if(country!=""){
		document.getElementById('p5').innerHTML=" ";
		 res=true;
	  }

	//Validation For Gender
	if((radio1=="") && (radio2==""))
	{
        document.getElementById('p6').innerHTML="*Please Select Gender";
		res=false;
	}
	if((radio1!="") || (radio2!=""))
	{
        document.getElementById('p6').innerHTML=" ";
		res=true;
	}

	//Validation For Accept Terms
	if((check=="") )
	{
        document.getElementById('p7').innerHTML="*Please Accept Terms";
		res=false;
	}
	if((check!=""))
	{
        document.getElementById('p7').innerHTML=" ";
		res=true;
	}

   return res;
	
}