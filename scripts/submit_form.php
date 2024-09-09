<?php
session_start();

// Verificar el token CSRF
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('Token CSRF inválido.');
    }

    // Obtener los datos del formulario
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Configurar el número de teléfono de destino (puede ser tu número de WhatsApp)
    $whatsappNumber = 'YOUR_WHATSAPP_NUMBER'; // Reemplaza con tu número de WhatsApp

    // Formatear el mensaje
    $textMessage = "Nombre: $name\nNúmero de Teléfono: $phone\nMensaje: $message";

    // Crear la URL de WhatsApp
    $whatsappUrl = "https://api.whatsapp.com/send?phone=$whatsappNumber&text=" . urlencode($textMessage);

    // Redirigir a WhatsApp
    header("Location: $whatsappUrl");
    exit();
} else {
    die('Método de solicitud no permitido.');
}
?>
