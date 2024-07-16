const showPass = document.getElementById("showPass");
const passwordInput = document.getElementById("password");

showPass.addEventListener("click", function(e) {
    e.preventDefault();

    if(passwordInput.type == 'password') {
        showPass.innerHTML = "Hide";
        passwordInput.type = "text";
    } else {
        showPass.innerHTML = "Show";
        passwordInput.type = "password";
    }
});