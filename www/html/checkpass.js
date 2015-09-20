function checkPass()
{
    //Store the password field objects into variables ...
    var inputPassword = document.getElementById('inputPassword');
    var inputPasswordConfirm = document.getElementById('inputPasswordConfirm');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(inputPassword.value == inputPasswordConfirm.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        inputPasswordConfirm.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        inputPasswordConfirm.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  