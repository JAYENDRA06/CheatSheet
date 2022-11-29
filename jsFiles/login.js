const regno = document.getElementById("regno");
const email = document.getElementById("email");
const pass = document.getElementById("pass");


const regReg = /^[0-9]{2}[A-Za-z]{3}[0-9]{4}$/;
regno.addEventListener('input',()=>{
    if(!regReg.test(regno.value)){
        regno.setCustomValidity("Registration number not valid");
    }
    else{
        regno.setCustomValidity("");
    }
});

const emailReg = /^[a-zA-Z0-9]+@[a-z.]+$/;
email.addEventListener('input',()=>{
    if(!emailReg.test(email.value)){
        email.setCustomValidity("Email address not valid");
    }
    else{
        email.setCustomValidity("");
    }
});

const passReg = /[a-zA-Z0-9@#*$]{8,}/;
pass.addEventListener('input',()=>{
    if(pass.value.length < 8){
        pass.setCustomValidity("Your password should be more than 8 in length");
    }
    else if(!passReg.test(pass.value)){
        pass.setCustomValidity("Only *$@# special characters are allowed");
    }
    else{
        pass.setCustomValidity("");
    }
});