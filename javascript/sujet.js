//bandeau
let heure = document.getElementById("heure");

heure.innerHTML = localStorage.getItem("heureCo");

//menu responsive

let menuBurger = document.getElementById("menuBurger");

menuBurger.addEventListener("click", function(e) {
    let menuHome = document.getElementById("menuHome");
    menuHome.classList.toggle("on");
    let menuCat1 = document.getElementById("menuCat1");
    menuCat1.classList.toggle("on")
    let menuCat2 = document.getElementById("menuCat2");
    menuCat2.classList.toggle("on");
    let menuCat3 = document.getElementById("menuCat3");
    menuCat3.classList.toggle("on");
})
//bouton logout
let logOut = document.getElementById("logOut");
logOut.addEventListener("click", function (e) {
    alert("Vous vous êtes déconnecté");
});

//verif connexion
window.onload = (e) => {
    if (localStorage.getItem("heureCo") == null) {
        alert("Vous devez être connecté pour accéder à cette page");
        window.location.href="../views/login.php";
    }
};