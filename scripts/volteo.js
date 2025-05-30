function voltearCarta(elementoCarta) {
    // Añadimos la clase is-flipped a la carta
    elementoCarta.classList.toggle('giro');
}

// Seleccionamos todas las cartas
let todasLasCartas = document.querySelectorAll('.carta');

todasLasCartas.forEach(carta => {
    carta.addEventListener('click', function() {
        voltearCarta(this); // 'this' es la carta clickeada
    });
});

