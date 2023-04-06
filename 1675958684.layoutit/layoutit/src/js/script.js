
window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("Abajo",window.scrollY>0);
})

