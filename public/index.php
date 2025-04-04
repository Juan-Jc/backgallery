<?php
include '../includes/header.php';
include '../config/database.php';

$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>BackGallery - Tienda</title>
    <link rel="stylesheet" href="../assets/css/output.css">
</head>

<body>
    <h1>Bienvenido a BackGallery</h1>
    <div class="product-list">
        <?php foreach ($products as $product): ?>
            <div class="product">
                <img src="uploads/images/<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                <h3><?= htmlspecialchars($product['name']) ?></h3>
                <p><?= htmlspecialchars($product['description']) ?></p>
                <p>€ <?= htmlspecialchars($product['price']) ?></p>
                <a href="product_detail.php?id=<?= $product['id'] ?>">Ver más</a>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>
<?php include '../includes/footer.php'; ?>