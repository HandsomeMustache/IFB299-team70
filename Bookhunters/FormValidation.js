//called on submit
function formValidation()
{
var uid = document.registration.userid;
var passid = document.registration.passid;
var uname = document.registration.username;
var uemail = document.registration.email;

{
if(passid_validation(passid,7,12))
{
if(allLetter(uname))
{
if(ValidateEmail(uemail))
} 
}
} 



return false;
}


//validating userid
function userid_validation(uid,mx,my)
{
var uid_len = uid.value.length;
var goodColor = "#66cc66";
var badColor = "#ff6666";
if (uid_len == 0 || uid_len >= my || uid_len < mx)
{
alert("User Id should not be empty / length be between "+mx+" to "+my);
uid.focus();
return false;
}
return true;
}


//validating password
function checkPass()
{
    var password = document.getElementById('password');
    var pass2 = document.getElementById('cPassword');
    var message = document.getElementById('confirmMessage');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
	
    if( password.value && cPassword.value != null && password.value == cPassword.value){
      	cPassword.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
		document.getElementById("submit").disabled = false;
    }
	else if ( password.value && cPassword.value != null && password.value != cPassword.value) {
        cPassword.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
		 document.getElementById("submit").disabled = true;
    }
	
	else {
		 message.style.color = white;
			message.innerHTML = "";
	}
} 


//validating email format
function validateEmail() {

    var email = document.getElementById("email");
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var message = document.getElementById("emailmessage");
	var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if (!filter.test(email.value)) {
	  email.style.backgroundColor = badColor;
     message.innerHTML = "You have entered an invalid email address!";
	  message.style.color = badColor;
	  document.getElementById("submit").disabled = true;
 }
 
 else {
	 email.style.backgroundColor = goodColor;
	  message.innerHTML = "Valid email address";
	  message.style.color = goodColor;
	  document.getElementById("submit").disabled = false;
 }
}
