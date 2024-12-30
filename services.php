<!-- Sección de Servicios -->
<div class="bg-gradient-to-b from-gray-50 to-white py-20">
    <div class="container mx-auto px-4">
        <!-- Encabezado de la sección -->
        <div class="text-center mb-12">
            <span class="text-red-500 font-semibold text-sm uppercase tracking-wider mb-2 block">Nuestros
                Servicios</span>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                Servicios Municipales
                <span class="block text-red-500 mt-3 text-3xl md:text-4xl font-medium">¿Cómo podemos ayudarte?</span>
            </h2>

            <!-- Barra de búsqueda -->
            <div class="max-w-2xl mx-auto mb-8">
                <div class="relative">
                    <input type="text" id="searchServices"
                        class="w-full px-6 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent"
                        placeholder="Buscar servicios...">
                    <svg class="w-6 h-6 text-gray-400 absolute right-4 top-3" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <!-- Filtros -->

        </div>

        <!-- Grid de Servicios con páginas -->
        <div class="container mx-auto px-4">
            <!-- Página 1 -->
            <div class="services-page grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-page="1">
                <!-- Remate Público -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="tramites">
                    <div class="h-2 bg-gradient-to-r from-red-500 to-red-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-red-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-red-50 to-red-100 group-hover:from-red-100 group-hover:to-red-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-red-600 transition-colors duration-300">
                                    Remate Público
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-red-600 bg-red-100 rounded-full mt-2">
                                    Trámites
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-red-100 group-hover:bg-red-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Información sobre remates municipales
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fondos Concursables -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="social">
                    <div class="h-2 bg-gradient-to-r from-blue-500 to-blue-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-blue-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-blue-50 to-blue-100 group-hover:from-blue-100 group-hover:to-blue-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                                    Fondos Concursables
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-blue-600 bg-blue-100 rounded-full mt-2">
                                    Social
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-blue-100 group-hover:bg-blue-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Postulación a fondos municipales
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Becas Municipales -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="educacion">
                    <div class="h-2 bg-gradient-to-r from-green-500 to-green-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-green-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-green-50 to-green-100 group-hover:from-green-100 group-hover:to-green-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-green-600 transition-colors duration-300">
                                    Becas Municipales
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-green-600 bg-green-100 rounded-full mt-2">
                                    Educación
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-green-100 group-hover:bg-green-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Becas y apoyo educacional
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Patentes Comerciales -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="tramites">
                    <div class="h-2 bg-gradient-to-r from-purple-500 to-purple-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-purple-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-purple-50 to-purple-100 group-hover:from-purple-100 group-hover:to-purple-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-purple-600 transition-colors duration-300">
                                    Patentes Comerciales
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-purple-600 bg-purple-100 rounded-full mt-2">
                                    Trámites
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-purple-100 group-hover:bg-purple-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Pago de patentes comerciales
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Concejo Público -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="tramites">
                    <div class="h-2 bg-gradient-to-r from-yellow-500 to-yellow-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-yellow-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-yellow-50 to-yellow-100 group-hover:from-yellow-100 group-hover:to-yellow-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-yellow-600 transition-colors duration-300">
                                    Concejo Público
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-yellow-600 bg-yellow-100 rounded-full mt-2">
                                    Trámites
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-yellow-100 group-hover:bg-yellow-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Información del concejo municipal
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Permiso de Circulación -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="tramites">
                    <div class="h-2 bg-gradient-to-r from-indigo-500 to-indigo-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-indigo-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-indigo-50 to-indigo-100 group-hover:from-indigo-100 group-hover:to-indigo-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-indigo-600 transition-colors duration-300">
                                    Permiso de Circulación
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-indigo-600 bg-indigo-100 rounded-full mt-2">
                                    Trámites
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-indigo-100 group-hover:bg-indigo-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Obtención y renovación de permisos
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Página 2 -->
            <div class="services-page grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-page="2"
                style="display: none;">
                <!-- Registro Social de Hogares -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="social">
                    <div class="h-2 bg-gradient-to-r from-pink-500 to-pink-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-pink-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-pink-50 to-pink-100 group-hover:from-pink-100 group-hover:to-pink-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-pink-600 transition-colors duration-300">
                                    Registro Social de Hogares
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-pink-600 bg-pink-100 rounded-full mt-2">
                                    Social
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-pink-100 group-hover:bg-pink-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Registro y actualización de información social
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Intermediación Laboral -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="social">
                    <div class="h-2 bg-gradient-to-r from-blue-500 to-blue-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-blue-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-blue-50 to-blue-100 group-hover:from-blue-100 group-hover:to-blue-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                                    Intermediación Laboral
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-blue-600 bg-blue-100 rounded-full mt-2">
                                    Social
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-blue-100 group-hover:bg-blue-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Apoyo en búsqueda de empleo
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Ayuda Social -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="social">
                    <div class="h-2 bg-gradient-to-r from-purple-500 to-purple-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-purple-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-purple-50 to-purple-100 group-hover:from-purple-100 group-hover:to-purple-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-purple-600 transition-colors duration-300">
                                    Ayuda Social
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-purple-600 bg-purple-100 rounded-full mt-2">
                                    Social
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-purple-100 group-hover:bg-purple-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Programas de asistencia social
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Tenencia de Mascotas -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="tramites">
                    <div class="h-2 bg-gradient-to-r from-yellow-500 to-yellow-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-yellow-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-yellow-50 to-yellow-100 group-hover:from-yellow-100 group-hover:to-yellow-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-yellow-600 transition-colors duration-300">
                                    Tenencia de Mascotas
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-yellow-600 bg-yellow-100 rounded-full mt-2">
                                    Trámites
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-yellow-100 group-hover:bg-yellow-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Registro y control de mascotas
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Biblioteca -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="educacion">
                    <div class="h-2 bg-gradient-to-r from-green-500 to-green-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-green-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-green-50 to-green-100 group-hover:from-green-100 group-hover:to-green-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-green-600 transition-colors duration-300">
                                    Biblioteca
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-green-600 bg-green-100 rounded-full mt-2">
                                    Educación
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-green-100 group-hover:bg-green-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Servicios bibliotecarios municipales
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Turismo -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="social">
                    <div class="h-2 bg-gradient-to-r from-indigo-500 to-indigo-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-indigo-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-indigo-50 to-indigo-100 group-hover:from-indigo-100 group-hover:to-indigo-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-indigo-600 transition-colors duration-300">
                                    Turismo
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-indigo-600 bg-indigo-100 rounded-full mt-2">
                                    Social
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-indigo-100 group-hover:bg-indigo-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Información turística local
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Página 3 -->
            <div class="services-page grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-page="3"
                style="display: none;">
                <!-- Deportes -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="social">
                    <div class="h-2 bg-gradient-to-r from-blue-500 to-blue-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-blue-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-blue-50 to-blue-100 group-hover:from-blue-100 group-hover:to-blue-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                                    Deportes
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-blue-600 bg-blue-100 rounded-full mt-2">
                                    Social
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-blue-100 group-hover:bg-blue-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Actividades deportivas municipales
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Oficina de Vivienda -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="social">
                    <div class="h-2 bg-gradient-to-r from-green-500 to-green-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-green-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-green-50 to-green-100 group-hover:from-green-100 group-hover:to-green-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-green-600 transition-colors duration-300">
                                    Oficina de Vivienda
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-green-600 bg-green-100 rounded-full mt-2">
                                    Social
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-green-100 group-hover:bg-green-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Asesoría en temas habitacionales
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Ordenanzas Municipales -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="tramites">
                    <div class="h-2 bg-gradient-to-r from-purple-500 to-purple-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-purple-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-purple-50 to-purple-100 group-hover:from-purple-100 group-hover:to-purple-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-purple-600 transition-colors duration-300">
                                    Ordenanzas Municipales
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-purple-600 bg-purple-100 rounded-full mt-2">
                                    Trámites
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-purple-100 group-hover:bg-purple-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Normativas y regulaciones municipales
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Juzgado de Policía Local -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="tramites">
                    <div class="h-2 bg-gradient-to-r from-yellow-500 to-yellow-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-yellow-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-yellow-50 to-yellow-100 group-hover:from-yellow-100 group-hover:to-yellow-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-yellow-600 transition-colors duration-300">
                                    Juzgado de Policía Local
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-yellow-600 bg-yellow-100 rounded-full mt-2">
                                    Trámites
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-yellow-100 group-hover:bg-yellow-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Trámites judiciales locales
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Actas de Concejo -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="tramites">
                    <div class="h-2 bg-gradient-to-r from-red-500 to-red-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-red-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-red-50 to-red-100 group-hover:from-red-100 group-hover:to-red-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-red-600 transition-colors duration-300">
                                    Actas de Concejo
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-red-600 bg-red-100 rounded-full mt-2">
                                    Trámites
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-red-100 group-hover:bg-red-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Documentación de sesiones del concejo
                            </p>
                        </div>
                    </div>
                </div>

                <!-- DAEM -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="educacion">
                    <div class="h-2 bg-gradient-to-r from-indigo-500 to-indigo-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-indigo-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-indigo-50 to-indigo-100 group-hover:from-indigo-100 group-hover:to-indigo-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-indigo-600 transition-colors duration-300">
                                    DAEM
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-indigo-600 bg-indigo-100 rounded-full mt-2">
                                    Educación
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-indigo-100 group-hover:bg-indigo-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Gestión educativa municipal
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Medio Ambiente -->
                <div class="service-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 overflow-hidden border border-gray-100"
                    data-category="tramites">
                    <div class="h-2 bg-gradient-to-r from-green-500 to-green-600"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="relative">
                                <div
                                    class="absolute inset-0 rounded-full bg-green-100 transform group-hover:scale-110 transition-transform duration-300">
                                </div>
                                <div
                                    class="relative p-4 rounded-full bg-gradient-to-br from-green-50 to-green-100 group-hover:from-green-100 group-hover:to-green-200 transform group-hover:rotate-6 transition-all duration-300">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3
                                    class="text-xl font-bold text-gray-800 group-hover:text-green-600 transition-colors duration-300">
                                    Medio Ambiente
                                </h3>
                                <span
                                    class="inline-block px-3 py-1 text-xs font-medium text-green-600 bg-green-100 rounded-full mt-2">
                                    Trámites
                                </span>
                            </div>
                        </div>
                        <div class="relative pl-16">
                            <div
                                class="absolute left-6 top-0 h-full w-0.5 bg-green-100 group-hover:bg-green-200 transition-colors duration-300">
                            </div>
                            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">
                                Gestión ambiental municipal
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Paginación -->
            <div class="flex justify-center items-center space-x-4 mt-8">
                <!-- Botón Anterior -->
                <button id="prevPage"
                    class="px-4 py-2 bg-white border border-gray-200 text-gray-600 rounded-lg hover:bg-gray-50 hover:border-gray-300 transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Botones de Página -->
                <div class="flex space-x-3">
                    <button data-page="1" class="page-button relative w-10 h-10 flex items-center justify-center text-sm font-semibold rounded-xl transition-all duration-300 
                        bg-white border-2 border-transparent hover:border-red-200 hover:bg-red-50
                        active:bg-red-500 active:text-white active:border-red-500
                        focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                        1
                    </button>
                    <button data-page="2" class="page-button relative w-10 h-10 flex items-center justify-center text-sm font-semibold rounded-xl transition-all duration-300 
                        bg-white border-2 border-transparent hover:border-red-200 hover:bg-red-50
                        active:bg-red-500 active:text-white active:border-red-500
                        focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                        2
                    </button>
                    <button data-page="3" class="page-button relative w-10 h-10 flex items-center justify-center text-sm font-semibold rounded-xl transition-all duration-300 
                        bg-white border-2 border-transparent hover:border-red-200 hover:bg-red-50
                        active:bg-red-500 active:text-white active:border-red-500
                        focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                        3
                    </button>
                </div>

                <!-- Botón Siguiente -->
                <button id="nextButton"
                    class="px-4 py-2 bg-white border border-gray-200 text-gray-600 rounded-lg hover:bg-gray-50 hover:border-gray-300 transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Agregar al final del archivo -->
