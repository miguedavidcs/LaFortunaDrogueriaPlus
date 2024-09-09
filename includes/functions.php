<?php
// Este archivo puede contener funciones reutilizables para tu sitio

// Ejemplo de función para sanitizar entradas de formularios
function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}
?>
