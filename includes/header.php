<!-- header.php -->
<header class="bg-blue-600 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="text-3xl font-bold">
            <a href="index.php">BackGallery</a>
        </div>

        <!-- Barra de navegación -->
        <nav class="space-x-6">
            <a href="index.php" class="hover:text-gray-200">Inicio</a>
            <a href="products.php" class="hover:text-gray-200">Productos</a>
            <a href="offers.php" class="hover:text-gray-200">Ofertas</a>
            <a href="contact.php" class="hover:text-gray-200">Contacto</a>

            <!-- Carrito de compras y login -->
            <a href="cart.php" class="hover:text-gray-200">Carrito</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="logout.php" class="hover:text-gray-200">Cerrar sesión</a>
            <?php else: ?>
                <a href="login.php" class="hover:text-gray-200">Iniciar sesión</a>
            <?php endif; ?>
        </nav>
    </div>
</header>