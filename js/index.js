function validation() {
    let name = document.contact_form.name.value;
    let email_check = document.contact_form.email_check.value; 

    if (name == "") {
        document.getElementById('nameerr').innerHTML = "Enter Your Name"
        return false;
    } else {
        document.getElementById('nameerr').innerHTML = ""
    }
    if (email_check == "") {
        document.getElementById('emailerr').innerHTML = "Enter Your Email"
        return false;
    } else {
        document.getElementById('emailerr').innerHTML = ""
    }
    if (/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(email_check)) {
        document.getElementById('emailerr').innerHTML=""
    } else {
        document.getElementById('emailerr').innerHTML = "Email Unvalid!"
        return false;
    }
}

