//fonction afficher/cacher mdp
let showMdp = document.getElementById("showMdp");
let hideMdp = document.getElementById("hideMdp");
let mdp = document.getElementById("password");

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

let showMdp2 = document.getElementById("showMdp2");
let hideMdp2 = document.getElementById("hideMdp2");
let confirmMdp = document.getElementById("confirm-password");

showMdp2.addEventListener("click", function (e) {
    e.preventDefault();
    confirmMdp.setAttribute("type", "text");
    showMdp2.classList.toggle("off");
    hideMdp2.classList.toggle("off");
});

hideMdp2.addEventListener("click", function (e) {
    e.preventDefault();
    confirmMdp.setAttribute("type", "password");
    showMdp2.classList.toggle("off");
    hideMdp2.classList.toggle("off");
});