window.onload = function() {
    if (!localStorage.getItem("loggedIn")) {
        window.location.assign("kalender.html");
    }
};
function logout() {
    localStorage.removeItem("loggedIn");
    window.location.href = "index.html";
}
