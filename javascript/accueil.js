let date = document.getElementById("date");
let heure = document.getElementById("heure");
let day = new Date();

date.innerHTML = day.toLocaleDateString();
heure.innerHTML = localStorage.getItem("heureCo");