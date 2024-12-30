<?php
// Configuración inicial (opcional)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Definir la URL base (ajusta según tu configuración)
define('BASE_URL', '/');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Municipalidad de Quemchi</title>
    <link rel="stylesheet" href="assets/style.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo BASE_URL; ?>assets/favicon.ico">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Estilos personalizados -->
    <style>
    body {
        min-width: 100%;
        overflow-x: hidden;
        position: relative;
    }

    /* Asegurarse de que los contenedores ocupen todo el ancho disponible */
    .container {
        width: 100%;
        max-width: 100%;
        margin: 0;
        padding-left: 1rem;
        padding-right: 1rem;
    }

    @media (min-width: 640px) {
        .container {
            max-width: 640px;
            margin: 0 auto;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 768px;
        }
    }

    @media (min-width: 1024px) {
        .container {
            max-width: 1024px;
        }
    }

    @media (min-width: 1280px) {
        .container {
            max-width: 1280px;
        }
    }
    </style>
</head>

<body class="flex flex-col min-h-screen bg-gradient-to-br from-amber-50 to-rose-100">
    <!-- Header -->
    <?php include 'components/header.php'; ?>

    <!-- Trámites Destacados -->
    <?php include 'components/featured-services.php'; ?>

    <!-- Contenido principal -->
    <main class="flex-grow">
        <!-- Sección de Servicios -->
        <?php include 'components/services.php'; ?>

        <!-- Sección de Noticias -->
        <?php include 'components/news-carousel.php'; ?>

        <!-- Feed de Facebook -->
        <?php include 'components/facebook-feed.php'; ?>
    </main>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>







</body>

</html>