<?php
session_start();
include 'includes/header.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    echo "Acceso no autorizado.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lógica para agregar, editar o eliminar productos
}

$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!-- HTML para administrar productos -->