<style>
/* Estilos para las tarjetas de servicio */
.service-card {
    transition: all 0.3s ease-in-out;
}

.service-card:hover {
    transform: translateY(-5px) !important;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

/* Estilos para los filtros de categoría */
.category-filter {
    transition: all 0.3s ease-in-out;
    position: relative;
    overflow: hidden;
}

.category-filter::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #EF4444;
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.category-filter:hover::after,
.category-filter.active::after {
    transform: scaleX(1);
}

/* Animaciones para las páginas */
.services-page {
    transition: all 0.3s ease-in-out;
}

.services-page.active {
    opacity: 1;
    transform: translateX(0);
}

/* Estilos para los botones de paginación */
.page-button {
    transition: all 0.3s ease-in-out;
}

.page-button.active {
    background-color: #EF4444;
    color: white;
}

/* Estilos para los botones de página */
.page-button.active {
    background-color: #EF4444;
    color: white;
    border-color: #EF4444;
    transform: scale(1.05);
    box-shadow: 0 4px 6px -1px rgba(239, 68, 68, 0.1), 0 2px 4px -1px rgba(239, 68, 68, 0.06);
}

.page-button::after {
    content: '';
    position: absolute;
    inset: -2px;
    border-radius: inherit;
    background: linear-gradient(to right bottom, #EF4444, #F87171);
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: -1;
}

.page-button:hover::after {
    opacity: 0.1;
}

.page-button.active::after {
    opacity: 0.15;
}

/* Animación al hacer click */
.page-button:active {
    transform: scale(0.95);
}

/* Efecto de pulso para el botón activo */
@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.4);
    }

    70% {
        box-shadow: 0 0 0 10px rgba(239, 68, 68, 0);
    }

    100% {
        box-shadow: 0 0 0 0 rgba(239, 68, 68, 0);
    }
}

