// <!--javascript for validation-->

  		//Check SignUp Form Validation

	  	function checkSignup()
	  	{
	  		if(document.form1.name.value=="")
	  		{
	  			alert("please enter your name");
	  			document.form1.name.focus();
	  			return false;
	  		}
	  		if(document.form1.email.value=="")
	  		{
	  			alert("please enter your E-mail Id");
	  			document.form1.email.focus();
	  			return false;
	  		}

	  		e=document.form1.email.value;
				f1=e.indexOf('@');
				f2=e.indexOf('@',f1+1);
				e1=e.indexOf('.');
				e2=e.indexOf('.',e1+1);
				n=e.length;

			if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
				{
					alert("Please Enter valid Email");
					document.form1.email.focus();
					return false;
				}

	  		if(document.form1.mobileno.value=="")
	  		{
	  			alert("please enter your mobile no.");
	  			document.form1.mobileno.focus();
	  			return false;
	  		}
	  		if(document.form1.pass.value=="")
	  			{
	  				alert("please enter your password");
	  				document.form1.pass.focus();
	  				return false;
	  			}
	  		if(document.form1.conpass.value=="")
	  			{
	  				alert("please confirm your password");
	  				document.form1.conpass.focus();
	  				return false;
	  			}
	  			if(document.form1.pass.value != document.form1.conpass.value)
	  			{
	  				alert("Password does not match !!!!");
	  				document.form1.conpass.focus();
	  				return false;
	  			}		
  		return true;	
  		}

  		//Check Login Form Validation
  		//function checkLogin()
  		//{
  			
  		///	if(document.form2.useremail.value == "")
  		//	{
  		//		alert("Please Enter Your E-mail");
  		//		document.form2.useremail.focus();
  		//		retur false;
  		//	}
  		//	else if(document.form2.password.value == "")
  		//	{
  		//		alert("please Enter Your Password");
  		//		document.form2.password.focus();
  		//		return false;
  		//	}
  		//	return true;
  		//}