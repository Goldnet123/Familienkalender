const users = { "Riller": "kiwi7" }; // Benutzer aktualisiert
function login() {
    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;
    if (users[user] && users[user] === pass) {
        localStorage.setItem("loggedIn", "true");
        window.location.href = "kalender.html";
    } else {
        document.getElementById("error-msg").innerText = "Falsche Login-Daten!";
    }
}
