// Tab-switching

let loginBtn = document.getElementById('login_btn');
let registerBtn = document.getElementById('register_btn');
let loginForm = document.querySelector('div.login');
let registerForm = document.querySelector('div.register');

registerBtn.onclick = toggleTabs;

function toggleTabs() {
    if (loginBtn.dataset.active == 'true') switchTabs(loginBtn, registerBtn, loginForm, registerForm);
    else switchTabs(registerBtn, loginBtn, registerForm, loginForm);
}

function switchTabs(activeBtn, inactiveBtn, elementToHide, elementToShow) {
    activeBtn.classList.remove('active');
    activeBtn.dataset.active = 'false';
    inactiveBtn.classList.add('active');
    inactiveBtn.dataset.active = 'true';
    inactiveBtn.onclick = null;
    activeBtn.onclick = toggleTabs;
    elementToShow.style.display = 'block';
    elementToHide.style.display = 'none';
}

// Form validation

let loginSubmit = document.getElementById('loginSubmit');
let registerSubmit = document.getElementById('registerSubmit');

loginSubmit.onclick = loginValidate;
registerSubmit.onclick = registerValidate;

function loginValidate() {
    let login = document.getElementById('loginLogin');
    let pass = document.getElementById('loginPass');
    let error_message = document.getElementById('login_error_message');
    if (!login.value) {
        error_message.innerHTML = 'Поле "Login" не може бути пустим';
        return false;
    }
    else if (!pass.value) {
        error_message.innerHTML = 'Поле "Password" не може бути пустим';
        return false;
    }
    else {
        error_message.innerHTML = '';
        return true;
    }
}

function registerValidate() {
    let login = document.getElementById('registerLogin');
    let pass = document.getElementById('registerPass');
    let passConfirm = document.getElementById('registerPassConfirmation');
    let error_message = document.getElementById("register_error_message");
    if (pass.value !== passConfirm.value) {
        error_message.innerHTML = 'Ви ввели різні паролі';
        return false;
    }
    else {
        error_message.innerHTML = '';
        return true;
    }
}