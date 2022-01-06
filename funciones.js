window.onload = function(){
    document.getElementById("menu-btn").addEventListener("click",obtenerDatosAl);  
}
let btn = document.querySelector('#menu-btn');
let menu = document.querySelector('#sidemenu');

function excol(){
    menu.classList.toggle("menu-expanded");
    menu.classList.toggle("menu-collapsed");
    alert("llegaste");
    document.querySelector('.body').classList.toggle('body-expanded');
}