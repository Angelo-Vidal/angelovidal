<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Términos y Condiciones - Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="../index.php">
                <i class="fas fa-building me-2"></i>
                Portal Demo
            </a>
            <div class="d-flex">
                <a href="../index.php" class="btn btn-outline-light">
                    <i class="fas fa-home me-2"></i>Inicio
                </a>
            </div>
        </div>
    </nav>

    <main>
        <div class="header-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Términos y Condiciones</li>
                            </ol>
                        </nav>
                        <h1>Términos y Condiciones</h1>
                        <p class="lead">Ejemplo de maquetación para términos legales</p>
                    </div>
                    <div class="col-md-4 text-end">
                        <div class="version-badge">
                            <span>Última actualización</span>
                            <h3>2024</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <!-- Contenido principal a ancho completo -->
            <div class="content-card animate-card">
                <div id="seccion1" class="mb-5 section-card">
                    <h2><i class="fas fa-book-open text-primary me-2"></i>1. Introducción</h2>
                    <div class="example-text">
                        <div class="info-box">
                            <i class="fas fa-info-circle"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt
                                ut labore.</p>
                        </div>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo.</p>
                    </div>
                </div>

                <div id="seccion2" class="mb-5 section-card">
                    <h2><i class="fas fa-cog text-primary me-2"></i>2. Uso del Servicio</h2>
                    <div class="example-text">
                        <div class="feature-list">
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Ejemplo de término 1</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Ejemplo de término 2</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Ejemplo de término 3</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="seccion3" class="mb-5 section-card">
                    <h2><i class="fas fa-shield-alt text-primary me-2"></i>3. Privacidad</h2>
                    <div class="example-text">
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.
                        </p>
                    </div>
                </div>

                <div id="seccion4" class="mb-5 section-card">
                    <h2><i class="fas fa-file-alt text-primary me-2"></i>4. Contenido</h2>
                    <div class="example-text">
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Botón de regresar elegante -->
    <div class="return-button-container">
        <a href="../index.php" class="return-button">
            <span class="return-button-icon">
                <i class="fas fa-chevron-left"></i>
            </span>
            <span class="return-button-text">
                <span class="return-button-label">Regresar</span>
                <span class="return-button-description">Volver al inicio</span>
            </span>
        </a>
    </div>

    <button id="scrollToTop" class="scroll-top-btn">
        <i class="fas fa-arrow-up"></i>
    </button>

    <style>
    body {
        background-color: #f8f9fa;
        font-family: 'Inter', 'Segoe UI', sans-serif;
    }

    .navbar {
        background-color: #2c3e50;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .header-section {
        background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
        color: white;
        padding: 4rem 0;
        position: relative;
        overflow: hidden;
    }

    .header-section::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 40%;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.1));
    }

    .breadcrumb {
        background: transparent;
        margin-bottom: 1rem;
    }

    .breadcrumb-item a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
    }

    .breadcrumb-item.active {
        color: white;
    }

    .version-badge {
        background: rgba(255, 255, 255, 0.1);
        padding: 1rem;
        border-radius: 10px;
        backdrop-filter: blur(5px);
    }

    .version-badge span {
        font-size: 0.9rem;
        opacity: 0.8;
    }

    .version-badge h3 {
        margin: 0;
        font-size: 2rem;
        font-weight: bold;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .feature-box {
        background: white;
        padding: 2rem;
        border-radius: 15px;
        text-align: center;
        transition: transform 0.3s ease;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .feature-box:hover {
        transform: translateY(-5px);
    }

    .feature-icon {
        width: 70px;
        height: 70px;
        margin: 0 auto 1.5rem;
        background: #f8f9fa;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: #3498db;
    }

    .content-card {
        background: white;
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 1rem;
    }

    .design-elements {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
        gap: 1rem;
        margin-top: 1.5rem;
    }

    .element-item {
        text-align: center;
    }

    .color-sample {
        width: 60px;
        height: 60px;
        border-radius: 10px;
        margin: 0 auto 0.5rem;
    }

    .color-sample.primary {
        background: #3498db;
    }

    .color-sample.secondary {
        background: #2c3e50;
    }

    .typography-sample {
        font-size: 2rem;
        font-weight: bold;
        color: #2c3e50;
    }

    .tech-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }

    .tech-item {
        text-align: center;
        font-size: 2.5rem;
        color: #3498db;
    }

    .tech-item span {
        display: block;
        font-size: 1rem;
        margin-top: 0.5rem;
        color: #2c3e50;
    }

    .return-button {
        padding: 1rem 2.5rem;
        font-size: 1.1rem;
    }

    .scroll-top-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #3498db;
        color: white;
        border: none;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        display: none;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .scroll-top-btn:hover {
        background: #2980b9;
        transform: translateY(-3px);
    }

    @media (max-width: 768px) {
        .header-section {
            padding: 3rem 0;
        }

        .version-badge {
            margin-top: 2rem;
            text-align: center;
        }

        .features-grid {
            grid-template-columns: 1fr;
        }
    }

    .example-text {
        color: #6c757d;
        line-height: 1.6;
    }

    .nav-link {
        color: #2c3e50;
        padding: 0.5rem 0;
        transition: all 0.3s ease;
    }

    .nav-link:hover {
        color: #3498db;
        transform: translateX(5px);
    }

    .content-card {
        background: white;
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 1rem;
    }

    h2 {
        color: #2c3e50;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid #f8f9fa;
        position: relative;
    }

    .example-text ul {
        padding-left: 1.5rem;
    }

    .example-text li {
        margin-bottom: 0.5rem;
    }

    @media (max-width: 768px) {
        .sticky-top {
            position: relative !important;
            top: 0 !important;
            margin-bottom: 2rem;
        }
    }

    /* Animaciones y efectos visuales */
    .animate-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .animate-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .section-card {
        border-radius: 10px;
        padding: 20px;
        background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
        transition: all 0.3s ease;
        margin-bottom: 2rem;
    }

    .section-card:hover {
        background: linear-gradient(145deg, #f8f9fa 0%, #ffffff 100%);
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    /* Menú lateral mejorado */
    .nav-link {
        display: flex;
        align-items: center;
        padding: 12px 15px;
        margin: 5px 0;
        border-radius: 8px;
        transition: all 0.3s ease;
        background: transparent;
    }

    .nav-link:hover {
        background: rgba(52, 152, 219, 0.1);
        color: #3498db;
        transform: translateX(8px);
    }

    .nav-link i {
        margin-right: 10px;
        transition: transform 0.3s ease;
    }

    .nav-link:hover i {
        transform: rotate(360deg);
    }

    /* Cajas de información */
    .info-box {
        background: rgba(52, 152, 219, 0.1);
        border-left: 4px solid #3498db;
        padding: 15px;
        border-radius: 8px;
        margin: 15px 0;
        display: flex;
        align-items: start;
        gap: 15px;
    }

    .info-box i {
        color: #3498db;
        font-size: 1.2rem;
        margin-top: 3px;
    }

    /* Lista de características */
    .feature-list {
        display: grid;
        gap: 15px;
        margin: 20px 0;
    }

    .feature-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 15px;
        border-radius: 8px;
        background: rgba(52, 152, 219, 0.05);
        transition: all 0.3s ease;
    }

    .feature-item:hover {
        background: rgba(52, 152, 219, 0.1);
        transform: translateX(5px);
    }

    .feature-item i {
        color: #2ecc71;
        font-size: 1.1rem;
    }

    /* Gradientes y colores */
    .header-section {
        background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
        animation: gradientFlow 10s ease infinite;
    }

    @keyframes gradientFlow {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    /* Efectos hover para títulos */
    h2 {
        position: relative;
        overflow: hidden;
    }

    h2::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 50px;
        height: 2px;
        background: #3498db;
        transition: width 0.3s ease;
    }

    h2:hover::after {
        width: 100%;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .feature-list {
            grid-template-columns: 1fr;
        }

        .info-box {
            flex-direction: column;
        }

        .section-card {
            padding: 15px;
        }
    }

    /* Estilos actualizados para el menú lateral */
    .sidebar-nav {
        position: sticky;
        top: 20px;
        max-height: calc(100vh - 40px);
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: #3498db #f8f9fa;
    }

    .sidebar-nav::-webkit-scrollbar {
        width: 6px;
    }

    .sidebar-nav::-webkit-scrollbar-track {
        background: #f8f9fa;
        border-radius: 10px;
    }

    .sidebar-nav::-webkit-scrollbar-thumb {
        background-color: #3498db;
        border-radius: 10px;
    }

    .sidebar-title {
        color: #2c3e50;
        font-weight: 600;
        padding-bottom: 1rem;
        border-bottom: 2px solid #f8f9fa;
        margin-bottom: 1rem;
    }

    .sidebar-menu {
        padding: 0.5rem;
    }

    .sidebar-menu .nav-link {
        font-size: 0.95rem;
        padding: 0.75rem 1rem;
        margin: 0.25rem 0;
        border-radius: 8px;
        color: #2c3e50;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        white-space: normal;
        line-height: 1.4;
    }

    .sidebar-menu .nav-link:hover,
    .sidebar-menu .nav-link.active {
        background: rgba(52, 152, 219, 0.1);
        color: #3498db;
        transform: translateX(5px);
    }

    .sidebar-menu .nav-link i {
        min-width: 24px;
        transition: transform 0.3s ease;
    }

    .sidebar-menu .nav-link:hover i {
        transform: rotate(360deg);
    }

    /* Ajustes responsive */
    @media (max-width: 768px) {
        .sidebar-nav {
            position: relative;
            top: 0;
            max-height: none;
            margin-bottom: 2rem;
        }

        .sidebar-menu {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .sidebar-menu .nav-link {
            flex: 1 1 auto;
            min-width: 200px;
        }
    }

    /* Ajuste para el contenido principal */
    .content-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 1rem;
        padding: 1.5rem;
    }

    /* Aseguramos que el contenido principal tenga suficiente espacio */
    main {
        overflow-x: hidden;
    }

    /* Mejora en la transición del scroll */
    html {
        scroll-behavior: smooth;
        scroll-padding-top: 20px;
    }

    /* Estilos para el botón de regresar */
    .return-button-container {
        position: fixed;
        bottom: 40px;
        left: 40px;
        z-index: 1000;
    }

    .return-button {
        display: flex;
        align-items: center;
        gap: 15px;
        background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
        color: white;
        padding: 15px 25px;
        border-radius: 50px;
        text-decoration: none;
        box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
        transition: all 0.3s ease;
        border: 2px solid rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(5px);
    }

    .return-button:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(52, 152, 219, 0.4);
        color: white;
        background: linear-gradient(135deg, #3498db 0%, #2c3e50 100%);
    }

    .return-button-icon {
        background: rgba(255, 255, 255, 0.1);
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .return-button:hover .return-button-icon {
        transform: translateX(-5px);
        background: rgba(255, 255, 255, 0.2);
    }

    .return-button-text {
        display: flex;
        flex-direction: column;
    }

    .return-button-label {
        font-weight: 600;
        font-size: 1rem;
        line-height: 1;
    }

    .return-button-description {
        font-size: 0.75rem;
        opacity: 0.8;
    }

    /* Animación de entrada */
    .return-button-container {
        animation: slideIn 0.5s ease-out;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Efecto de brillo al hover */
    .return-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg,
                transparent 0%,
                rgba(255, 255, 255, 0.1) 50%,
                transparent 100%);
        transform: translateX(-100%);
        transition: transform 0.6s ease;
        border-radius: 50px;
    }

    .return-button:hover::before {
        transform: translateX(100%);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .return-button-container {
            bottom: 20px;
            left: 20px;
        }

        .return-button {
            padding: 12px 20px;
        }

        .return-button-description {
            display: none;
        }
    }

    /* Efecto de pulso suave */
    @keyframes softPulse {
        0% {
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
        }

        50% {
            box-shadow: 0 4px 25px rgba(52, 152, 219, 0.5);
        }

        100% {
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
        }
    }

    .return-button {
        animation: softPulse 3s infinite;
    }

    .return-button:hover {
        animation: none;
    }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    const scrollBtn = document.getElementById('scrollToTop');

    window.onscroll = function() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollBtn.style.display = 'flex';
        } else {
            scrollBtn.style.display = 'none';
        }
    };

    scrollBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Script para marcar el enlace activo durante el scroll
    document.addEventListener('DOMContentLoaded', function() {
        const sections = document.querySelectorAll('div[id^="seccion"]');
        const navLinks = document.querySelectorAll('.sidebar-menu .nav-link');

        function highlightNavigation() {
            let scrollPosition = window.scrollY;

            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                const sectionBottom = sectionTop + section.offsetHeight;

                if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === '#' + section.id) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }

        window.addEventListener('scroll', highlightNavigation);
    });
    </script>
</body>

</html>