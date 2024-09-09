<footer>
    <div class="footer-content">
        <div class="footer-section about">
            <h3>Mi Droguería</h3>
            <p>Tu salud es nuestra prioridad. En Mi Droguería, ofrecemos una amplia gama de productos para tu bienestar. Nos esforzamos por brindar el mejor servicio a nuestros clientes.</p>
        </div>

        <div class="footer-section links">
            <h3>Enlaces Rápidos</h3>
            <ul>
                <li><a href="index.php#home"">Inicio</a></li>
                <li><a href="index.php#products">Productos</a></li>
                <li><a href="index.php#home"">Sobre Nosotros</a></li>
                <li><a href="#contact">Contacto</a></li>
            </ul>
        </div>

        <div class="footer-section contact">
            <h3>Contáctanos</h3>
            <ul>
                <li><a href="tel:+1234567890">Teléfono: +1 234 567 890</a></li>
                <li><a href="mailto:info@midrogueria.com">Email: info@midrogueria.com</a></li>
                <li><a href="https://wa.me/1234567890" target="_blank">WhatsApp: Chat en línea</a></li>
            </ul>
        </div>

        <div class="footer-section newsletter">
            <h3>Suscríbete a nuestro boletín</h3>
            <form action="#">
                <input type="email" placeholder="Tu correo electrónico" required>
                <button type="submit">Suscribirse</button>
            </form>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2024 Mi Droguería. Todos los derechos reservados.</p>
    </div>
</footer>

<!-- Icono flotante de WhatsApp -->
<a href="https://wa.me/1234567890" class="whatsapp-float" target="_blank">
    <img src="assets/img/whatsapp-icon.png" alt="Chat de WhatsApp">
</a>
<script>
    function toggleMenu() {
        const menu = document.querySelector('.menu');
        menu.style.display = (menu.style.display === 'flex') ? 'none' : 'flex';
    }
</script>