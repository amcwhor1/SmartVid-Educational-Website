function onClick(){
	
	if (document.getElementById("acceptTerms").checked == true){

		var first =	document.getElementById("firstName").value;
		var last = document.getElementById("lastName").value;
		var email = document.getElementById("email").value;
		var pass = document.getElementById("pass").value;
		var passConf = document.getElementById("passConf").value;
	
		alert("First: " + first + " | Last: " + last + " | Email: " + email + " | Password: " + pass + " | Confirm Password: " + passConf);
	
	}else{
		
		alert("You must accept the terms and conditions to continue");
		
	}

}