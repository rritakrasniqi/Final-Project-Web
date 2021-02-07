function login_submit(){
    //Validimi i formes se login=it
	var email = document.getElementById('email');
	if(email.value == "" || email.value == undefined || email.value == null){
	alert("Email eshte i obligueshem");
	return;
	}

	var password = document.getElementById('password');
	if(password.value == "" || password.value == undefined || password.value == null){
	alert("Password eshte i obligueshem");
	return;
	}
 }


function register_submit(){
	//Validimi i formes se register
	var name = document.getElementById('register_name');
	if(name.value == "" || name.value == undefined || name.value == null){
		alert("Emri eshte i obligueshem");
		return;
	}

	var surname = document.getElementById('register_surname');
	if(surname.value == "" || surname.value == undefined || surname.value == null){
		alert("Mbiemri eshte i obligueshem");
		return;
	}

	var register_email = document.getElementById('register_email');
	if(register_email.value == "" || register_email.value == undefined || register_email.value == null){
		alert("Email eshte i obligueshem");
		return;
	}

	var register_phone = document.getElementById('register_phone');
	if(register_phone.value == "" || register_phone.value == undefined || register_phone.value == null){
		alert("Phone eshte i obligueshem");
		return;
	}

	var register_password = document.getElementById('register_password');
	if(register_password.value == "" || register_password.value == undefined || register_password.value == null){
		alert("Passwordi eshte i obligueshem");
		return;
	}

	var register_confirmpassword = document.getElementById('register_confirmpassword');
	if(register_confirmpassword.value == "" || register_confirmpassword.value == undefined || register_confirmpassword.value == null){
		alert("Confirm passwordi eshte i obligueshem");
		return;
	}

	if(register_password.value != register_confirmpassword){
		alert("Passwordi dhe Confirm passwordi duhet te jene te njejte");
		return;
	}
}




function contact_submit(){
	//Validimi i fromes se kontaktit
	
	var contact_name=document.getElementById('contact_name');
	if(contact_name.value == "" || contact_name.value == undefined || contact_name.value == null){
		alert("Emri eshte i obligueshem");
		return;
	}
	
	var contact_surname = document.getElementById('concat_surname');
	if(surname.value == "" || surname.value == undefined || surname.value == null){
		alert("Mbiemri eshte i obligueshem");
		return;
	}
	
	
	var contact_email = document.getElementById('contact_email');
	if(contact_email.value == "" || contact_email.value == undefined || contact_email.value == null){
		alert("Email eshte i obligueshem");
		return;
	}
	
	var contact_phone = document.getElementById('contact_phone');
	if(contact_phone.value =="" ||  contact_phone.value==undefined || contact_phone.value==null){
		alert ("Numri i telefonit eshte i obligurar");
		return;
	}
	
	var contact_message = document.getElementById('contact_message');
	if(contact_message.value =="" ||  contact_message.value==undefined || contact_message.value==null){
		alert ("Ju lutem shenoni mesazh");
		return;
	}
		
	
}