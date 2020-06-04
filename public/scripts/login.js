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