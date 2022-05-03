const form = document.getElementById('form')

const username = document.getElementById('username')
const email = document.getElementById('email')
const password = document.getElementById('password')
const passwordConfirmation = document.getElementById('password-confirmation')

form.addEventListener("submit", (e) => {
    e.preventDefault();
 
    checkinputs();
})

function checkinputs(){
    const usernameValue = username.value
    const emailValue = email.value
    const passwordValue = password.value
    const passwordConfirmationValue = passwordConfirmation.value

    if (usernameValue === '') {
        setErrorFor(username, "O nome de usuário é obrigatório.");

    }
function setErrorFor(input, message){
    const formControl = input.parentElemnt;
    const small = formControl.querySelector("small")

    small.innerText = message;

    formControl.className = "form-control error"
}

function setSuccessFor (input){
    const formControl = input.parentElemnt; 

    formControl.className = "form-control success"
}
}