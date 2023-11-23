//fonction afficher/cacher mdp
let showMdp = document.getElementById("showMdp");
let hideMdp = document.getElementById("hideMdp");
let mdp = document.getElementById("password");
const form = document.querySelector('#signup');

showMdp.addEventListener("mousedown", function (e) {
    e.preventDefault();
    mdp.setAttribute("type", "text");
    showMdp.classList.toggle("off");
    hideMdp.classList.toggle("off");
});

hideMdp.addEventListener("mousedown", function (e) {
    e.preventDefault();
    mdp.setAttribute("type", "password");
    showMdp.classList.toggle("off");
    hideMdp.classList.toggle("off");
});

form.addEventListener('submit', function (e) {

        let day = new Date ();
        localStorage.setItem("heureCo", day.toLocaleTimeString())
    }

);

//Déjà connecté
window.onload = (e) => {
    if (localStorage.getItem("heureCo") != null) {
        alert("Vous vous êtes déjà connecté.\nRetour à la page d'accueil.");
        window.location.href="../views/accueil.php";
    }
};
