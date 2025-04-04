<?php
include 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Procesar el mensaje o enviarlo por correo
    mail("admin@backgallery.com", "Nuevo mensaje de contacto", $message, "From: $email");
    echo "Mensaje enviado correctamente!";
}
?>

<form method="post">
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Mensaje:</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Enviar mensaje</button>
</form>

<?php include 'includes/footer.php'; ?>