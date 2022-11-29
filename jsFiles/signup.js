const regno = document.getElementById("regno");
const email = document.getElementById("email");
const pass = document.getElementById("pass");
const name = document.getElementById("name");
const phno = document.getElementById("phone");


const regReg = /^[0-9]{2}[A-Za-z]{3}[0-9]{4}$/;
regno.addEventListener('input',()=>{
    if(!regReg.test(regno.value)){
        regno.setCustomValidity("Registration number not valid");
    }
    else{
        regno.setCustomValidity("");
    }
});

const nameReg = /^[a-zA-Z\s]+$/;
name.addEventListener('input',()=>{
    if(name.value.length < 3){
        name.setCustomValidity("Name length must be greater than 3")
    }
    else if(!nameReg.test(name.value)){
        name.setCustomValidity("Name can only contain a-z alphabets");
    }
    else{
        name.setCustomValidity("");
    }
});

const emailReg = /^[a-zA-Z0-9]+@+[a-z.]+$/;
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

const phReg = /^[7-9][0-9]{9}$/;
phno.addEventListener('input',()=>{
    if(phno.value.length < 10){
        phno.setCustomValidity("Your phone number should be more than 10 in length");
    }
    else if(!phReg.test(phno.value)){
        phno.setCustomValidity("Enter correct number");
    }
    else{
        phno.setCustomValidity("");
    }
});