import './bootstrap';

var navbar = document.getElementById('main-navbar');
var alturaDelViewport = window.innerHeight;

window.addEventListener("scroll", function () {
    var scrolled = window.scrollY;

    if (window.innerWidth > 0) {
        if (scrolled > alturaDelViewport) {
            // Añadir clase 'bg-brown'
            // Eliminar clase 'bg-transparent'
            navbar.classList.add('bg-brown');
            navbar.classList.remove('bg-transparent');
        } else {
            // Añadir clase 'bg-transparent'
            // Eliminar clase 'bg-brown'
            navbar.classList.add('bg-transparent');
            navbar.classList.remove('bg-brown');
        }
    }
});

Fancybox.bind("[data-fancybox]", {
    // Your custom options
});  