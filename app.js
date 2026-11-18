// app.js: arranca las librerías del sitio

// Carrusel del catálogo (librería Swiper)
if (document.querySelector('.carrusel')) {
  new Swiper('.carrusel', {
    spaceBetween: 16,
    grabCursor: true,          // se puede arrastrar con el mouse o el dedo
    rewind: true,              // al llegar al final vuelve al inicio
    autoplay: {
      delay: 3000,             // pasa solo cada 3 segundos
      pauseOnMouseEnter: true
    },
    navigation: {
      prevEl: '.flecha-anterior',
      nextEl: '.flecha-siguiente'
    },
    breakpoints: {
      0:   { slidesPerView: 1.2 },
      576: { slidesPerView: 1.6 },
      992: { slidesPerView: 2.3 }  // se ve parte de la siguiente tarjeta, como un carrusel
    }
  });
}

// Animaciones al hacer scroll (librería AOS)
AOS.init({
  duration: 800,
  once: true
});
