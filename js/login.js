document.getElementById('login-submit').addEventListener('click', function() {
  
    /*  get user emaill */
    const emailField = document.getElementById('email');
    const UserEmail = emailField.value;
    if(UserEmail!=''){
emailField.style.borderColor="red";
    }

    /*  get user pass */
    const PassField = document.getElementById('user-pass');
    const UserPass = PassField.value;

    /*    check email and password */


})