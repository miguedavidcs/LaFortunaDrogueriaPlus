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
    <link rel="stylesheet" href="assets/css/sections.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style-producto.css">
    <link rel="stylesheet" href="/assets/css/style-marcas.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        
.row-about-card {
    margin: 0 -10px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center; /* Center align the columns */
}

.column-about-card {
    flex: 1;
    max-width: 25%;
    padding: 0 10px;
    box-sizing: border-box;
}

.row-about-card:after {
    content: "";
    display: table;
    clear: both;
}

.card-about {
    background: linear-gradient(#f9f9f9, #0080f126); /* Green gradient */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    padding: 20px;
    text-align: center;
    color: #444;
    transition: transform 0.3s, box-shadow 0.3s;
}

.card-about:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}

.card-about p {
    margin: 0;
}

.card-about .fa {
    font-size: 50px;
    color: #4CAF50; /* Soft green color */
}

.card-about h3 {
    font-size: 2em;
    margin: 10px 0;
    color: #333;
}

.card-about p:last-of-type {
    font-size: 1.2em;
    color: #555;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 20px;
    background-color: #005aaa; /* Green color */
    color: white;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1em;
    transition: background-color 0.3s, transform 0.3s;
}

.btn:hover {
    background-color: #005aab; 
    transform: translateY(-2px);
}

@media screen and (max-width: 600px) {
    .column-about-card {
        max-width: 100%;
        margin-bottom: 20px;
    }
}

    </style>
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
