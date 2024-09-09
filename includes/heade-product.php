<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Droguería</title>
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/header-footer.css">
    <link rel="stylesheet" href="assets/css/buttons.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/style-producto.css">
    <link rel="stylesheet" href="assets/css/sections.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <header>
        <div class="logo">
            <!-- Muestra el logo o la frase "La Fortuna" cuando la pantalla es pequeña -->
            <img src="assets/img/logo.png" alt="Logo de Mi Droguería" class="logo-img">
            <span class="logo-text">La Fortuna</span>
        </div>
        <div class="hamburger" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <nav class="menu">
            <a href="index.php#home">Inicio</a>
            <a href="index.php#about">Sobre Nosotros</a>
            <a href="index.php#services">Servicios</a>
            <a href="productos.php">Productos</a>
            <a href="contact.php">Contacto</a>
        </nav>
    </header>
