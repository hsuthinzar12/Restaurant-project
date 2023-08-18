
function reservation(){
    let firstname = document.reservationform.firstname.value;
    let lastname = document.reservationform.lastname.value;
    let _email = document.reservationform.email.value;
    
    if (firstname == "") {
        document.getElementById("firstnameerr").innerHTML= "Enter Your Firstname";
        return false;
    } else {
        document.getElementById("firstnameerr").innerHTML="";
    }
    if (lastname == "") {
        document.getElementById("lastnameerr").innerHTML = "Enter Your Lastname";
        return false;
    } else {
        document.getElementById("lastnameerr").innerHTML = "";
    }

    if (_email == "") {
        document.getElementById("emailerr").innerHTML = "Enter Your Email";
        return false;
    } else if (/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(_email)) {
        document.getElementById("emailerr").innerHTML="";
    } else {
        document.getElementById("emailerr").innerHTML="Unvalid Email!";
        return false;
    }
}