$(document).ready(function(){
    
    const clientLogin = document.getElementById('C-login');
    const userLogin = document.getElementById('U-login');
    const loginClose = document.getElementById('login-close');
    const signUpClose = document.getElementById('sign-up-close');
    const signUp = document.getElementById('signup_');
    const signUpForm = document.getElementById('sign-up');
    const loginInput = document.querySelector('.right-click-disable-message');
    
    
    function showLogin () {
        userLogin.addEventListener('click', () => {
            loginInput.classList.add('active');  
       });
        clientLogin.addEventListener('click', () => {
            loginInput.classList.add('active');  
       });
        loginClose.addEventListener('click', () => {
            loginInput.classList.remove('active');
            window.location.href = location.href.replace("#login", '');
        });
    }
    
    function openSignUp () {
        signUp.addEventListener('click', () => {
            signUpForm.classList.add('active');
        });
        signUpClose.addEventListener('click', () => {
            signUpForm.classList.remove('active');
            window.location.href = location.href.replace("#signup", '');

        });
    }
    
    function addClassLogin () {
        loginInput.classList.remove('active');
        if(window.location.href.indexOf("#login") > -1) {
            loginInput.classList.add('active');
            }
    } 
    function addClassSignup () {
        signUpForm.classList.remove('active');
        if(window.location.href.indexOf("#signup") > -1) {
            signUpForm.classList.add('active');
            }
    }
    
    showLogin();
    openSignUp();
    addClassLogin();
    addClassSignup();
});