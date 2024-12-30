<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Política de Privacidad - Maqueta Informativa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-gray-100">
    <div class="max-w-5xl mx-auto p-8">
        <h1 class="text-4xl font-bold text-center mb-12 text-gray-900 border-b pb-4">
            <i class="fas fa-shield-alt text-indigo-600 mr-2"></i>
            Política de Privacidad
        </h1>

        <div
            class="bg-white p-8 rounded-xl shadow-md mb-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
            <h2 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                <i class="fas fa-info-circle text-indigo-500 mr-3"></i>
                Acerca de esta maqueta
            </h2>
            <p class="mb-4 text-gray-700 leading-relaxed text-lg">
                Esta página es parte de una maqueta de diseño propuesta y tiene fines
                exclusivamente demostrativos. No se recolecta ningún tipo de
                información personal, cookies ni datos de los visitantes.
            </p>
        </div>

        <div
            class="bg-white p-8 rounded-xl shadow-md mb-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
            <h2 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                <i class="fas fa-bullseye text-indigo-500 mr-3"></i>
                Propósito del sitio
            </h2>
            <p class="mb-6 text-gray-700 leading-relaxed text-lg">
                Este sitio web es una maqueta que muestra una propuesta de diseño. Su
                único propósito es:
            </p>
            <ul class="list-none pl-6 text-gray-700 space-y-3">
                <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-3"></i>
                    Mostrar información pública de manera organizada
                </li>
                <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-3"></i>
                    Presentar una interfaz visual moderna y accesible
                </li>
                <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-3"></i>
                    Demostrar la navegación entre diferentes secciones
                </li>
            </ul>
        </div>

        <div
            class="bg-white p-8 rounded-xl shadow-md mb-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
            <h2 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                <i class="fas fa-exclamation-circle text-indigo-500 mr-3"></i>
                Información importante
            </h2>
            <p class="mb-6 text-gray-700">Esta maqueta:</p>
            <ul class="list-none pl-6 text-gray-700 space-y-3">
                <li class="flex items-center">
                    <i class="fas fa-times-circle text-red-500 mr-3"></i>
                    No recolecta ningún tipo de información personal
                </li>
                <li class="flex items-center">
                    <i class="fas fa-times-circle text-red-500 mr-3"></i>
                    No utiliza cookies
                </li>
                <li class="flex items-center">
                    <i class="fas fa-times-circle text-red-500 mr-3"></i>
                    No almacena datos de usuarios
                </li>
                <li class="flex items-center">
                    <i class="fas fa-times-circle text-red-500 mr-3"></i>
                    No realiza seguimiento de ningún tipo
                </li>
            </ul>
        </div>

        <div class="text-center mt-12">
            <a href="../index.php" class="inline-flex items-center bg-indigo-600 text-white px-8 py-4 rounded-xl font-semibold 
                hover:bg-indigo-700 transition-all transform hover:-translate-y-1 hover:shadow-xl">
                <i class="fas fa-arrow-left mr-2"></i>
                Volver a la página principal
            </a>
        </div>

        <footer class="text-center mt-12 text-gray-600 text-base border-t pt-8">
            <p class="mb-2">
                <i class="fas fa-code mr-2 text-indigo-500"></i>
                Esta es una maqueta de diseño con fines demostrativos.
            </p>
            <p>
                <i class="fas fa-calendar-alt mr-2"></i>
                Última actualización: <?php echo date('d/m/Y'); ?>
            </p>
        </footer>
    </div>
</body>

</html>