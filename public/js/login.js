
$(document).on("click", "#loginBtn", function(e) {
    let email = document.getElementById('email').value
    let pwd = document.getElementById('password').value
    sessionStorage.setItem('email', email);
    sessionStorage.setItem('pwd', pwd);

});
