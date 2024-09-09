<?php include 'includes/header.php'; ?>
<main>
    <section id="contact">
        <h2>Contacto</h2>
        <div class="form-container">
            <form action="scripts/submit_form.php" method="post">
                <?php
                session_start();
                if (empty($_SESSION['csrf_token'])) {
                    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                }
                ?>
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" placeholder="Tu nombre completo" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Número de Teléfono:</label>
                    <input type="tel" id="phone" name="phone" placeholder="Tu número de teléfono" required>
                </div>
                
                <div class="form-group">
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" rows="4" placeholder="Escribe tu mensaje aquí" required></textarea>
                </div>
                                
                <button type="submit" class="btn">Enviar</button>
            </form>
        </div>

        <!-- Mapa de ubicación -->
        <div class="map-container">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.531915039166!2d-75.9006091!3d8.753123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5a25563023d097%3A0xff9a487f9370f7f2!2sLa%20Fortuna%20Droguer%C3%ADa%20Plus!5e0!3m2!1ses!2ses!4v1632972261234!5m2!1ses!2ses" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</main>
<?php include 'includes/footer.php'; ?>
