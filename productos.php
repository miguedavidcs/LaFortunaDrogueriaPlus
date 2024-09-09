<?php include 'includes/header.php'; ?>

<main class="main-producto">
    <div class="container-prod">
        <h3 class="title">Products</h3>
        <div id="products-container-prod" class="products-container-prod">
            <!-- Los productos se generarán aquí mediante JavaScript -->
        </div>
    </div>

    <!-- Contenedor de vistas previas -->
    <div id="products-preview" class="products-preview">
        <!-- Las vistas previas se generarán aquí mediante JavaScript -->
    </div>
</main>


<!-- Incluir los archivos JavaScript -->
<script src="js/constantes.js"></script>
<script src="js/generarProductos.js"></script>
<script src="js/interaccionProductos.js"></script>

<?php include 'includes/footer.php'; ?>
