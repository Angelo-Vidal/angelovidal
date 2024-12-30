<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Municipalidad de Quemchi</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <!-- Barra superior -->
        <div class="bg-red-600">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center h-10">
                    <!-- Horario de atención (izquierda) -->


                    <!-- Enlaces importantes (derecha) -->
                    <div class="flex items-center space-x-6">
                        <!-- Elección organizaciones comunitarias -->
                        <a href="#" class="flex items-center text-white text-sm hover:text-gray-200">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="uppercase text-xs font-medium">Elección organizaciones comunitarias</span>
                        </a>

                        <!-- Transparencia activa -->
                        <a href="#" class="flex items-center text-white text-sm hover:text-gray-200">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span class="uppercase text-xs font-medium">Transparencia activa</span>
                        </a>

                        <!-- Solicitar información ley de transparencia -->
                        <a href="#" class="flex items-center text-white text-sm hover:text-gray-200">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            </svg>
                            <span class="uppercase text-xs font-medium">Solicitar información ley de
                                transparencia</span>
                        </a>

                        <!-- Solicitar información ley de lobby -->
                        <a href="#" class="flex items-center text-white text-sm hover:text-gray-200">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            <span class="uppercase text-xs font-medium">Solicitar información ley de lobby</span>
                        </a>

                        <!-- Correo electrónico -->
                        <a href="#" class="flex items-center text-white text-sm hover:text-gray-200">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="upperc ase text-xs font-medium">Correo electrónico</span>
                        </a>


                    </div </div>
                </div>
            </div>
        </div>

        <!-- Barra de navegación principal -->
        <nav class="bg-white shadow-lg">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center h-20">
                    <!-- Logo -->
                    <a href="/" class="flex items-center space-x-3">
                        <img src="assets/logo.png" alt="Logo Municipalidad de Quemchi" class="h-16">
                        <div>
                            <h1 class="text-xl font-bold text-gray-800">Municipalidad de</h1>
                            <h2 class="text-2xl font-bold text-red-500">Quemchi</h2>
                        </div>
                    </a>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div id="hero-quemchi" class="relative bg-gray-900">
            <!-- Botón para colapsar/expandir -->
            <button id="toggleHero" class="absolute top-4 right-4 bg-white/80 backdrop-blur-sm p-2.5 rounded-full shadow-lg 
                           hover:bg-white/90 transition-all duration-300 z-10">
                <svg id="collapseIcon" class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <div id="heroContent" class="relative z-10 px-6 py-12 transition-all duration-500">
                <div class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl max-w-xl ml-12">
                    <div class="expanded-content">
                        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl mb-6">
                            Bienvenidos a Quemchi
                        </h1>
                        <p class="text-xl text-gray-800 mb-8">
                            Portal oficial de la Ilustre Municipalidad de Quemchi, donde podrás
                            encontrar información sobre trámites, servicios y noticias de nuestra
                            comuna.
                        </p>
                        <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base 
                                  font-medium rounded-full text-white bg-red-600 hover:bg-red-700 
                                  transition-colors duration-300">
                            Conoce más sobre nuestra comuna
                        </a>
                    </div>
                    <div class="collapsed-content hidden">
                        <h2 class="text-xl font-bold text-gray-900">Bienvenidos</h2>
                    </div>
                </div>
            </div>
            <div class="absolute inset-0 z-0">
                <img src="assets/quemchi.jpg" alt="Fondo Quemchi" class="w-full h-full object-cover"
                    id="hero-background">
                <div class="absolute inset-0 bg-black/20"></div>
            </div>
        </div>
    </header>

    <!-- Agregar justo después de la barra superior roja -->
    <div class="bg-yellow-50 border-b border-yellow-200" id="avisoEmergencia">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-3">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-yellow-600 animate-pulse mr-2" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    <span class="text-yellow-800 font-medium">
                        Información importante: <span class="text-yellow-600">Corte programado de agua potable en sector
                            centro</span>
                    </span>
                </div>
                <button onclick="this.parentElement.parentElement.remove()"
                    class="text-yellow-600 hover:text-yellow-800">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menú hamburguesa fijo -->
    <div class="fixed top-6 left-6 z-50">
        <div class="relative">
            <!-- Botón del menú -->
            <button id="menuButton" class="bg-white p-3 rounded-lg shadow-lg hover:bg-gray-100 focus:outline-none">
                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Menú desplegable principal -->
            <div id="menuDropdown"
                class="hidden absolute left-0 mt-2 w-64 bg-white rounded-lg shadow-xl border border-gray-100">
                <!-- Barra de búsqueda -->
                <div class="p-4 border-b border-gray-100">
                    <div class="relative">
                        <input type="text" placeholder="Buscar..."
                            class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:border-red-500">
                        <div class="absolute left-3 top-2.5">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Inicio -->
                <div class="relative group">
                    <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:text-red-500 hover:bg-red-50">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Inicio
                    </a>
                </div>

                <!-- Comuna -->
                <div class="relative group">
                    <a href="#"
                        class="flex items-center justify-between px-4 py-3 text-gray-600 hover:text-red-500 hover:bg-red-50">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Comuna
                        </div>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <div
                        class="absolute left-full top-0 hidden group-hover:block w-56 bg-white shadow-xl rounded-lg py-2 ml-1 z-50 border border-gray-100">
                        <div class="py-1 px-2 text-xs font-semibold text-gray-400 border-b border-gray-100">
                            INFORMACIÓN</div>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            Reseña
                        </a>
                    </div>
                </div>

                <!-- Municipalidad -->
                <div class="relative group">
                    <a href="#"
                        class="flex items-center justify-between px-4 py-3 text-gray-600 hover:text-red-500 hover:bg-red-50">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            Municipalidad
                        </div>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <div
                        class="absolute left-full top-0 hidden group-hover:block w-56 bg-white shadow-xl rounded-lg py-2 ml-1 z-50 border border-gray-100">
                        <div class="py-1 px-2 text-xs font-semibold text-gray-400 border-b border-gray-100">
                            AUTORIDADES</div>
                        <div class="relative group/alcalde">
                            <a href="#"
                                class="flex items-center justify-between px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    Alcalde
                                </div>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <div
                                class="absolute left-full top-0 hidden group-hover/alcalde:block w-48 bg-white shadow-xl rounded-lg py-2 ml-1 border border-gray-100">
                                <a href="#"
                                    class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                    </svg>
                                    alcaldia
                                </a>
                                <a href="#"
                                    class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    asesoria juridica
                                </a>
                            </div>
                        </div>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Administrador Municipal
                        </a>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Concejo Municipal
                        </a>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                            </svg>
                            Juzgado de policía local
                        </a>
                    </div>
                </div>

                <!-- Menú Direcciones (desplegable hacia la derecha) -->
                <div class="relative group">
                    <a href="#"
                        class="flex items-center justify-between px-4 py-3 text-gray-600 hover:text-red-500 hover:bg-red-50">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            Direcciones
                        </div>
                        <!-- Flecha hacia la derecha -->
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <!-- Menú desplegable hacia la derecha -->
                    <div
                        class="absolute left-full top-0 hidden group-hover:block w-72 bg-white shadow-xl rounded-lg py-2 ml-1 z-50 border border-gray-100">
                        <div class="py-1 px-2 text-xs font-semibold text-gray-400 border-b border-gray-100">
                            DIRECCIONES MUNICIPALES
                        </div>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Dirección secretaría municipal
                        </a>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Dirección administración y finanzas
                        </a>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Dirección desarrollo comunitario
                        </a>
                        <div class="relative group/ddc">
                            <a href="#"
                                class="flex items-center justify-between px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    Dirección desarrollo comunitario
                                </div>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                            <div
                                class="absolute left-full top-0 hidden group-hover/ddc:block w-48 bg-white shadow-xl rounded-lg py-2 ml-1 border border-gray-100">
                                <a href="#"
                                    class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7zM9 11h6m-3-3v6" />
                                    </svg>
                                    Area social
                                </a>
                                <a href="#"
                                    class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Cultura y turismo
                                </a>
                            </div>
                        </div>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                            </svg>
                            Dirección secretaría de planificación
                        </a>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            Dirección de obras
                        </a>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                            Dirección de control
                        </a>
                        <div class="py-1 px-2 text-xs font-semibold text-gray-400 border-b border-gray-100 mt-2">
                            DEPARTAMENTOS</div>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            Departamento de salud
                        </a>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            Departamento de educación
                        </a>
                    </div>
                </div>

                <!-- Otros Antecedentes -->
                <div class="relative group">
                    <a href="#"
                        class="flex items-center text-gray-600 hover:text-red-500 px-3 py-2 font-medium group-hover:text-red-500 transition duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Otros Antecedentes
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div
                        class="absolute left-0 hidden group-hover:block w-56 bg-white shadow-xl rounded-lg py-2 mt-1 z-50 border border-gray-100">
                        <div class="py-1 px-2 text-xs font-semibold text-gray-400 border-b border-gray-100">
                            DOCUMENTACIÓN</div>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            Cuenta pública
                        </a>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Decretos alcaldicios
                        </a>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Estados financieros
                        </a>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                            Dirección desarrollo comunitario
                        </a>

                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                            </svg>
                            Transparencia
                        </a>
                        <a href="#"
                            class="flex items-center px-4 py-2 text-gray-600 hover:text-red-500 hover:bg-red-50 transition duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            Documentos varios
                        </a>
                    </div>
                </div>



                <!-- Agregar más servicios según necesites -->
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Eliminar todo desde aquí hasta el script -->
    <script>
    // Toggle del menú
    const menuButton = document.getElementById('menuButton');
    const menuDropdown = document.getElementById('menuDropdown');

    menuButton.addEventListener('click', () => {
        menuDropdown.classList.toggle('hidden');
    });

    // Cerrar el menú cuando se hace clic fuera de él
    document.addEventListener('click', (event) => {
        if (!menuButton.contains(event.target) && !menuDropdown.contains(event.target)) {
            menuDropdown.classList.add('hidden');
        }
    });

    // Prevenir que el clic en el campo de búsqueda cierre el menú
    document.querySelector('input[type="text"]').addEventListener('click', (event) => {
        event.stopPropagation();
    });

    const toggleHero = document.getElementById('toggleHero');
    const heroContent = document.getElementById('heroContent');
    const collapseIcon = document.getElementById('collapseIcon');
    const heroQuemchi = document.getElementById('hero-quemchi');
    const expandedContent = document.querySelector('.expanded-content');
    const collapsedContent = document.querySelector('.collapsed-content');

    let isCollapsed = false;

    toggleHero.addEventListener('click', () => {
        isCollapsed = !isCollapsed;

        if (isCollapsed) {
            // Colapsar
            heroQuemchi.style.maxHeight = '120px';
            heroContent.style.transform = 'scale(0.8) translateX(-10%)';
            collapseIcon.style.transform = 'rotate(180deg)';
            heroContent.querySelector('.bg-white\\/80').style.maxWidth = '200px';
            expandedContent.classList.add('hidden');
            collapsedContent.classList.remove('hidden');
        } else {
            // Expandir
            heroQuemchi.style.maxHeight = '600px';
            heroContent.style.transform = 'scale(1) translateX(0)';
            collapseIcon.style.transform = 'rotate(0)';
            heroContent.querySelector('.bg-white\\/80').style.maxWidth = '36rem';
            expandedContent.classList.remove('hidden');
            collapsedContent.classList.add('hidden');
        }
    });
    </script>

    <style>
    #hero-quemchi {
        position: relative;
        overflow: hidden;
        transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        max-height: 600px;
    }

    #heroContent {
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    #heroContent .bg-white\/80 {
        transition: max-width 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    #collapseIcon {
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .expanded-content,
    .collapsed-content {
        transition: opacity 0.3s ease;
    }
    </style>
</body>

</html>

</html>