.page-button.active {
    animation: pulse 2s infinite;
}
</style>

<!-- Agregar antes del cierre del body -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Elementos DOM
    const pages = document.querySelectorAll('.services-page');
    const pageButtons = document.querySelectorAll('.page-button');
    const prevButton = document.getElementById('prevPage');
    const nextButton = document.getElementById('nextButton');
    let currentPage = 1;

    // Función para mostrar una página específica
    function showPage(pageNumber, direction = 'next') {
        pageNumber = parseInt(pageNumber);

        // Ocultar página actual
        pages.forEach(page => {
            if (page.classList.contains('active')) {
                page.style.opacity = '0';
                page.style.transform = direction === 'next' ? 'translateX(-30px)' : 'translateX(30px)';
                setTimeout(() => {
                    page.style.display = 'none';
                    page.classList.remove('active');
                }, 300);
            }
        });

        // Mostrar nueva página
        setTimeout(() => {
            const targetPage = document.querySelector(`.services-page[data-page="${pageNumber}"]`);
            if (targetPage) {
                targetPage.style.display = 'grid';
                targetPage.style.transform = direction === 'next' ? 'translateX(30px)' :
                    'translateX(-30px)';
                targetPage.style.opacity = '0';
                targetPage.offsetHeight; // Forzar reflow
                targetPage.classList.add('active');
                targetPage.style.opacity = '1';
                targetPage.style.transform = 'translateX(0)';
            }
        }, 300);

        // Actualizar estado de los botones
        updateButtons(pageNumber);

        // Actualizar página actual
        currentPage = pageNumber;
    }

    // Función para actualizar el estado de los botones
    function updateButtons(pageNumber) {
        // Actualizar botones de número de página
        pageButtons.forEach(button => {
            const buttonPage = parseInt(button.dataset.page);
            if (buttonPage === pageNumber) {
                button.classList.add('active');
                button.classList.remove('bg-white', 'text-gray-600');
                button.classList.add('bg-red-500', 'text-white');
            } else {
                button.classList.remove('active');
                button.classList.remove('bg-red-500', 'text-white');
                button.classList.add('bg-white', 'text-gray-600');
            }
        });

        // Actualizar estado de botones anterior/siguiente
        prevButton.disabled = pageNumber === 1;
        nextButton.disabled = pageNumber === 3;

        if (pageNumber === 1) {
            prevButton.classList.add('opacity-50', 'cursor-not-allowed');
        } else {
            prevButton.classList.remove('opacity-50', 'cursor-not-allowed');
        }

        if (pageNumber === 3) {
            nextButton.classList.add('opacity-50', 'cursor-not-allowed');
        } else {
            nextButton.classList.remove('opacity-50', 'cursor-not-allowed');
        }
    }

    // Event listeners para los botones de número de página
    pageButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const pageNum = parseInt(button.dataset.page);
            if (pageNum !== currentPage) {
                const direction = pageNum > currentPage ? 'next' : 'prev';
                showPage(pageNum, direction);
            }
        });
    });

    // Event listener para el botón anterior
    prevButton.addEventListener('click', () => {
        if (currentPage > 1) {
            showPage(currentPage - 1, 'prev');
        }
    });

    // Event listener para el botón siguiente
    nextButton.addEventListener('click', () => {
        if (currentPage < 3) {
            showPage(currentPage + 1, 'next');
        }
    });

    // Inicializar primera página
    showPage(1);
});
</script>