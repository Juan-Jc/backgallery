<!-- header.php -->
<header class="bg-zinc-900 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="text-3xl font-bold">
            <a href="../public/index.php">BackGallery</a>
        </div>

        <!-- Barra de navegación -->
        <nav class="space-x-6">
            <a href="../public/index.php" class="p-5 duration-400 rounded-lg hover:text-zinc-900 hover:bg-stone-50 hover:p-5 hover:rounded-lg">Inicio</a>
            <a href="../public/products.php" class="p-5 duration-400 rounded-lg hover:text-zinc-900 hover:bg-stone-50 hover:p-5 hover:rounded-lg">Productos</a>
            <a href="../public/oferta.php" class="p-5 duration-400 rounded-lg hover:text-zinc-900 hover:bg-stone-50 hover:p-5 hover:rounded-lg">Ofertas</a>
            <a href="../public/contacto.php" class="p-5 duration-400 rounded-lg hover:text-zinc-900 hover:bg-stone-50 hover:p-5 hover:rounded-lg">Contacto</a>

            <!-- Carrito de compras y login -->
            <a href="cart.php" class="p-5 duration-400 rounded-lg hover:text-zinc-900 hover:bg-stone-50 hover:p-5 hover:rounded-lg">Carrito</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="../public/logout.php" class="p-5 duration-400 rounded-lg hover:text-zinc-900 hover:bg-stone-50 hover:p-5 hover:rounded-lg">Cerrar sesión</a>
            <?php else: ?>
                <a href="../public/login.php" class="p-5 duration-400 rounded-lg hover:text-zinc-900 hover:bg-stone-50 hover:p-5 hover:rounded-lg">Iniciar sesión</a>
            <?php endif; ?>
        </nav>
    </div>
</header>