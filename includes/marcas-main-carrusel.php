<style>
    #marcas-main-carrusel {
        padding: 20px;
        background-color: #f9f9f9;
        text-align: center;
    }

    .marcas-main-carrusel h2 {
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    .carrusel-container {
        position: relative;
        max-width: 100%;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .carrusel-track {
        display: flex;
        transition: transform 0.5s ease;
    }

    .carrusel-item {
        min-width: 120px;
        margin: 0 10px;
        border-radius: 50%;
        overflow: hidden;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .carrusel-item img {
        display: block;
        width: 100%;
        height: auto;
        border-radius: 100%;
        transition: transform 0.3s ease;
    }

    .carrusel-item:hover img {
        transform: scale(1.1);
    }

    .carrusel-item::after {
        content: attr(title);
        position: absolute;
        bottom: -40px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #005aaa;
        color: #fff;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 14px;
        opacity: 0;
        transition: opacity 0.3s ease, bottom 0.3s ease;
        white-space: nowrap;
        z-index: 10;
    }

    .carrusel-item:hover::after {
        opacity: 1;
        bottom: -20px;
    }

    .carrusel-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: #005aaa;
        border: none;
        color: white;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease;
    }

    .carrusel-btn:hover {
        background-color: #003d82;
    }

   
</style>

<section id="marcas-main-carrusel">
    <div class="marcas-main-carrusel">
        <h2>Marcas destacadas ⭐</h2>
        <div class="carrusel-container">
            <div class="carrusel-track" id="carrusel-track">
                <!-- Los ítems se añadirán dinámicamente aquí -->
            </div>
            
        </div>
    </div>
</section>
<script src="js/constantes.js"></script>
<script src="js/interaccionMarcas.js"></script>
