<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentación - Maqueta Quemchi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-gray-100 min-h-screen">

    <!-- Partículas de fondo -->
    <div class="particles absolute inset-0 pointer-events-none"></div>

    <div class="container mx-auto px-4 py-12 relative z-10">
        <!-- Encabezado -->
        <div class="text-center mb-16">
            <div class="inline-block p-2 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl mb-4 animate-pulse">
                <i class="fas fa-code text-3xl"></i>
            </div>
            <h1
                class="text-5xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-500">
                Documentación Técnica
            </h1>
            <p class="text-xl text-gray-400">Maqueta Informativa Municipalidad de Quemchi</p>
        </div>

        <!-- Grid de secciones -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Tecnologías -->
            <div
                class="bg-gray-800/50 backdrop-blur-xl p-6 rounded-2xl border border-gray-700/50 hover:border-blue-500/50 transition-all duration-300 group">
                <div class="flex items-center mb-4">
                    <div
                        class="p-3 bg-blue-500/20 rounded-xl mr-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-laptop-code text-blue-400"></i>
                    </div>
                    <h2 class="text-xl font-bold">Tecnologías Utilizadas</h2>
                </div>
                <ul class="space-y-3 text-gray-400">
                    <li class="flex items-center">
                        <i class="fab fa-html5 text-orange-500 mr-2"></i>
                        HTML5
                    </li>
                    <li class="flex items-center">
                        <i class="fab fa-css3-alt text-blue-500 mr-2"></i>
                        CSS3 / Tailwind CSS
                    </li>
                    <li class="flex items-center">
                        <i class="fab fa-php text-purple-500 mr-2"></i>
                        PHP
                    </li>
                    <li class="flex items-center">
                        <i class="fab fa-js text-yellow-500 mr-2"></i>
                        JavaScript
                    </li>
                </ul>
            </div>

            <!-- Estructura -->
            <div
                class="bg-gray-800/50 backdrop-blur-xl p-6 rounded-2xl border border-gray-700/50 hover:border-purple-500/50 transition-all duration-300 group">
                <div class="flex items-center mb-4">
                    <div
                        class="p-3 bg-purple-500/20 rounded-xl mr-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-sitemap text-purple-400"></i>
                    </div>
                    <h2 class="text-xl font-bold">Estructura del Proyecto</h2>
                </div>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-center">
                        <i class="fas fa-folder text-yellow-500 mr-2"></i>
                        /components
                    </li>
                    <li class="flex items-center ml-4">
                        <i class="fas fa-file-code text-blue-400 mr-2"></i>
                        header.php
                    </li>
                    <li class="flex items-center ml-4">
                        <i class="fas fa-file-code text-blue-400 mr-2"></i>
                        footer.php
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-folder text-yellow-500 mr-2"></i>
                        /assets
                    </li>
                </ul>
            </div>

            <!-- Características -->
            <div
                class="bg-gray-800/50 backdrop-blur-xl p-6 rounded-2xl border border-gray-700/50 hover:border-green-500/50 transition-all duration-300 group">
                <div class="flex items-center mb-4">
                    <div
                        class="p-3 bg-green-500/20 rounded-xl mr-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-star text-green-400"></i>
                    </div>
                    <h2 class="text-xl font-bold">Características</h2>
                </div>
                <ul class="space-y-3 text-gray-400">
                    <li class="flex items-center">
                        <i class="fas fa-mobile-alt text-green-500 mr-2"></i>
                        Diseño Responsivo
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-paint-brush text-pink-500 mr-2"></i>
                        UI/UX Moderna
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-tachometer-alt text-blue-500 mr-2"></i>
                        Optimización de Rendimiento
                    </li>
                </ul>
            </div>

            <!-- Componentes -->
            <div
                class="bg-gray-800/50 backdrop-blur-xl p-6 rounded-2xl border border-gray-700/50 hover:border-red-500/50 transition-all duration-300 group">
                <div class="flex items-center mb-4">
                    <div
                        class="p-3 bg-red-500/20 rounded-xl mr-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-puzzle-piece text-red-400"></i>
                    </div>
                    <h2 class="text-xl font-bold">Componentes Principales</h2>
                </div>
                <ul class="space-y-3 text-gray-400">
                    <li class="flex items-center">
                        <i class="fas fa-newspaper text-orange-500 mr-2"></i>
                        Carrusel de Noticias
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-cogs text-blue-500 mr-2"></i>
                        Servicios Destacados
                    </li>
                    <li class="flex items-center">
                        <i class="fab fa-facebook text-blue-500 mr-2"></i>
                        Feed de Facebook
                    </li>
                </ul>
            </div>

            <!-- Instalación -->
            <div
                class="bg-gray-800/50 backdrop-blur-xl p-6 rounded-2xl border border-gray-700/50 hover:border-yellow-500/50 transition-all duration-300 group">
                <div class="flex items-center mb-4">
                    <div
                        class="p-3 bg-yellow-500/20 rounded-xl mr-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-download text-yellow-400"></i>
                    </div>
                    <h2 class="text-xl font-bold">Instalación</h2>
                </div>
                <div class="bg-gray-900/50 rounded-lg p-4 font-mono text-sm">
                    <p class="text-green-400">$ git clone https://github.com/user/quemchi</p>
                    <p class="text-blue-400">$ cd quemchi</p>
                    <p class="text-purple-400">$ php -S localhost:8000</p>
                </div>
            </div>

            <!-- Contacto -->
            <div
                class="bg-gray-800/50 backdrop-blur-xl p-6 rounded-2xl border border-gray-700/50 hover:border-indigo-500/50 transition-all duration-300 group">
                <div class="flex items-center mb-4">
                    <div
                        class="p-3 bg-indigo-500/20 rounded-xl mr-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-envelope text-indigo-400"></i>
                    </div>
                    <h2 class="text-xl font-bold">Contacto</h2>
                </div>
                <div class="space-y-3 text-gray-400">
                    <p class="flex items-center">
                        <i class="fas fa-envelope text-indigo-500 mr-2"></i>
                        soporte@quemchi.cl
                    </p>
                    <p class="flex items-center">
                        <i class="fab fa-github text-gray-500 mr-2"></i>
                        github.com/quemchi
                    </p>
                </div>
            </div>
        </div>

        <!-- Botón de regreso -->
        <div class="text-center mt-16">
            <a href="index.php"
                class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl hover:from-blue-600 hover:to-purple-700 transition-all duration-300 transform hover:-translate-y-1">
                <i class="fas fa-arrow-left mr-2"></i>
                Volver al sitio
            </a>
        </div>
    </div>

    <!-- Estilos y animaciones -->
    <style>
    .particles {
        background-image: radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
        background-size: 50px 50px;
    }

    @keyframes float {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
    </style>

</body>

</html>