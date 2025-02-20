window.onload = function() {
    if (!localStorage.getItem("loggedIn")) {
        window.location.href = "index.html";
    }
};
function logout() {
    localStorage.removeItem("loggedIn");
    window.location.href = "index.html";
}
