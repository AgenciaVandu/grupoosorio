window.addEventListener("scroll", function(){
    var nav = document.querySelector("nav");
    nav.classList.toggle("dark", window.scrollY > 0 );
})


