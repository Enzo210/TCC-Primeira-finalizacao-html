// mudar a cor da navbar
window.addEventListener('scroll', () =>{
    
    document.querySelector('nav').classList.toggle
    ('window-scroll', window.scrollY > 0)

})

//Abre a aba perfil do 'home'
function openNav() {
    
    document.getElementById("mySidenav").style.width = "500px";
    document.querySelector("header#header").style.filter = "blur(15px)";
    document.querySelector("footer#footer").style.filter = "blur(15px)";
    
    //ERA PRA TIRAR O LINK DA IMAGEM
    document.querySelector("a#img").setAttribute("class", "disabled");

}

function closeNav() {

    document.getElementById("mySidenav").style.width = "0";
    document.querySelector("header#header").style.filter = "blur(0)";
    document.querySelector("footer#footer").style.filter = "blur(0)";
    

}