let heure = document.getElementById("heure");

heure.innerHTML = localStorage.getItem("heureCo");

//verif connexion
window.onload = (e) => {
    if (localStorage.getItem("heureCo") == null) {
        alert("Vous devez être connecté pour accéder à cette page");
        window.location.href="../views/login.php";
    }
};

//bouton logout
let logOut = document.getElementById("logOut");
logOut.addEventListener("click", function (e) {
    alert("Vous vous êtes déconnecté");
    localStorage.removeItem("heureCo");
});