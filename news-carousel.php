<!-- Sección de Noticias -->
<div class="bg-white py-16">
    <div class="container mx-auto px-4">
        <!-- Encabezado de la sección -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                Últimas Noticias
                <span class="block text-red-500 mt-2">Mantente informado</span>
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Conoce las últimas actualizaciones y noticias de la Municipalidad de Quemchi
            </p>
        </div>

        <!-- Contenedor del Carrusel -->
        <div class="relative overflow-hidden" id="carousel-container">
            <!-- Carrusel -->
            <div class="flex transition-all duration-700 ease-out" id="carousel">
                <?php
                // Array de noticias ficticias
                $noticias = [
                    ["fecha" => "15 Marzo 2024", "titulo" => "Inauguración del Nuevo Centro Cultural"],
                    ["fecha" => "14 Marzo 2024", "titulo" => "Programa de Reciclaje Municipal"],
                    ["fecha" => "13 Marzo 2024", "titulo" => "Festival Gastronómico Local"],
                    ["fecha" => "12 Marzo 2024", "titulo" => "Mejoras en el Sistema de Transporte"],
                    ["fecha" => "11 Marzo 2024", "titulo" => "Nueva Biblioteca Municipal"],
                    ["fecha" => "10 Marzo 2024", "titulo" => "Torneo Deportivo Intercomunal"],
                    ["fecha" => "09 Marzo 2024", "titulo" => "Programa de Apoyo al Adulto Mayor"],
                    ["fecha" => "08 Marzo 2024", "titulo" => "Celebración del Día de la Mujer"],
                    ["fecha" => "07 Marzo 2024", "titulo" => "Nuevo Parque Recreativo"],
                    ["fecha" => "06 Marzo 2024", "titulo" => "Taller de Emprendimiento Local"],
                    ["fecha" => "05 Marzo 2024", "titulo" => "Feria Artesanal de Quemchi"],
                    ["fecha" => "04 Marzo 2024", "titulo" => "Programa de Salud Preventiva"],
                    ["fecha" => "03 Marzo 2024", "titulo" => "Festival de Teatro Municipal"],
                    ["fecha" => "02 Marzo 2024", "titulo" => "Mejoras en Infraestructura Vial"],
                    ["fecha" => "01 Marzo 2024", "titulo" => "Campaña de Limpieza Comunitaria"],
                    ["fecha" => "29 Febrero 2024", "titulo" => "Nuevo Centro Deportivo"],
                    ["fecha" => "28 Febrero 2024", "titulo" => "Programa de Educación Ambiental"],
                    ["fecha" => "27 Febrero 2024", "titulo" => "Festival de Música Local"],
                    ["fecha" => "26 Febrero 2024", "titulo" => "Inauguración Plaza Principal"],
                    ["fecha" => "25 Febrero 2024", "titulo" => "Programa de Desarrollo Juvenil"]
                ];

                foreach ($noticias as $index => $noticia): ?>
                <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4 transition-all duration-500">
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden relative transform transition-all duration-500 hover:scale-105 hover:shadow-xl">
                        <!-- Número de noticia con animación -->
                        <div
                            class="absolute top-4 right-4 bg-red-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold transform rotate-0 hover:rotate-360 transition-all duration-500 hover:scale-110 z-10">
                            <?php echo $index + 1; ?>
                        </div>
                        <!-- Overlay con efecto hover -->
                        <div class="relative group">
                            <img src="https://picsum.photos/800/600?random=<?php echo $index; ?>"
                                alt="Noticia <?php echo $index + 1; ?>"
                                class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </div>
                        <div class="p-6 relative">
                            <div
                                class="text-red-500 text-sm font-semibold mb-2 transform transition-all duration-300 hover:translate-x-2">
                                <?php echo $noticia['fecha']; ?>
                            </div>
                            <h3
                                class="text-xl font-bold text-gray-800 mb-2 transition-colors duration-300 hover:text-red-500">
                                <?php echo $noticia['titulo']; ?>
                            </h3>
                            <p class="text-gray-600 mb-4">
                                Descubre más sobre esta importante iniciativa para nuestra comunidad y mantente
                                informado de los últimos acontecimientos en Quemchi...
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-red-500 font-medium hover:text-red-600 transition-all duration-300 group">
                                Leer más
                                <svg class="w-4 h-4 ml-2 transform transition-transform duration-300 group-hover:translate-x-2"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Botones de navegación mejorados -->
            <button
                class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/90 backdrop-blur-sm p-3 rounded-full shadow-lg text-red-500 hover:text-red-600 hover:scale-110 focus:outline-none transition-all duration-300 hover:bg-white"
                id="prevBtn">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button
                class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/90 backdrop-blur-sm p-3 rounded-full shadow-lg text-red-500 hover:text-red-600 hover:scale-110 focus:outline-none transition-all duration-300 hover:bg-white"
                id="nextBtn">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Indicadores mejorados -->
            <div class="flex justify-center mt-8 space-x-3 flex-wrap gap-y-2" id="carousel-indicators">
                <?php
                $totalNoticias = count($noticias);
                $noticiasPorSlide = 3;
                $totalSlides = ceil($totalNoticias / $noticiasPorSlide);

                for ($i = 0; $i < $totalSlides; $i++):
                ?>
                <button
                    class="w-4 h-4 rounded-full transition-all duration-300 <?php echo $i === 0 ? 'bg-red-500 scale-110' : 'bg-gray-300 hover:bg-red-300'; ?>"></button>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Estilos adicionales -->
        <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hover\:rotate-360:hover {
            transform: rotate(360deg);
        }

        #carousel>div {
            animation: fadeIn 0.5s ease-out;
        }
        </style>

        <!-- JavaScript mejorado -->
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('carousel');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const indicators = document.querySelectorAll('#carousel-indicators button');
            const slides = document.querySelectorAll('#carousel > div');

            let currentIndex = 0;
            const slideWidth = carousel.clientWidth;
            const totalNoticias = <?php echo count($noticias); ?>;
            const noticiasPorSlide = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
            const totalSlides = Math.ceil(totalNoticias / noticiasPorSlide);
            let isAnimating = false;

            function updateIndicators() {
                indicators.forEach((indicator, index) => {
                    if (index === currentIndex) {
                        indicator.classList.add('bg-red-500', 'scale-110');
                        indicator.classList.remove('bg-gray-300');
                    } else {
                        indicator.classList.remove('bg-red-500', 'scale-110');
                        indicator.classList.add('bg-gray-300');
                    }
                });
            }

            function moveCarousel(direction) {
                if (isAnimating) return;
                isAnimating = true;

                // Añadir efecto de desvanecimiento
                carousel.style.opacity = '0.5';

                setTimeout(() => {
                    if (direction === 'next') {
                        currentIndex = (currentIndex + 1) % totalSlides;
                    } else {
                        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                    }

                    carousel.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
                    updateIndicators();

                    // Restaurar opacidad
                    carousel.style.opacity = '1';
                }, 200);

                setTimeout(() => {
                    isAnimating = false;
                }, 700);
            }

            // Event listeners
            nextBtn.addEventListener('click', () => moveCarousel('next'));
            prevBtn.addEventListener('click', () => moveCarousel('prev'));

            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    if (isAnimating || currentIndex === index) return;
                    isAnimating = true;
                    currentIndex = index;
                    carousel.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
                    updateIndicators();
                    setTimeout(() => {
                        isAnimating = false;
                    }, 700);
                });
            });

            // Auto-play con pausa al hover
            let autoplayInterval;

            function startAutoplay() {
                autoplayInterval = setInterval(() => moveCarousel('next'), 5000);
            }

            carousel.addEventListener('mouseenter', () => {
                clearInterval(autoplayInterval);
            });

            carousel.addEventListener('mouseleave', () => {
                startAutoplay();
            });

            startAutoplay();
        });
        </script>
    </div>
</div>