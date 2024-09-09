 
   document.addEventListener('DOMContentLoaded', function () {
    

    const carruselTrack = document.getElementById('carrusel-track');

    // Añadir marcas al carrusel
    marcas.forEach(marca => {
        const carruselItem = document.createElement('div');
        carruselItem.classList.add('carrusel-item');

        const img = document.createElement('img');
        img.src = marca.image;
        img.alt = marca.name;
        img.title = `${marca.name}: ${marca.description}`;

        carruselItem.appendChild(img);
        carruselTrack.appendChild(carruselItem);
    });

    // Duplicar marcas para el efecto infinito
    marcas.forEach(marca => {
        const carruselItem = document.createElement('div');
        carruselItem.classList.add('carrusel-item');

        const img = document.createElement('img');
        img.src = marca.image;
        img.alt = marca.name;
        img.title = `${marca.name}: ${marca.description}`;

        carruselItem.appendChild(img);
        carruselTrack.appendChild(carruselItem);
    });

    let currentIndex = 0;
    const carruselItems = document.querySelectorAll('.carrusel-item');
    const totalItems = carruselItems.length;

    function moveToNextSlide() {
        currentIndex = (currentIndex + 1) % (totalItems / 2); // Usar la mitad del total porque duplicamos los elementos
        const offset = -currentIndex * (carruselItems[0].offsetWidth + 20); // Ajustar el margen entre los elementos
        carruselTrack.style.transform = `translateX(${offset}px)`;
        
        if (currentIndex === 0) {
            setTimeout(() => {
                carruselTrack.style.transition = 'none';
                carruselTrack.style.transform = `translateX(0)`;
                setTimeout(() => {
                    carruselTrack.style.transition = 'transform 0.5s ease';
                }, 20);
            }, 500); // Tiempo que tarda en la animación para volver al inicio
        }
    }

    setInterval(moveToNextSlide, 2000); // Cambia la imagen cada 2 segundos
});