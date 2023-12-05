<!DOCTYPE html>
<html lang='en' class=''>

<head>

  <meta charset='UTF-8'>
  <title>CodePen Demo</title>

  <meta name="robots" content="noindex">

  <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
  <link rel="mask-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111">
  <link rel="canonical" href="https://codepen.io/AbdullahSajjad/pen/LYGVRgK">

  
  

  <style id="INLINE_PEN_STYLESHEET_ID">
    @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

:root{
    --succes-color: #2ecc71;;
    --error-color: #e74c3c;
}

/* 
*{
    box-sizing: border-box;
}

body{

    background-color: #f9fafb;
    font-family: 'Open Sans', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    margin: 0;
} */

.container{
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.3);
    width: 400px;
}

h2{
    text-align: center;
    margin: 0 0 20px;
}

.form{
    padding: 30px 40px;
}

.form-control{
    margin-bottom: 10px;
    padding-bottom: 20px;
    position: relative;
}

.form-control label{
    color:#777;
    display: block;
    margin-bottom: 5px; 
}
 
.form-control input
{
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    display: block;
    width: 100%;
    padding: 10px;
    font-size: 14px;   
}

.form-control input:focus{
    outline: 0;
    border-color: #777;

}

.form-control.success input {
    border-color: var(--succes-color);
}

.form-control.error input {
    border-color: var(--error-color);    
}

.form-control small{
    color: var(--error-color);
    position: absolute;
    bottom: 0;
    left: 0;
    visibility: hidden;
}

.form-control.error small{
    visibility: visible;
}
.form button {
    cursor: pointer;
    background-color: black;
    border: 2px solid black;
    border-radius: 4px;
    color: #fff;
    display: block;
    padding: 10px;
    font-size: 16px;
    margin-top:20px;
    width:100%;
}
  </style>

  

</head>

<body>
  <div class="container">
        <form id="form" class="form">
            <div class="form-control">
               
                <input type="hidden" id="password" placeholder="Enter password" value="TIKAL">
            
            </div>
            <div class="form-control">
                <label for="password2">Insira a tradução em LETRAS MAIÚSCULAS</label>
                <input  id="password2" placeholder="Traduza ou morra">
                <small>Error Message</small>
            </div>
            <button>Conferir Tradução</button>
        </form>
    </div>
  
<script>
    const form = document.getElementById('form');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

//Show input error messages
function showError(input, message) {
    const formControl = input.parentElement;
    formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerText = message;
}

//show success colour
function showSucces(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}


//checkRequired fields
function checkRequired(inputArr) {
    inputArr.forEach(function(input){
        if(input.value.trim() === ''){
            showError(input,`${getFieldName(input)} is required`)
        }else {
            showSucces(input);
        }
    });
}


//check input Length
function checkLength(input, min ,max) {
    if(input.value.length < min) {
        showError(input, `${getFieldName(input)} must be at least ${min} characters`);
    }else if(input.value.length > max) {
        showError(input, `${getFieldName(input)} must be les than ${max} characters`);
    }else {
        showSucces(input);
    }
}

//get FieldName
function getFieldName(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

// check passwords match
function checkPasswordMatch(input1, input2) {
    if(input1.value !== input2.value) {
        showError(input2, 'Você traduziu errado, tente novamente!');
    }
}


//Event Listeners
form.addEventListener('submit',function(e) {
    e.preventDefault();

    checkRequired([password, password2]);
    checkLength(password,5,25);
    checkPasswordMatch(password, password2);
});
    </script>

</body>

</html>